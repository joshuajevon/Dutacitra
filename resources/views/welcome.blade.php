@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}

{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
    .swiper {
        width: 100%;
    }

    .swiper-slide {
        width: 60%;
        aspect-ratio: 2 / 1;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 1.5rem;
        transform: scale(0.8);
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .swiper-slide-active img {
        transform: scale(1);
        transition:
    }

</style>
@endsection

@section('body')
<div class="flex flex-col justify-between text-custom-white pb-12 sm:pb-16 md:pb-20 gap-8 h-[50rem] bg-cover bg-no-repeat bg-center" style="background-image: url('{{asset('assets/home/header.jpg')}}?t={{ env('VERSION_TIME') }}')">
    <x-navbar :page="'home'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" :bgColor="'transparent'" />

    <div class="c-container flex flex-col gap-4 z-20 text-custom-white">
        <h1 class="font-ttRamillas text-3xl sm:text-4xl md:text-5xl">Paving the way <br>to the <span class="font-ttRamillas font-bold italic">future</span>,
            with<br><span class="font-ttRamillas font-extrabold text-5xl sm:text-6xl md:text-7xl italic">Automatic Door</span></h1>

        <p class="text-paragraph">Specialist in Automatic Door</p>

        <a href="{{ route('projectEn') }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white">
            <p class="text-paragraph font-bold">Learn More </p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 aspect-square">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </a>
    </div>
</div>

<div class="py-8 sm:py-12 md:py-16 flex flex-col gap-8">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper pb-12">
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-1"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-2"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-3"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-4"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-5"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-6"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-7"></div>
            <div class="swiper-slide"><img src="{{ asset('assets/home/home-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-8"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="c-container flex flex-col justify-center items-center gap-4 text-center">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold">Why PT. Dutacitra Nusa Jaya?</h1>
        <p class="text-custom-dark-blue text-paragraph">Perusahaan kami telah beroperasi sejak tahun 2000 dan men-Specialisasikan diri dalam industri Automatic Door. Tentunya dengan perjalanan yang cukup panjang dan luas ini,
            kami memiliki pengalaman dan kemampuan untuk membantu dalam menentukan Automatic Door yang sesuai dengan kebutuhan Anda. Kami juga memiliki tim Pemasangan dan Layanan Purna Jual yang sangat kompeten untuk mendukung Anda dalam hal ini.</p>

        <a href="{{ route('projectEn') }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white mt-4">
            <p class="text-paragraph font-bold">Find more about us </p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 aspect-square">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </a>
    </div>
</div>

<div class="c-container bg-custom-darker-blue text-custom-white flex flex-col gap-12 py-8 sm:py-12 md:py-16">
    <h1 class="text-heading font-ttRamillas font-extrabold text-center">
        Our Service
    </h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-16 lg:gap-y-8">
        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2000</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusa Jaya didirikan dan bergerak pada bidang Automatic Gate dan Rolling Shutter
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2003</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusa Jaya ditunjuk sebgai Sole Distributor Manusa Automatic Door
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2015</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusa Jaya menspesialisasikan diri dalam bidang Automatic Door
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">Present</p>
            <p class="text-paragraph text-center font-light">
                Siap membantu Anda dalam memenuhi kebutuhan dalam Automatic Door
            </p>
        </div>
    </div>
</div>

<div class="c-container py-8 sm:py-12 md:py-16"></div>

<x-footer />

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

{{-- JS --}}
<script src="{{ asset('js/welcome.js') }}?t={{ env('VERSION_TIME') }}"></script>@endsection
