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
    }

    .swiper-pagination {
        transform: translateY(36px);
    }

</style>
@endsection

@section('body')
<x-navbar :page="'product'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" />

<div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-44 2xl:h-48 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/header/product-header.jpg')}});">
    <h1 class="font-ttRamillas text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">Our Product</h1>
</div>

<div class="c-container flex justify-center items-center py-16 sm:py-20 md:py-24">
    <div class="flex flex-col justify-center items-center gap-4 max-w-5xl">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Automatic Revolving Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light"><span class="italic">Automatic Swing Doors</span> dirancang untuk dapat disesuaikan dengan berbagai jenis proyek, dan menjamin efisiensi energi maksimal serta kualitas yang tinggi.</p>
    </div>
</div>

<div class="w-full h-8 sm:h-10 md:h-12 lg:h-14 xl:h-16 bg-custom-darker-blue"></div>

<div class="c-container py-16 flex flex-col gap-8 sm:gap-10 md:gap-12 lg:gap-14 xl:gap-16">
    <div class="product-type">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Automatic Revolving Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-revolving-doors/revolving-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="revolving 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-revolving-doors/revolving-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="revolving 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-revolving-doors/revolving-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="revolving 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-revolving-doors/revolving-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="revolving 4"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-revolving-doors/revolving-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="revolving 5"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col justify-center gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Automatic Revolving Doors</span> dirancang khusus untuk menjaga sistem pengkondisian udara di dalam bangunan dan memenuhi standar tertinggi dalam hal fungsionalitas, kebersihan, dan keselamatan. Pintu ini menjamin isolasi termal dan akustik yang sempurna dengan mencegah aliran udara dan fluktuasi suhu. Selain itu, dilengkapi dengan sistem darurat untuk keluar yang terintegrasi, meningkatkan keamanan pengguna. Pintu ini dapat disesuaikan dengan proyek arsitektur tingkat tinggi, memberikan jaminan efisiensi energi maksimal, estetika yang elegan, dan kualitas unggul.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Revolving Door</p>

        <div class="grid grid-cols-1">
            <div class="col-span-1 flex flex-col gap-3">
                <div class="flex items-center gap-4">
                    <img src="{{asset('assets/product/revolving-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light"><span class="italic">Automatic Revolving Door</span> ini terdiri dari beberapa daun pintu yang berputar mengelilingi central axis. Terdapat opsi untuk menggunakan 4 daun pintu atau 3 daun pintu dan menggunakan night shield pada pintu atau menerapkan mekanisme bookshield.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c-container pb-16 sm:pb-20 md:pb-24">
    <div class="px-10 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl py-8 text-custom-white gap-6">
        <h1 class="font-ttRamillas font-extrabold text-base sm:text-lg md:text-xl">Downloads</h1>

        <div class="border-b border-b-custom-white flex flex-col gap-4 sm:gap-5 md:gap-6 w-full pb-2 sm:pb-3 md:pb-4 px-4 sm:px-6 md:px-8">
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12">
                <p>Brosure Revolving Door</p>

                <a href="{{asset('assets/brosure/revolving/BROSUR MANUSA REVOLVING DOOR TYPE MGA-ST.pdf')}}?t={{ env('VERSION_TIME') }}" download>
                    <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="c-container pb-16 sm:pb-20 md:pb-24">
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 xl:gap-16">
        <div class="col-span-1 py-4 sm:py-6 md:py-8 pl-4 sm:pl-6 md:pl-8 relative">
            <div class="absolute h-full top-0 left-0 w-11/12 bg-custom-light-gray -z-10 rounded-3xl">

            </div>

            <img src="{{asset('assets/product/automatic-revolving-doors/project.jpg')}}?t={{ env('VERSION_TIME') }}" alt="project" style="box-shadow: 15px 20px 30px 0px rgba(0, 0, 0, 0.15);" class="rounded-3xl w-full">
        </div>
        <div class="col-span-1 flex flex-col justify-center gap-4 sm:gap-6 md:gap-8">
            <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold">Automatic Door Projects</h1>
            <p class="text-paragraph text-custom-dark-blue">
                Kami telah melayani berbagai pelanggan dan menyediakan pintu otomatis untuk beragam perusahaan di seluruh Indonesia. Sudah lebih dari 250 perusahaan yang mempercayakan layanan kami.
            </p>

            <a href="{{ route('projectEn') }}" class="flex items-center gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-6 sm:px-7 md:px-8 py-2 sm:py-2.5 md:py-3 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition">
                <p class="text-paragraph font-bold">
                    Our Project
                </p>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 aspect-square">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>
</div>

<x-footer />

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

{{-- JS --}}
<script src="{{ asset('js/automatic-revolving-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
