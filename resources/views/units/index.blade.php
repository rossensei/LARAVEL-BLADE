@extends('base')

@section('content')

<h1>Units</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Unit Type</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($units as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->unit_type}}</td>
            <td>{{$u->description}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop