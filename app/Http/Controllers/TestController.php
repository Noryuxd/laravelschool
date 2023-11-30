<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($id, $name, $age)
    {
        return view('test', compact('id', 'name', 'age'));
    }
}
