@extends('layouts.app')
@section('content')
<form action="{{route('register')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
        @error('name')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="email" value="{{old('email')}}" placeholder="Email">
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="text" name="id" value="{{old('id')}}" placeholder="Id">
        @error('id')
        <span>{{$message}}</span>
        @enderror
        <br>
        {{-- <select name="rl">
            <option selected disabled>Select Position</option>
            <option value="1">Student</option>
            <option value="2">Teacher</option>
            <option value="3">Admin</option>
        </select>
        @error('rl')
        <span>{{$message}}</span>
        @enderror
        <br> --}}
        <input type="password" name="password"  placeholder="Password">
        @error('password')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="password" name="conf_password"  placeholder="Confirm Password">
        @error('conf_password')
        <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Register" >
    </form>
@endsection
