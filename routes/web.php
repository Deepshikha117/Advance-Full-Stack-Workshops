<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Show the create student form
Route::get('/students/create', function () {
    return view('student.create');
});

// Save the new student
Route::post('/students', function (Request $request) {
    $student_data = $request->only([
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ]);

    $student = Student::create($student_data);

    return "Student {$student->name} created successfully!";
});