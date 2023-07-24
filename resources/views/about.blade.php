{{-- calling the layout.base --}}
@extends('layouts.base')

{{-- You can pass a variable to layouts.base --}}
@section('name', 'David')

@section('content')
    <h1 class="">About</h1>
@endsection
