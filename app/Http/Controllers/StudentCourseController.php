<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentCourseController extends Controller
{
    public function index()
    {
        $students = Student::with('courses')->get();

        return view('students.courses', compact('students'));
    }
}
