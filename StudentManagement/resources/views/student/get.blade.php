@extends('layouts.app')
@section('content')
    <h1>Student Info</h1>
    <h3>Name: {{$st->name}}</h3>
    <h3>Id: {{$st->uid}}</h3>
    <h3>Department:{{$st->department->name}}</h3>
    <h3>Id: {{$st->cgpa}}</h3>
@endsection
@section('content1')
    <h1>Course Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Department Name</th>
        </tr>
        @foreach($st->courses as $c)
            <tr>
                <td>{{$c->course->name}}</td>
                <td>{{$c->course->department->name}}</td>
            </tr>
        @endforeach
@endsection