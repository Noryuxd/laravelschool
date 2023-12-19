<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class Tp4Controller extends Controller
{
  public function index()
  {
    return view("tp-4");
  }
  public function store()
  {

    $values = [
      "nom" => request()->input("nom"),
      "prenom" => request()->input("prenom"),
      "email" => request()->input("email"),
    ];

    Employee::create($values);
    return redirect("/tp-4/show");
  }

  public function show()
  {
    $employees = Employee::all();
    return view("tp-4show", compact("employees"));
  }

  public function destroy(Employee $employee)
  {
    if ($employee) {
      $employee->delete();
      return redirect("/tp-4/show");
    }
  }

  public function showUpdate(Employee $employee)
  {
    return view("tp-4update", compact("employee"));
  }

  public function update(Employee $employee)
  {
    $employee->update([
      'nom' => request()->input('nom'),
      'prenom' => request()->input('prenom'),
      'email' => request()->input('email'),
    ]);

    return redirect("/tp-4/show");
  }
}
