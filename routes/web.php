<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\Tp1Controller;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get('/test', [TestController::class, "test"]);

Route::get('/tp1', [Tp1Controller::class, "get"]);
Route::post('/tp1', [Tp1Controller::class, "post"])->name("tp1");
