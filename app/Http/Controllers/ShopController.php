<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Models\Shop;
use App\Models\Postcode;
use Session;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shops = Shop::all(); 
        return View('shops.index')->with('shops', $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    { 
        $input     = Input::only('postcode','shopId');   
        $rules     = array('postcode' => 'required');
        $validator = Validator::make($input, $rules);
        
        if ($validator->fails() || !$this->isPostcodeValid($input['postcode'])) {
            Session::flash('alert-danger', 'Please write correct postcode');
            return Redirect::to('shops')
                ->withErrors($validator)
                ->withInput($input);
        } else {
            
            $shop = Shop::find($input['shopId']);
            $postcode = new Postcode;
            $postcode->postcode = strtoupper(preg_replace('/\s/', '', $input['postcode']));
            $shop->postcode()->save($postcode);
            // redirect
            Session::flash('alert-success', 'Postcode added successfully');
            return Redirect::to('shops');   
        }                 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    //UK postcode validation check
    public function isPostcodeValid($postcode)
    {
        //remove all whitespace
        $postcode = preg_replace('/\s/', '', $postcode);
     
        //make uppercase
        $postcode = strtoupper($postcode);
     
        if(preg_match("/^[A-Z]{1,2}[0-9]{2,3}[A-Z]{2}$/",$postcode)
            || preg_match("/^[A-Z]{1,2}[0-9]{1}[A-Z]{1}[0-9]{1}[A-Z]{2}$/",$postcode)
            || preg_match("/^GIR0[A-Z]{2}$/",$postcode))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
