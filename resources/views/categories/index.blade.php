@extends('base')

@section('content')

<h1>Categories</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categories as $cat)

        <tr>
            <td>{{$cat->id}}</td>
            <td>{{$cat->category}}</td>
            <td>{{$cat->description}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop