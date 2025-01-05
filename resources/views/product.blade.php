@extends('template.template')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'product'" :lang="$lang" :bgColor="'blue'" />

<div class="header" style="background-image: url({{asset('assets/header/product-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-playfair text-center font-extrabold">
        Our Product
    </h1>
</div>

<div class="c-container text-paragraph pb-8 sm:pb-12 md:pb-16 pt-6 sm:pt-8 md:pt-10 flex flex-col gap-6 sm:gap-7 md:gap-8 justify-center items-center">
    <h1 class="text-heading text-custom-dark-blue font-playfair font-extrabold text-center">Product Category</h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-4 sm:gap-5 md:gap-6 text-custom-darker-blue">
        <a href="{{ route('automatic-sliding-doors', ['lang' => $lang]) }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-sliding-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-playfair font-extrabold text-center">Automatic Sliding Doors</p>
        </a>

        <a href="{{ route('automatic-swing-doors', ['lang' => $lang]) }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-swing-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-playfair font-extrabold text-center">Automatic Swing Doors</p>
        </a>

        <a href="{{ route('automatic-revolving-doors', ['lang' => $lang]) }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-revolving-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-playfair font-extrabold text-center">Automatic Revolving Doors</p>
        </a>

        <a href="{{ route('automatic-hermetic-doors', ['lang' => $lang]) }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/hermetic-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-playfair font-extrabold text-center">Hermetic Doors</p>
        </a>
    </div>
</div>

<x-footer :lang="$lang" />
@endsection
