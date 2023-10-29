@extends('template.template-en')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'about'" :lang="'en'" :enRoute="'aboutEn'" :idRoute="'aboutId'" />

<div class="h-28 sm:h-32 md:h-36 lg:h-40 xl:h-44 2xl:h-48 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/header/product-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">About Us</h1>
</div>

{{-- About Us --}}
<div class="c-container grid grid-cols-1 lg:grid-cols-2 py-16 sm:py-20 md:py-24 gap-8 sm:gap-10 md:gap-12">
    <div class="col-span-1 bg-gray-300 rounded-3xl h-72 sm:h-80 md:h-96 lg:h-full bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('assets/about/about-us.jpg')}}?t={{ env('VERSION_TIME') }});">
        {{-- <img src="{{asset('assets/about/about-us.jpg')}}" alt="about-us" class=""> --}}
    </div>
    <div class="col-span-1 text-custom-dark-blue flex flex-col gap-4 sm:gap-5 md:gap-6 lg:py-4">
        <h1 class="text-heading font-ttRamillas font-extrabold">
            About Us
        </h1>
        <p class="text-justify text-custom-dark-blue/90 text-paragraph">Perusahaan kami awalnya berfokus pada Automatic Gate dan Rolling Shutter, mewakili beberapa merek dari Italia, Jepang, dan China ketika pertama kali didirikan.
            <br><br>
            Pada tahun 2003, Manusa Door Systems SL dari Barcelona, Spanyol, menunjuk kami sebagai Distributor Tunggal untuk Manusa Automatic Door di seluruh Indonesia. Sejak saat itu, kami telah menekankan spesialisasi kami dalam bidang Automatic Door.
            <br><br>
            Dengan pengalaman yang luas, kami siap membantu Anda memenuhi kebutuhan Automatic Door Anda. Selain menjual dan memasang produk, kami juga menyediakan layanan purna jual, perawatan, dan kontrak perawatan lengkap dengan penyediaan sparepart yang komprehensif.</p>
    </div>
</div>

{{-- History --}}
<div class="c-container bg-custom-dark-blue text-custom-white flex flex-col gap-12 py-12 sm:py-14 md:py-16">
    <h1 class="text-heading font-ttRamillas font-extrabold text-center">
        Our history
    </h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-16 lg:gap-y-8">
        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2000</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusajaya didirikan dan bergerak pada bidang <span class="italic">Automatic Gate</span> dan <span class="italic">Rolling Shutter</span>
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2003</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusajaya ditunjuk sebagai Sole Distributor Manusa Automatic Door
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2015</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusajaya berhenti bergerak pada bidang <span class="italic">Automatic Gate</span> dan <span class="italic">Rolling Shutter</span>
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-8">
            <div class="absolute h-1 bg-custom-white w-full top-[13px] sm:top-[16px] lg:top-[18px]"></div>

            <div class="w-8 sm:w-9 lg:w-10 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-extrabold text-center">2000</p>
            <p class="text-paragraph text-center font-light">
                PT. Dutacitra Nusajaya menspesialisasikan diri dalam bidang <span class="italic">Automatic Door</span>
            </p>
        </div>
    </div>
</div>

{{-- Vision & Mission --}}
<div class="c-container grid grid-cols-1 xl:grid-cols-2 gap-8 sm:gap-10 md:gap-12 xl:gap-0 text-custom-dark-blue py-12 sm:py-14 md:py-16">
    <div class="px-4 sm:pc-6 md:px-8">
        <div class="flex flex-col gap-2 sm:gap-3 md:gap-4 justify-center items-center bg-custom-light-yellow rounded-3xl py-8 sm:py-10 md:py-12 lg:py-14 xl:py-16 px-16 sm:px-20 md:px-24 lg:px-28 xl:px-32 h-full">
            <h1 class="text-heading font-ttRamillas font-extrabold text-center">
                Vision
            </h1>
            <p class="text-paragraph text-center">
                Menjadikan PT Dutacitra Nusa Jaya sebagai destinasi utama untuk memenuhi segala kebutuhan akan Automatic Door dengan komprehensif.
            </p>
        </div>

    </div>

    <div class="px-4 sm:pc-6 md:px-8">
        <div class="flex flex-col gap-2 sm:gap-3 md:gap-4 justify-center items-center bg-custom-lighter-blue rounded-3xl py-8 sm:py-10 md:py-12 lg:py-14 xl:py-16 px-16 sm:px-20 md:px-24 lg:px-28 xl:px-32">
            <h1 class="text-heading font-ttRamillas font-extrabold text-center">
                Mission
            </h1>
            <p class="text-paragraph text-center">
                <ol class="list-decimal text-paragraph">
                    <li>Memberikan konsultasi dan solusi yang tepat terkait kebutuhan Automatic Door.</li>
                    <br>
                    <li>Meningkatkan kompetensi karyawan agar mampu memberikan kepuasan pelanggan.</li>
                    <br>
                    <li>Menyediakan beragam produk dengan ketersediaan sparepart yang mencukupi, melaksanakan pemasangan yang profesional, dan memberikan pelayanan purna jual yang unggul.</li>
                </ol>
            </p>
        </div>
    </div>
</div>

{{-- Lines --}}
<div class="flex flex-col gap-6">
    <span class="w-8/12 bg-custom-lighter-blue h-5"></span>
    <span class="w-9/12 bg-custom-dark-blue h-8"></span>
</div>

{{-- Certificates --}}
<div class="py-12 sm:py-14 md:py-16 flex flex-col gap-8 text-custom-dark-blue">
    <div class="c-container">
        <h1 class="text-heading font-ttRamillas font-extrabold text-center">
            Certificates & Authorizations
        </h1>
    </div>

    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 my-auto w-full h-96 bg-[#D9D9D9] z-[-10]"></div>

        <div class="c-container grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-base sm:text-lg md:text-xl font-ttRamillas font-extrabold text-center">Certificates Distributor</p>

                <img src="{{asset('assets/about/certificates-distributor.jpg')}}?t={{ env('VERSION_TIME') }}" alt="certificates distributor" class="border border-black">

            </div>

            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-base sm:text-lg md:text-xl font-ttRamillas font-extrabold text-center">Notice of Testing</p>

                <img src="{{asset('assets/about/notice-of-testing.jpg')}}?t={{ env('VERSION_TIME') }}" alt="notice of testing" class="border border-black">

            </div>

            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-base sm:text-lg md:text-xl font-ttRamillas font-extrabold text-center">Certificates of Origins</p>

                <img src="{{asset('assets/about/certificates-of-origin.jpg')}}?t={{ env('VERSION_TIME') }}" alt="certificates of origins" class="border border-black">

            </div>
        </div>
    </div>
</div>


<x-footer />
@endsection
