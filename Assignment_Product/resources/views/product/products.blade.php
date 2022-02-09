@extends('layouts.layout')
@section('content')
<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Customer Actions</th>
        <th>Admin Actions</th>
    </tr>
    @foreach ($products as $p)
    <tr>
       <td>{{$p->p_id}}</td>
       <td>{{$p->name}}</td>
       <td>{{$p->price}}</td>
       <td>{{$p->qty}}</td>
       <td>{{$p->dis}}</td>
       <td><a href="#">Order</a></td>
       <td>
           <a href="{{route('edit',$p->p_id)}}">Edit</a> |
           <a href="#">Delete</a>
        </td>
    </tr>
        
    @endforeach
</table>



@endsection