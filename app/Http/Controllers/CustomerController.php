<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

/**
 * @resource Customer
 */
class CustomerController extends Controller
{
    /**
     * Operations on Customer resource
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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['manager']);
        return response()->json(Customer::with('sales')->get());
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['seller','manager']);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|max:255'
        ]);
        $customer = Customer::create($request->all());
        return response()->json(['status'=>true,'customer'=>$customer])->setStatusCode(201,"Resource created");
    }
    public function search(Request $request){
        $request->user()->authorizeRoles(['seller','manager']);
        $this->validate($request,
            [
               'keyword' => 'required|string'
            ]);
        $keyword = $request->get('keyword');
        $customers = Customer::where('name','like','%' . $keyword . '%')->orWhere('phone','like','%' . $keyword . '%');
        return response()->json(['status'=>true,'customers',$customers])->setStatusCode(200);
    }

    public function update(Request $request, $id)
    {
        $request->user()->authorizeRoles(['seller','manager']);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|max:255'
        ]);
        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->address = $request->get('address');
        $customer->phone = $request->get('phone');
        $customer->email = $request->get('email');
        $customer->save();
        return response()->setStatusCode(204,"Resource Updated");
    }

    public function destroy($id)
    {
        \request()->user()->authorizeRoles(['manager']);
        $customer = Customer::find($id);
        $customer->delete();
        return response()->setStatusCode(204,"Resource Deleted");
    }
    public function show($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer)->setStatusCode(200);
    }
}
