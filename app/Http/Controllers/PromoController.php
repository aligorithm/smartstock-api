<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;

/**
 * @resource Promo
 */
class PromoController extends Controller
{
    /**
     * Operations on Promo resource
     *
     * All methods require Authorisation header
     *
     */
    public function index()
    {
        $request->user()->authorizeRoles(['manager']);
        return response()->json(Promo::all());
    }

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
            'code' => 'required|string',
            'expiry' => 'required|string',
            'discount' => 'required|integer'
        ]);
        $promo = Promo::create($request->all());
        return response()->json(['promo'=>$promo])->setStatusCode(201,"Resource created");
    }

    /**@hideFromAPIDocumentation
     * */
    public function show($id)
    {
        //
    }

    /**@hideFromAPIDocumentation
     * */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->user()->authorizeRoles(['manager']);
        $this->validate($request,[
            'code' => 'required|string',
            'expiry' => 'required|string',
        ]);
        $promo = Promo::find($id);
        $promo->code = $request->get('code');
        $promo->expiry = $request->get('expiry');
        return response()->json(['promo'=>$promo])->setStatusCode(200);
    }


    public function destroy($id)
    {
        \request()->user()->authorizeRoles(['manager']);
        Promo::destroy($id);
        return response(null,200);
    }
}
