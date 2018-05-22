<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

/**
 * @resource Product
 *
 * Operations on Products
 */
class ProductController extends Controller
{
    public function __construct()
    {
//        $this->middleware("auth:api");
    }


    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**@hideFromAPIDocumentation
     * */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
            'code' => 'required|string',
            'price' => 'required|string',
            'quantity' => 'required|integer',
            'brand_id' => 'required|integer',
            'category_id' => 'required|integer',
        ]);
        $product = Product::create($request->all());
        return response()->json(['product'=>$product])->setStatusCode(201,"Resource created");
    }
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product)->setStatusCode(200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**@hideFromAPIDocumentation
     * */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->code = $request->get('code');
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->brand_id = $request->get('brand_id');
        $product->category_id = $request->get('category_id');
        $product->save();
        return response()->setStatusCode(204,"Resource Updated");
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->setStatusCode(200);
    }
}
