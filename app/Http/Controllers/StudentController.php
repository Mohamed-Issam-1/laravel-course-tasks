<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = ['Ahmad', 'Sara', 'Mohammad', 'Lina'];

        return view('students.index', compact('students'));
    }
}
