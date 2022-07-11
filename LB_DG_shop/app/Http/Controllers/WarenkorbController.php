<?php

namespace App\Http\Controllers;

use App\Models\warenkorb;
use App\Http\Requests\StorewarenkorbRequest;
use App\Http\Requests\UpdatewarenkorbRequest;

class WarenkorbController extends Controller
{
    public function index()
    {
        return view('warenkorb');
    }
}
