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
            @foreach($t->courses as $c)

            <tr>
                <td>{{$c->course->name}}</td>

            </tr>

        @endforeach
    
        </table>
@endsection