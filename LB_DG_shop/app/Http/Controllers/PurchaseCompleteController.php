<?php

namespace App\Http\Controllers;

use App\Models\purchase_complete;
use App\Http\Requests\Storepurchase_completeRequest;
use App\Http\Requests\Updatepurchase_completeRequest;

class PurchaseCompleteController extends Controller
{
    public function index()
    {
        return view('purchase_complete');
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
     * @param  \App\Http\Requests\Storepurchase_completeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepurchase_completeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\purchase_complete  $purchase_complete
     * @return \Illuminate\Http\Response
     */
    public function show(purchase_complete $purchase_complete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\purchase_complete  $purchase_complete
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase_complete $purchase_complete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepurchase_completeRequest  $request
     * @param  \App\Models\purchase_complete  $purchase_complete
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepurchase_completeRequest $request, purchase_complete $purchase_complete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\purchase_complete  $purchase_complete
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase_complete $purchase_complete)
    {
        //
    }
}
