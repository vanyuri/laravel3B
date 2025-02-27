<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;

Route::get('/', function () {
    return view('login'); 
});

Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'vanyuri@gmail.com' && $password === 'password') {
        $request->session()->put('user', 'authenticated');
        return redirect('/inventory');
    }

    return back()->with('error', 'Invalid credentials. Try again.');
});

Route::get('/inventory', function () {
    if (!session()->has('user')) { // ✅ Corrected session check
        return redirect('/')->with('error', 'Please log in first.');
    }

    $students = Student::all();
    return view('inventory', ['students' => $students]);
});

// ✅ Route to show the create form
Route::get('/students/create', function () {
    if (!session()->has('user')) {
        return redirect('/')->with('error', 'Please log in first.');
    }
    return view('create');
});

// ✅ Route to store student data
Route::post('/students', function (Request $request) {
    $request->validate([
        'student_id' => 'required|unique:students',
        'name' => 'required',
        'course' => 'required',
    ]);

    Student::create([
        'student_id' => $request->input('student_id'),
        'name' => $request->input('name'),
        'course' => $request->input('course'),
    ]);

    return redirect('/inventory')->with('success', 'Student added successfully!');
});

Route::get('/logout', function (Request $request) {
    $request->session()->forget('user');
    return redirect('/')->with('message', 'Logged out successfully.');
});
