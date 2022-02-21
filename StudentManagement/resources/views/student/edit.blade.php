@extends('layouts.app')
@section('content')
<form action="{{route('edit',['id'=>$st->id])}}" method="post">
    {{@csrf_field()}}
    
    <input type="hidden" name="Id" value="{{$st->id}}">

    <input type="text" name="name" value="{{$st->name}}" placeholder="Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="id" value="{{$st->uid}}" placeholder="Id">
        @error('id')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="cgpa" value="{{$st->cgpa}}" placeholder="CGPA"><br>
        @error('cgpa')
        <span>{{$message}}</span>
        @enderror
        
        <input type="submit" value="Edit">
    </form>
@endsection
