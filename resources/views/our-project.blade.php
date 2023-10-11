@extends('template.template-en')

@section('head')
    {{-- css --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
    <x-navbar-en :page="'project'" />

    <div class="h-32 sm:h-56 md:h-64 lg:h-72 xl:h-80 bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('assets/our-project/header.jpg')}});">
        <h1 class="font-ttRamillas text-center text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-extrabold text-custom-white">Our Project</h1>
    </div>

    <div class="c-container text-paragraph py-16 sm:py-24 md:py-32 flex flex-col gap-8">
        <div class="bg-custom-light-blue px-8 py-6 relative">
            <h1 class="text-custom-dark-blue font-ttRamillas font-extrabold absolute -top-5 text-2xl sm:text-3xl md:text-4xl">Photos</h1>
            <p class="text-custom-dark-blue/90">Beberapa foto dari hasil proyek Automatic Door yang telah kami kerjakan</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/1.jpg')}}" alt="Mall E Walk (North Entrance) - Balikpapan" class="w-full">
                <p class="font-bold">Mall E Walk (North Entrance) - Balikpapan</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/2.jpg')}}" alt="Mall E Walk (East Entrance) - Balikpapan" class="w-full">
                <p class="font-bold">Mall E Walk (East Entrance) - Balikpapan</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/3.jpg')}}" alt="Mall Senayan City - Jakarta" class="w-full">
                <p class="font-bold">Mall Senayan City - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/4.jpg')}}" alt="Mall E Walk (North Entrance) - Balikpapan" class="w-full">
                <p class="font-bold">Mall E Walk (North Entrance) - Balikpapan</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/5.jpg')}}" alt="Bandara Soekarno-Hatta - Tangerang" class="w-full">
                <p class="font-bold">Bandara Soekarno-Hatta - Tangerang</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/6.jpg')}}" alt="Bandara Soekarno-Hatta - Tangerang" class="w-full">
                <p class="font-bold">Bandara Soekarno-Hatta - Tangerang</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/7.jpg')}}" alt="Toilet Disabled Bandara Soekarno Hatta - Tangerang" class="w-full">
                <p class="font-bold">Toilet Disabled Bandara Soekarno Hatta - Tangerang</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/8.jpg')}}" alt="Puri Indah Mall - Jakarta" class="w-full">
                <p class="font-bold">Puri Indah Mall - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/9.jpg')}}" alt="Apartment St. Moritz - Jakarta" class="w-full">
                <p class="font-bold">Apartment St. Moritz - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/10.jpg')}}" alt="Office St. Moritz - Jakarta" class="w-full">
                <p class="font-bold">Office St. Moritz - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/11.jpg')}}" alt="Hotel La Lisa - Surabaya" class="w-full">
                <p class="font-bold">Hotel La Lisa - Surabaya</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/12.jpg')}}" alt="Hotel Horison - Kertajati" class="w-full">
                <p class="font-bold">Hotel Horison - Kertajati</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/13.jpg')}}" alt="RSIA Brawijaya - Jakarta" class="w-full">
                <p class="font-bold">RSIA Brawijaya - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/14.jpg')}}" alt="RS Santo Borromeus - Bandung" class="w-full">
                <p class="font-bold">RS Santo Borromeus - Bandung</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/15.jpg')}}" alt="RS Santo Borromeus - Bandung" class="w-full">
                <p class="font-bold">RS Santo Borromeus - Bandung</p>
                <p class="-mt-3">Hermetic Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/16.jpg')}}" alt="RS Siloam Mampang - Jakarta" class="w-full">
                <p class="font-bold">RS Siloam Mampang - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/17.jpg')}}" alt="RS Siloam TB Simatupang - Jakarta" class="w-full">
                <p class="font-bold">RS Siloam TB Simatupang - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/18.jpg')}}" alt="RS EMC Pekayon - Bekasi" class="w-full">
                <p class="font-bold">RS EMC Pekayon - Bekasi</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/19.jpg')}}" alt="RS EMC Pekayon - Bekasi" class="w-full">
                <p class="font-bold">RS EMC Pekayon - Bekasi</p>
                <p class="-mt-3">Double Swing Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/20.jpg')}}" alt="RS EMC Pekayon - Bekasi" class="w-full">
                <p class="font-bold">RS EMC Pekayon - Bekasi</p>
                <p class="-mt-3">Hermetic Single Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/21.jpg')}}" alt="Gedung Bintang Toedjoe - Bekasi" class="w-full">
                <p class="font-bold">Gedung Bintang Toedjoe - Bekasi</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/22.jpg')}}" alt="MaxxBox Lippo Village - Tangerang" class="w-full">
                <p class="font-bold">MaxxBox Lippo Village - Tangerang</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/23.jpg')}}" alt="Honda Daya Motor - Bandung" class="w-full">
                <p class="font-bold">Honda Daya Motor - Bandung</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/24.jpg')}}" alt="Galaxy Mall - Surabaya" class="w-full">
                <p class="font-bold">Galaxy Mall - Surabaya</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/25.jpg')}}" alt="Apartment Nine Residence - Jakarta" class="w-full">
                <p class="font-bold">Apartment Nine Residence - Jakarta</p>
                <p class="-mt-3">Double Sliding Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/26.jpg')}}" alt="Bank Indonesia - Yogyakarta" class="w-full">
                <p class="font-bold">Bank Indonesia - Yogyakarta</p>
                <p class="-mt-3">Double Swing Door</p>
            </div>

            <div class="flex flex-col gap-4 items-center col-span-1">
                <img src="{{asset('assets/our-project/27.jpg')}}" alt="Bank Indonesia - Bandung" class="w-full">
                <p class="font-bold">Bank Indonesia - Bandung</p>
                <p class="-mt-3">Double Swing Door</p>
            </div>
        </div>

        <div class="bg-custom-light-blue px-8 py-6 relative mt-16">
            <h1 class="text-custom-dark-blue font-ttRamillas font-extrabold absolute -top-5 text-2xl sm:text-3xl md:text-4xl">Project Reference</h1>
            <p class="text-custom-dark-blue/90">Daftar pelanggan dan proyek yang telah kami selesaikan</p>
        </div>

        <div class="px-12 sm:px16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl p-8 text-custom-white gap-6">
            <h1 class="font-ttRamillas font-extrabold text-base sm:text-lg md:text-xl">Downloads</h1>

            <div class="border-b border-b-custom-white flex justify-between w-full pb-2 sm:pb-3 md:pb-4 gap-4">
                <p>Project Reference List</p>

                <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9"/>
                    </svg>
            </div>
        </div>
    </div>

    <x-footer />
@endsection
