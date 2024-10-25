<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }

    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'email wajib di isi',
            'password.required'=>'password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            //jika auth sukses
            return 'sukses';
        } else {
            // if auth gagal
            return 'gagal';
        }
    }
}
