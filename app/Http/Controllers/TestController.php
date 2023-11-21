<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    { {
            $nom = "Ababsa";
            $prenom = "Rabii";
            $age = 19;
            return view('test', ["data" => [$nom, $prenom, $age]]);
        }
    }
}
