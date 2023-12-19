<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TP5Controller extends Controller
{
  public function index()
  {
    return view("tp-5");
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
      'nom' => 'required|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required',
      'section' => 'required|max:255',
      "image" => "image"
    ]);
    if ($request->hasFile("image")) {
      $validated['image'] = $request->file("image")->store('images', 'public');
    }
    Employee::create($validated);

    return redirect("/tp-5/show");
  }


  public function show()
  {
    $employees = Employee::paginate(3);
    return view("tp-5show", compact("employees"));
  }

  public function destroy(Employee $employee)
  {
    if ($employee) {
      $employee->delete();
      return redirect("/tp-5/show");
    }
  }

  public function showUpdate(Employee $employee)
  {
    return view("tp-5update", compact("employee"));
  }

  public function update(Request $request, Employee $employee)
  {
    $validated = $request->validate([
      'nom' => 'required|max:255',
      'email' => 'required|email|max:255',
      'phone' => 'required',
      'section' => 'required|max:255',
      "image" => "image"
    ]);
    if ($request->has("image")) {
      $imagePath = request()->file("image")->store("profile", "public");
      $validated["image"] = $imagePath;

      Storage::disk("public")->delete($employee->image);
    }

    $employee->update($validated);
    return redirect("/tp-5/show");
  }
}
