<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function home(){
        return view('home');
    }
    public function identitas(){
        return view('tab.identitasPengusul');
    }
    public function tataPamong(){
        return view('tab.tataPamong');
    }
    public function mahasiswa(){
        return view('tab.mahasiswa');
    }
    public function sdm(){
        return view('tab.sdm');
    }
    public function profilDosen(){
        return view('tab.profilDosen');
    }
    public function kinerjaDosen(){
        return view('tab.kinerjaDosen');
    }
    public function keuangan(){
        return view('tab.keuanganSarpras');
    }
    public function pendidikan(){
        return view('tab.pendidikan');
    }
    public function penelitian(){
        return view('tab.penelitian');
    }
    public function pkm(){
        return view('tab.pkm');
    }
    public function luaran(){
        return view('tab.luaran');
    }
    public function matrik(){
        return view('tab.matrik');
    }
    public function index(){
        //
    }
}
