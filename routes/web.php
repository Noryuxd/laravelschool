<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tp1Controller;
use App\Http\Controllers\Tp2Controller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Tp3Controller;
use App\Http\Controllers\Tp4Controller;

Route::get("/", function () {
  return "<h1> Hello World !</h1>";
});

Route::get('/tp-1', [Tp1Controller::class, "get"]);
Route::post('/tp-1', [Tp1Controller::class, "post"]);

Route::get('/test/{id}/{name}/{age}', [TestController::class, "test"]);

// Route::resource("/tp-2", Tp2Controller::class);

Route::get("/tp-3", [Tp3Controller::class, "index"]);
Route::post("/tp-3", [Tp3Controller::class, "store"]);
Route::get("/tp-3/show", [Tp3Controller::class, "show"]);
Route::delete('/tp-3/{user}', [Tp3Controller::class, 'destroy'])->name('tp3.destroy');

Route::get("/tp-4", [Tp4Controller::class, "index"]);
Route::post("/tp-4", [Tp4Controller::class, "store"]);
Route::get("/tp-4/show", [Tp4Controller::class, "show"]);
Route::delete('/tp-4/{employee}', [Tp4Controller::class, 'destroy'])->name('tp4.destroy');
Route::get("/tp-4/update/{employee}", [Tp4Controller::class, "showUpdate"]);
Route::put('/tp-4/update/{employee}', [Tp4Controller::class, "update"])->name('tp4.update');
