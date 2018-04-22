<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

/**
 * @resource Category
 */
class CategoryController extends Controller
{
    /**
     * Operations on Category resource
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
        return response()->json(Category::all());
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
        ]);
        $category = Category::create($request->all());
        return response()->json(['category'=>$category])->setStatusCode(201,"Resource created");
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255'
        ]);
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();
        return response()->setStatusCode(204,"Resource Updated");
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->setStatusCode(204,"Resource Deleted");
    }
    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category)->setStatusCode(200);
    }
}
