<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tp1Controller;
use App\Http\Controllers\Tp2Controller;
use App\Http\Controllers\TestController;

Route::get("/", function () {
    return "<h1> Hello World !</h1>";
});

Route::get('/tp-1', [Tp1Controller::class, "get"]);
Route::post('/tp-1', [Tp1Controller::class, "post"]);

Route::get('/test', [TestController::class, "test"]);

Route::get('/test/{id}/{name}/{age}', function (Request $request, string $id, string $name, int $age) {
    echo "ID: $id<br>";
    echo "Name: $name<br>";
    echo "Age: $age<br>";
});

Route::resource("/tp-2", Tp2Controller::class);
