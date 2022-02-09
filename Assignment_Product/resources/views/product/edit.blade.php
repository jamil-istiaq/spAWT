@extends('layouts.layout')
@section('content')
        <form action="{{route('edit')}}" method="post">
            {{@csrf_field()}}
        <input type="text" name="name" value="{{$p->name}}" placeholder="Product Name">
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="price" value="{{$p->price}}" placeholder="Product Price">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="qty" value="{{$p->qty}}" placeholder="Product Quantity">
        @error('price')
            <span>{{$message}}</span>
        @enderror
        <br>

        <input type="text" name="dis" value="{{$p->dis}}" placeholder="Product Description">
        @error('dis')
            <span>{{$message}}</span>
        @enderror
        <br>
        <input type="submit" value="Edit Product">
        </form>
@endsection
