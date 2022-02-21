@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <tr>
        <th>SL. No</th>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Department</th>
        <th>CGPA</th>
        <th>Actions</th>
    </tr>
    @foreach($st as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td><a href="{{route('details',['id'=>$s->id])}}">{{$s->name}}</a></td>
        <td>{{$s->uid}}</td>
        <td>{{$s->dept_id}}</td>
        <td>{{$s->cgpa}}</td>
        <td><a class="btn btn-primary" href="{{route('edit',['id'=>$s->id])}}">Edit</a>
        <a class="btn btn-danger" href="{{route('delete',['id'=>$s->id])}}">Delete</a></td>
       
    </tr>
    @endforeach
</table>
@endsection