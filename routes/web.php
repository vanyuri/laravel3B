<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login'); 
});

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'vanyuri@gmail.com' && $password === 'password') {
        // Store session data
        $request->session()->put('user', 'authenticated');
        return redirect('/inventory'); 
    }

    return back()->with('error', 'Invalid credentials. Try again.');
});

Route::get('/inventory', function () {
    if (!session('user')) {
        return redirect('/')->with('error', 'Please log in first.');
    }
    return view('inventory'); 
});

Route::get('/logout', function (Request $request) {
    $request->session()->forget('user');
    return redirect('/')->with('message', 'Logged out successfully.');
});
