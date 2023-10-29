@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'product'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" />

<div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-44 2xl:h-48 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/product/header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">Our Product</h1>
</div>

<div class="c-container text-paragraph py-16 sm:py-24 md:py-32 flex flex-col gap-8 justify-center items-center">
    <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Product Category</h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-4 sm:gap-5 md:gap-6 text-custom-darker-blue">
        <a href="{{ route('automaticSlidingDoors') }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-sliding-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Sliding Doors</p>
        </a>

        <a href="" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-swing-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Swing Doors</p>
        </a>

        <a href="" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-revolving-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Revolving Doors</p>
        </a>

        <a href="" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/hermetic-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Hermetic Doors</p>
        </a>
    </div>
</div>

<x-footer />
@endsection
