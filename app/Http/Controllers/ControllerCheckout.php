<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use Illuminate\Http\Request;

class ControllerCheckout extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Checkout $checkout)
    {
        $checkout = Checkout::all();
        return view('admin.checkout.checkout', ['Checkout' => $checkout]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function show(CheckOut $checkOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckOut $checkOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckOut $checkOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckOut  $checkOut
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckOut $checkOut)
    {
        //
    }
}
