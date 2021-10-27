@extends('layouts.app')

@section('titolo', 'Comics')
@section('content-main-homepage')
    <main>
        <h2>Lista tipologie fumetti</h2>
        @foreach ($fumetti as $fumetto)
            <img src="{{$fumetto['thumb']}}" alt="">
            <h1> {{$fumetto['series']}} </h1>
        @endforeach
    </main>
@endsection