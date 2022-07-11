<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Http\Requests\StorecheckoutRequest;
use App\Http\Requests\UpdatecheckoutRequest;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
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
     * @param  \App\Http\Requests\StorecheckoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecheckoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecheckoutRequest  $request
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecheckoutRequest $request, checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkout $checkout)
    {
        //
    }
}
