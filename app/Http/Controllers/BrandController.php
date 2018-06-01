<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

/**
 * @resource Brand
 */
class BrandController extends Controller
{
    /**
     * Operations on Brand resource
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
        return response()->json(Brand::all());
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        $this->validate($request,[
            'name' => 'required|string|max:255'
        ]);
        $brand = Brand::create($request->all());
        return response()->json(['brand'=>$brand])->setStatusCode(201,"Resource created");
    }

    public function update(Request $request, $id)
    {
        $request->user()->authorizeRoles(['manager']);
        $this->validate($request,[
            'name' => 'required|string|max:255'
        ]);
        $brand = Brand::find($id);
        $brand->name = $request->get('name');
        $brand->save();
        return response()->setStatusCode(204,"Resource Updated");
    }

    public function destroy($id)
    {
        \request()->user()->authorizeRoles(['manager']);
        $brand = Brand::find($id);
        $brand->delete();
        return response()->setStatusCode(204,"Resource Deleted");
    }
    public function show($id)
    {
        $brand = Brand::find($id);
        return response()->json($brand)->setStatusCode(200);
    }
}
