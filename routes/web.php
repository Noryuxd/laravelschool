<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get("/", function () {
    return "<h1> Hello World !</h1>";
});

Route::get('/test', [TestController::class, "test"]);

Route::get('/test/{id}/{name}/{age}', function (Request $request, string $id, string $name, int $age) {
    echo "ID: $id<br>";
    echo "Name: $name<br>";
    echo "Age: $age<br>";
});
