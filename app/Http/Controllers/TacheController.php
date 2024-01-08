<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Employee;
use Illuminate\Http\Request;

class TacheController extends Controller
{
  public function index()
  {
    $taches = Tache::all();
    return view("tache.index", ["taches" => $taches]);
  }

  public function create()
  {
    $employees = Employee::all();
    return view("tache.form", ["employees" => $employees]);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'titre' => 'required|max:255',
      'description' => 'required|max:255',
      'etat' => 'required|max:255'
    ]);
    $tache = Tache::create($validatedData);
    $tache->update($validatedData);

    if ($request->has('employees')) {
      $tache->employees()->sync($request->employees);
    }
    return redirect()->route('tache.index');
  }


  public function edit(Tache $tache)
  {
    $employees = Employee::all();
    return view("tache.form", ["employees" => $employees, "tache" => $tache]);
  }

  public function update(Request $request, Tache $tache)
  {
    $validatedData = $request->validate([
      'titre' => 'required|max:255',
      'description' => 'required|max:255',
      'etat' => 'required|max:255'
    ]);
    if ($validatedData["etat"] == "terminer") {
      $tache->delete();
      return redirect()->route('tache.index');
    }
    $tache->update($validatedData);

    if ($request->has('employees')) {
      $tache->employees()->sync($request->employees);
    }
    return redirect()->route('tache.index');
  }

  public function destroy(Tache $tache)
  {
    $tache->delete();
    return redirect()->route('tache.index');
  }
}
