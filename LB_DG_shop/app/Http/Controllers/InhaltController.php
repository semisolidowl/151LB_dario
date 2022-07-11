<?php

namespace App\Http\Controllers;

use App\Models\inhalt;
use App\Http\Requests\StoreinhaltRequest;
use App\Http\Requests\UpdateinhaltRequest;

class InhaltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreinhaltRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinhaltRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inhalt  $inhalt
     * @return \Illuminate\Http\Response
     */
    public function show(inhalt $inhalt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inhalt  $inhalt
     * @return \Illuminate\Http\Response
     */
    public function edit(inhalt $inhalt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinhaltRequest  $request
     * @param  \App\Models\inhalt  $inhalt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinhaltRequest $request, inhalt $inhalt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inhalt  $inhalt
     * @return \Illuminate\Http\Response
     */
    public function destroy(inhalt $inhalt)
    {
        //
    }
}
