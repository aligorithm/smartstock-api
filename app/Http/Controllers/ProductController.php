<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @resource Product
 *
 * Operations on Products
 */
class ProductController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        return response()->json(Product::with(['category','brand'])->get());
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
        $request->user()->authorizeRoles(['manager']);
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'quantity' => 'required|integer',
            'brand' => 'required|string',
            'category' => 'required|string',
        ]);
        $product = new Product();
        $product->name = $request->get("name");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->quantity = $request->get("quantity");
        $product->code = Str::random(5);
        if (Brand::where("name",$request->get("brand"))->count() > 0){
            $brand = Brand::where("name",$request->get("brand"))->first();
            $product->brand_id = $brand->id;
        } else{
            $brand = new Brand(["name" => $request->get("brand")]);
            $brand->save();
            $product->brand_id = $brand->id;
        }
        if (Category::where("name",$request->get("category"))->count() > 0){
            $category = Category::where("name",$request->get("category"))->first();
            $product->category_id = $category->id;
        } else{
            $category = new Category(["name" => $request->get("category")]);
            $category->save();
            $product->category_id = $category->id;
        }

        $product->save();
        return response()->json(['product'=>$product, 'brand' => Brand::find($product->brand_id), 'category' => Category::find($product->category_id)])->setStatusCode(201,"Resource created");
    }
    public function show($id)
    {
        \request()->user()->authorizeRoles(['manager']);
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
        $request->user()->authorizeRoles(['manager']);
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
        \request()->user()->authorizeRoles(['manager']);
        Product::destroy($id);
        return response()->setStatusCode(200);
    }
}
