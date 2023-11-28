<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tp1Controller extends Controller
{
    public function get()
    {
        return view("tp-1");
    }

    public function post(Request $request)
    {
        $value = $request->input("value");
        return view("tp-1", ["value" => $value]);
    }
}
