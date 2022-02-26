<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriksController extends Controller
{
    public function index()
    {
        return view('tab.matrik');
    }
}
