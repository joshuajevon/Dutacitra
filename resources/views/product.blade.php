@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'product'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" :bgColor="'blue'" />

<div class="header" style="background-image: url({{asset('assets/header/product-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center font-extrabold">Our Product</h1>
</div>

<div class="c-container text-paragraph py-8 sm:py-12 md:py-16 flex flex-col gap-6 sm:gap-7 md:gap-8 justify-center items-center">
    <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Product Category</h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-4 sm:gap-5 md:gap-6 text-custom-darker-blue">
        <a href="{{ route('automaticSlidingDoorsEn') }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-sliding-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Sliding Doors</p>
        </a>

        <a href="{{ route('automaticSwingDoorsEn') }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-swing-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Swing Doors</p>
        </a>

        <a href="{{ route('automaticRevolvingDoorsEn') }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/automatic-revolving-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Automatic Revolving Doors</p>
        </a>

        <a href="{{ route('automaticHermeticDoorsEn') }}" class="flex flex-col gap-2.5 sm:gap-3 md:gap-4 overflow-hidden">
            <div class="h-[300px] sm:[350px] md:h-[400px] lg:h-[450px] xl:h-[500px] overflow-hidden">
                <div class="bg-cover bg-center h-full col-span-1 hover:scale-125 transition" style="background-image: url({{asset('assets/product/hermetic-door.jpg')}}?t={{ env('VERSION_TIME') }});"></div>
            </div>
            <p class="font-ttRamillas font-extrabold text-center">Hermetic Doors</p>
        </a>
    </div>
</div>

<x-footer />
@endsection
