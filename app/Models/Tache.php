<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
  use HasFactory;

  protected $fillable = ["titre", "description", "etat"];

  public function employees()
  {
    return $this->belongsToMany(Employee::class, "employees_taches");
  }
}
