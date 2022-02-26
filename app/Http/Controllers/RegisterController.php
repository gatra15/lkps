<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {

        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:7|max:255',
            'vpassword' => 'required|same:password'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/')->with('success', 'Registration successful! Please Login');

    }
}
