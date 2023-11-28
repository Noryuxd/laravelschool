<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\Tp1Controller;
use Illuminate\Support\Facades\Route;

Route::get("/", function(){
    return view("welcome");
});

Route::get('/tp-1', [Tp1Controller::class, "get"]);
Route::post('/tp-1', [Tp1Controller::class, "post"]);

Route::get('/test', [TestController::class, "test"]);

Route::get('/{id}', function (int $id) {
    return $id;
});
