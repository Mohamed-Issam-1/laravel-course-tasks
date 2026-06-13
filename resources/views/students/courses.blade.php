@extends('layouts.app')

@section('title', 'Student Courses')

@section('content')
    <h1>Students and Courses</h1>

    @foreach($students as $student)
        <h3>{{ $student->name_upper }}</h3>

        <ul>
            @foreach($student->courses as $course)
                <li>{{ $course->title }}</li>
            @endforeach
        </ul>
    @endforeach
@endsection