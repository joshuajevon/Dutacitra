@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}

{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
    .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        font-size: 22px;
        font-weight: bold;
        color: #fff;
        background-color: rgb(206, 17, 17);
        border: black 1px solid;
    }
</style>
@endsection

@section('body')
<x-navbar :page="'product'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" />

<div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-44 2xl:h-48 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/product/header.jpg')}});">
    <h1 class="font-ttRamillas text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">Our Product</h1>
</div>

<div class="c-container flex justify-center items-center py-16 sm:py-20 md:py-24">
    <div class="flex flex-col justify-center items-center gap-4 max-w-5xl">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Automatic Sliding Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light"><span class="italic">Automatic Sliding Doors</span> adalah pintu yang dapat membuka dan menutup dengan cara bergeser. <span class="italic">Automatic Sliding Doors</span> dirancang untuk membuka dan menutup secara otomatis dengan kecepatan tinggi, menggabungkan teknologi canggih untuk memastikan keamanan bagi tempat usaha dan penggunanya.</p>
    </div>
</div>

<div class="px-2 sm:px-4 md:px-6 lg:px-8 xl:px-10 2xl:px-12 flex flex-col justify-center items-center gap-6 sm:gap-7 md:gap-8 pt-8 bg-custom-darker-blue text-custom-white">
    <h1 class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-bold text-center w-full">Product Type</h1>

    <div class="w-full">
        <div class="flex gap-4 sm:gap-6 md:gap-8 text-paragraph leading-none overflow-auto w-full pb-8">
            <span class="flex w-48 sm:w-56 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-3 sm:py-3.5 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Standard</span>
            <span class="flex w-48 sm:w-56 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-3 sm:py-3.5 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Telescopic</span>
            <span class="flex w-48 sm:w-56 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-3 sm:py-3.5 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Curved & Semicircular</span>
            <span class="flex w-48 sm:w-56 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-3 sm:py-3.5 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Panic Break Out</span>
            <span class="flex w-48 sm:w-56 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-3 sm:py-3.5 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Fire Resistant</span>
        </div>
    </div>
</div>

<div class="c-container py-16 flex flex-col">
    {{-- Standard --}}
    <div class="flex flex-col gap-8">
        <div>
            <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Standard Automatic Sliding Doors</h1>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
            <div class="col-span-1">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                        <div class="swiper-slide">Slide 4</div>
                        <div class="swiper-slide">Slide 5</div>
                        <div class="swiper-slide">Slide 6</div>
                        <div class="swiper-slide">Slide 7</div>
                        <div class="swiper-slide">Slide 8</div>
                        <div class="swiper-slide">Slide 9</div>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col gap-6">
                <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Standard Automatic Sliding Doors</span> door direkomendasikan untuk area dengan tingkat kegiatan yang tinggi. Pintu ini memudahkan pergerakan orang tanpa kontak dengan pintu dan menawarkan kecepatan bukaan tertinggi di pasar, bersamaan dengan tingkat keamanan maksimum.
                </p>

                <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                    <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Standard Sliding Door</p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                        <div class="col-span-1 flex flex-col gap-3">
                            <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                            <div class="flex items-center gap-4">
                                <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                <p class="text-paragraph text-custom-dark-blue/90 font-light">Dua daun pintu bergerak ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                </p>
                            </div>
                        </div>

                        <div class="col-span-1 flex flex-col gap-3">
                            <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                            <div class="flex items-center gap-4">
                                <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                <p class="text-paragraph text-custom-dark-blue/90 font-light">Daun pintu tunggal bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<x-footer />

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

{{-- JS --}}
<script src="{{ asset('js/automatic-sliding-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
