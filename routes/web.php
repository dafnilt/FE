<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home.index', [
        'name' => 'Andy'
    ]);
});

Route::get('/students', function () {
    $students = session('students', []);
    return view('students.index', ['students' => $students]);
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students', function (Request $request) {
    $students = session()->get('students', []);

    $students[] = [
        'id' => count($students) + 1,
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ];

    session()->put('students', $students);
    
    return redirect('/students')->with('success', 'Data Mahasiswa berhasil ditambahkan!');
});