<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataPamongController extends Controller
{
    public function index()
    {
        return view('tab.tataPamong');
    }
}
