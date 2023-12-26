<?php

use App\Models\Employee;
use App\Models\Projet;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('employee_projet', function (Blueprint $table) {
      $table->id();
      $table->foreignId('employee_id')->constrained();
      $table->foreignId('projet_id')->constrained();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::table('employee_projet', function (Blueprint $table) {
      $table->dropForeign(['projet_id']);
    });

    Schema::dropIfExists('projets');
  }
};
