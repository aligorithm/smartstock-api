<?php

namespace App\Http\Controllers;

use App\Order;
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
        $request->user()->authorizeRoles(['seller']);
        $this->validate($request,[
            'total_price' => 'required|string',
            'sales' => 'required'
        ]);
        if (!empty($request->get('promo_code'))){
            $promo = Promo::all()->where('code',$request->get('promo_code'))->first();
            $expiryCarbon = Carbon::createFromFormat('d/m/Y', $promo->expiry);
            if ($expiryCarbon->isPast()){
                $order = new Order();
                $order->total_price = $request->get('total_price');
                $order->promo_code = $request->get('promo_code');
                $order->charged = ($request->get('total_price') - ($promo->discount / 100) * $request->get('total_price'));
                $order->discount = ($promo->discount / 100) * $request->get('total_price') - ($request->get('total_price'));
                $order->user_id = $request->user()->id;
                $order->save();
            }
        }else{
            $order = new Order();
            $order->total_price = $request->get('total_price');
            $order->promo_code = "N/A";
            $order->charged = $request->get('total_price');
            $order->discount = 0;
            $order->user_id = $request->user()->id;
            $order->save();
        }
        $body = $request->json()->all();
        $sales = $body['sales'];
        foreach ($sales as $sale) {
            $savedSale = new Sale();
            $savedSale->amount = $sale['amount'];
            $savedSale->quantity = $sale['quantity'];
            $savedSale->total = $sale['total'];
//            $savedSale->customer_id = $sale['customer_id'];
            $savedSale->product_id = $sale['product_id'];
            $savedSale->added = 0;
            $savedSale->subtracted = 0;
            $savedSale->customer_id = 1;
            $savedSale->staff_id = $request->user()->id;
            $savedSale->save();

            $product = Product::all()->where('id','=',$sale['product_id'])->first();
            $newQuantity = $product->quantity - $sale['quantity'];
            $product->quantity = $newQuantity;
            $product->save;
    }
        return response()->json(['status'=>true,'order'=>$order,'sales',$sales])->setStatusCode(201,"Resource Created");
    }

    public function update(Request $request, $id)
    {
//
//        $sale = Sale::find($id);
//        $sale->amount = $request->get('amount');
//        $sale->quantity = $request->get('quantity');
//        $sale->total = $request->get('total');
//        $sale->promo_code = $request->get('promo_code');
//        $sale->customer_id = $request->get('customer_id');
//        $sale->product_id = $request->get('product_id');
//        $sale->staff_id = $request->get('staff_id');
//        $sale->save();
        return response()->setStatusCode(400,"Unsupported Action");
    }

    public function destroy($id)
    {
        return response()->setStatusCode(400,"Delete not supported for this resource");
    }
    public function show($id)
    {
        $sale = Sale::find($id);
        return response()->json($sale)->setStatusCode(200);
    }

    public function add(Request $request, $id){
        $request->user()->authorizeRoles(['seller']);
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
        $request->user()->authorizeRoles(['seller']);
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
