<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Promo;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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
        \request()->user()->authorizeRoles(['manager']);
        return response()->json(Product::with(['category','brand'])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**@hideFromAPIDocumentation
     * */
    public function dashboard(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $brands = Brand::all()->count();
        $categories = Category::all()->count();
        $products = Product::all()->count();
        $today = Sale::whereDate('created_at', Carbon::today())->count();
        $promos = Promo::all()->count();
        return response()->json(['brands'=> $brands,'categories'=> $categories,'products'=> $products,
            'today'=> $today,'promos'=> $promos])->setStatusCode(200);
    }
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'quantity' => 'required|integer',
            'code' => 'required|string',
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
        $product->price = $request->get('price');
        $product->quantity = $request->get('quantity');
        $product->brand = $request->get('brand');
        $product->category = $request->get('category');
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
        return response()->setStatusCode(204,"Resource Updated");
    }
    public function destroy($id)
    {
        \request()->user()->authorizeRoles(['manager']);
        Product::destroy($id);
        return response()->setStatusCode(200);
    }
}
