<?php
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;



Route::get('/hello', [HelloController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
