@extends('template.template')

@section('head')
    {{-- Splide --}}

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}">
@endsection

@section('body')
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
@endsection
