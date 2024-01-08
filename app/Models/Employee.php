<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  use HasFactory;

  protected $fillable = [
    'nom',
    'email',
    "phone",
    "section",
    "image"
  ];

  public function projets()
  {
    return $this->belongsToMany(Projet::class);
  }

  public function taches()
  {
    return $this->hasMany(Tache::class, 'employees_taches');
  }
}
