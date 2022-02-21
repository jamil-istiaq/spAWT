@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <tr>
        <th>SL. No</th>
        <th>Teacher Name</th>
        <th>Designation</th>
    </tr>
    @foreach($t as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td><a href="{{route('teachers.details',['id'=>$s->id])}}">{{$s->name}}</a></td>
        <td>{{$s->designation}}</td>
    </tr>
    @endforeach
</table>
@endsection