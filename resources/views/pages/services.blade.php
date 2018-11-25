@extends('layout')

@section('title', 'About Page')

@section('content')
<h2>Services</h2>
<ol>
    @foreach($services as $service)
        <li>{{ $service }}</li>
    @endforeach
</ol>
@endsection
