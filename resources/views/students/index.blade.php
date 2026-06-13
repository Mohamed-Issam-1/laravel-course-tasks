@extends('layouts.app')

@section('title', 'Students')

@section('content')

<h1>Students List</h1>

@foreach($students as $student)
    <p>
        {{ $student->name }}
        -
        {{ $student->course->title }}
    </p>
@endforeach

@endsection
