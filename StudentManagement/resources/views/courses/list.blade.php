@extends('layouts.app')
@section('content')
<div>
    <table class="table table-bordered">
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Offered By</th>
        </tr>
        @foreach($courses as $d)
            <tr>
                <td>{{$d->id}}</a></td>
                <td><a href="">{{$d->name}}</td>
                <td>{{$d->offered_by}}</td>
                {{-- <td>
                    @foreach($courses->department as $d)
                        <td>{{$d->offered_by}}</td>  
                     @endforeach
                </td> --}}
            </tr>
        @endforeach
    </table>
</div>
@endsection