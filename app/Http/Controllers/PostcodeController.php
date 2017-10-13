<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\postcode;
use App\Models\Shop;
use Session;

class PostcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $shopAPostcodes = Shop::find(1)->postcode;
        $shopBPostcodes = Shop::find(2)->postcode;
        
        $data = array (
            'shopAPostcodes' => $shopAPostcodes,
            'shopBPostcodes' => $shopBPostcodes
        );
        return View('postcode.index')->with('postcodes', $data);
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
        // delete
        $postcode = Postcode::find($id);
        $postcode->delete();

        // redirect
        Session::flash('alert-success', 'Successfully deleted the postcode!');
        return Redirect::to('postcodes');
    } 
}
