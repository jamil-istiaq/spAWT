@extends('layouts.app')
@section('content')
    <div>
        <h2 class="label label-secondary">Faculty Name: {{$t->name}}</h2>
    </div>
    {{-- @if(count($d->students)>0) --}}
        <table class="table table-bordered">
            <tr>
                <th>Courses</th>
            </tr>
            <tr>
                <td>{{$t->name}}</td>
            </tr>
           
            <tr>
                {{-- <td>{{$t->course->name}}</td> --}}
                {{-- <td>{{$c->course->department->name}}</td> --}}
            </tr>
        
           
        </table>
@endsection