<?php

namespace App\Http\Controllers;

use App\Product;
use App\Promo;
use App\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @resource Sale
 */
class SaleController extends Controller
{
    /**
     * Operations on Sale resource
     *
     * All methods require Authorisation header
     *
     */

    /**@hideFromAPIDocumentation
     * */
    public function create(){}

    /**@hideFromAPIDocumentation
     * */
    public function edit(){}
    public function index()
    {
        return response()->json(Sale::all());
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'amount' => 'required|string',
            'quantity' => 'required|integer',
            'total' => 'required|string',
            'customer_id' => 'required|integer',
            'product_id' => 'required|integer',
            'staff_id' => 'required|integer',
        ]);
        if (!empty($request->get('promo_code'))){
            $promo = Promo::all()->where('code',$request->get('promo_code'))->first();
            $expiryCarbon = Carbon::createFromFormat('d/m/Y', $promo->expiry);
            if ($expiryCarbon->isPast()){
                $sale = new Sale();
                $sale->amount = $request->get('amount');
                $sale->quantity = $request->get('quantity');
                $sale->total = ($request->get('total') - ($promo->discount / 100) * $request->get('total'));
                $sale->customer_id = $request->get('customer_id');
                $sale->product_id = $request->get('product_id');
                $sale->staff_id = $request->get('staff_id');
                $sale->save();
            }
        }else{
            $sale = Sale::create($request->all());
        }
        $product = Product::find($sale->product_id);
        $product->quantity = $product->quantity - $sale->quantity;
        $product->save;
        return response()->json(['sale'=>$sale])->setStatusCode(201,"Resource created");
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);
        $sale->amount = $request->get('amount');
        $sale->quantity = $request->get('quantity');
        $sale->total = $request->get('total');
        $sale->promo_code = $request->get('promo_code');
        $sale->customer_id = $request->get('customer_id');
        $sale->product_id = $request->get('product_id');
        $sale->staff_id = $request->get('staff_id');
        $sale->save();
        return response()->setStatusCode(204,"Resource Updated");
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return response()->setStatusCode(204,"Resource Deleted");
    }
    public function show($id)
    {
        $sale = Sale::find($id);
        return response()->json($sale)->setStatusCode(200);
    }

    public function add(Request $request, $id){
        $this->validate($request,[
            'quantity' => 'required'
        ]);
        $sale = Sale::find($id);
        $sale->quantity = $sale->quantity + $request->get('quantity');
        $sale->added = $sale->added + $request->get('quantity');
        $sale->total = $sale->quantity * $sale->price;
        $sale->save();
        $product = Product::find($sale->product_id);
        $product->quantity = $product->quantity - $request->get('quantity');
        return response()->setStatusCode(204,"Resource Updated");
    }
    public function subtract(Request $request, $id){
        $this->validate($request,[
            'quantity' => 'required'
        ]);
        $sale = Sale::find($id);
        $sale->quantity = $sale->quantity - $request->get('quantity');
        $sale->subtracted = $sale->added + $request->get('quantity');
        $sale->total = $sale->quantity * $sale->price;
        $sale->save();
        $product = Product::find($sale->product_id);
        $product->quantity = $product->quantity + $request->get('quantity');
        return response()->setStatusCode(204,"Resource Updated");
    }
}
