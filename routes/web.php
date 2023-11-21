<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get("/", function(){
    return view("welcome");
});

Route::get('/test', [TestController::class, "test"]);

Route::get('/{id}', function (int $id) {
    return "<h1>" . $id . "</h1>";
});
