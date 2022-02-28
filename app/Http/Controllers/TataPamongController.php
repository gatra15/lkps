<?php

namespace App\Http\Controllers;

use App\Models\IndikatorTataKerjasama;
use Illuminate\Http\Request;

class TataPamongController extends Controller
{
    public function index()
    {
        $kerjasama = IndikatorTataKerjasama::all();
        
        return view('tab.tataPamong', [
            'title' => 'Tata Pamong',
            'kerjasama' => $kerjasama
        ]);

        
    }

}
