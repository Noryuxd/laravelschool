<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tp1Controller extends Controller
{
    function get()
    {
        return view("tp1");
    }

    function post(Request $request) {
        $value = $request->input("input");
    return view('tp1')->with("value", $value);
    }
}
