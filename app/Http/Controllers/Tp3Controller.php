<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Tp3Controller extends Controller
{
  public function index()
  {
    return view("tp-3");
  }

  public function store()
  {

    $values = [
      "nom" => request()->input("nom"),
      "prenom" => request()->input("prenom"),
      "age" => request()->input("age"),
      "email" => request()->input("email"),
      "password" => request()->input("password")
    ];

    User::create($values);
    return redirect("/tp-3/show");
  }

  public function show()
  {
    $users = User::all();
    return view("tp-3show", compact("users"));
  }

  public function destroy(User $user) {
    if ($user) {
      $user->delete();
      return redirect("/tp-3/show");
    }
  }
}
