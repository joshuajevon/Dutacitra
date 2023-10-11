@extends('template.template-en')

@section('head')
    {{-- css --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
    <x-navbar-en :page="'home'" />

    <div class="c-container py-32 min-h-screen">
        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>
    </div>

    <x-footer />
@endsection
