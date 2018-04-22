<?php

namespace App\Http\Controllers;

use App\Sale;
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
            'promo_code' => 'string',
            'customer_id' => 'required|integer',
            'product_id' => 'required|integer',
            'staff_id' => 'required|integer',
        ]);
        $sale = Sale::create($request->all());
        return response()->json(['sale'=>$sale])->setStatusCode(201,"Resource created");
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255'
        ]);
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
}
