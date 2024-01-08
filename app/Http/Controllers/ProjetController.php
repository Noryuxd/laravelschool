<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $employees = Employee::paginate(3);
    return view("TP6.index", compact("employees"));
  }

  public function create()
  {
    $employees = Employee::all();
    return view("TP6.create", compact("employees"));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request, Projet $projet)
  {
    $validated = $request->validate([
      'nom' => 'required|max:255',
      'description' => 'required|max:255',
    ]);
    $projet = Projet::create($validated);


    if ($request->has('employees')) {
      $projet->employees()->attach($request->input('employees'));
    }
    return redirect("/TP6");
  }



  public function show(Projet $projet)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Projet $projet)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Projet $projet)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Projet $projet)
  {
    //
  }
}
