@extends('template.template')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}

{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
    .swiper-pagination {
        transform: translateY(48px);
    }

    .swiper-slide-active {
        box-shadow: 8px 5px 10px 0px rgba(0, 0, 0, 0.25),
            -8px 5px 10px 0px rgba(0, 0, 0, 0.25);
    }

</style>
@endsection

@section('body')
<x-navbar :page="'product'" :lang="$lang" :bgColor="'blue'" />

<div class="header" style="background-image: url({{asset('assets/header/product-header.jpg')}});">
    <h1 class="font-ttRamillas text-center font-extrabold">Our Product</h1>
</div>

<div class="c-container flex justify-center items-center py-6 sm:py-7 md:py-8">
    <div class="flex flex-col justify-center items-center gap-4 max-w-5xl">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Automatic Hermetic Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light">
            @if($lang == 'id')
            <span class="italic">Automatic Hermetic Door</span> memenuhi kebutuhan fungsional, estetika, dan higienis yang diperlukan. Pintu ini sangat cocok untuk rumah sakit karena dapat meningkatkan tingkat kebersihan di lingkungan rumah sakit.
            @else
            Automatic Hermetic Door meets the functional, aesthetic, and hygienic requirements. This door is particularly suitable for hospitals as it can enhance cleanliness levels within the hospital environment.
            @endif
        </p>
    </div>
</div>

<div class="w-full h-4 sm:h-5 md:h-6 lg:h-7 xl:h-8 bg-custom-darker-blue"></div>

<div class="c-container pb-8 sm:pb-12 md:pb-16 flex flex-col">
    <div class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic xl:text-end">Automatic Hermetic Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 xl:gap-14">
                <div class="col-span-1 flex flex-col order-2 xl:order-1">
                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Tipe Hermetic Door</p>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Hermetic Door</p>

                                <div class="flex-none sm:hidden">
                                    <img src="{{asset('assets/product/automatic-hermetic-doors/type-hermetic.jpg')}}" alt="type-hermetic" class="h-32 w-48 rounded-xl">
                                </div>

                                <div class="flex items-center justify-between sm:gap-8">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none w-20 sm:w-[100px] h-20 sm:h-[100px]">


                                        <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                            @if($lang == 'id')
                                            Dilengkapi untuk menutup secara hermetis.
                                            @else
                                            Equipped to close hermetically.
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex-none hidden sm:block">
                                        <img src="{{asset('assets/product/automatic-hermetic-doors/type-hermetic.jpg')}}" alt="type-hermetic" class="h-32 w-48 rounded-xl">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Glass Hermetic Door</p>

                                <div class="flex-none sm:hidden">
                                    <img src="{{asset('assets/product/automatic-hermetic-doors/type-glass-hermetic.jpg')}}" alt="type-glass-hermetic" class="h-32 w-48 rounded-xl sm:hidden">
                                </div>

                                <div class="flex items-center justify-between sm:gap-8">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none w-20 sm:w-[100px] h-20 sm:h-[100px]">

                                        <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                            @if($lang == 'id')
                                            Memberikan visibilitas yang luas ke dalam ruangan. Pilihan terbaik untuk area observasi dalam bangunan.
                                            @else
                                            Provides expansive visibility into the room. The optimal choice for observation areas within a building.
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex-none hidden sm:block">
                                        <img src="{{asset('assets/product/automatic-hermetic-doors/type-glass-hermetic.jpg')}}" alt="type-glass-hermetic" class="h-32 w-48 rounded-xl">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Lead Lined Door</p>

                                <div class="flex-none sm:hidden">
                                    <img src="{{asset('assets/product/automatic-hermetic-doors/type-lead-lined.jpg')}}" alt="type-lead-lined" class="h-32 w-48 rounded-xl">
                                </div>

                                <div class="flex items-center justify-between sm:gap-8">
                                    <div class="flex items-center gap-4">
                                        <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none w-20 sm:w-[100px] h-20 sm:h-[100px]">

                                        <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                            @if($lang == 'id')
                                            Untuk ruang radiologi, dengan pilihan panel visi berlapis timah (ketebalan standar lapisan timah sekitar 2-3 mm) untuk mencegah lepasnya sinar-X. Tersedia sebagai pintu hermetis atau non-hermetis.
                                            @else
                                            For radiology rooms, it comes with the option of lead-lined vision panels (with a standard lead thickness of around 2-3 mm) to prevent the leakage of X-rays. Available as both hermetic and non-hermetic doors.
                                            @endif
                                        </p>
                                    </div>

                                    <div class="flex-none hidden sm:block">
                                        <img src="{{asset('assets/product/automatic-hermetic-doors/type-lead-lined.jpg')}}" alt="type-lead-lined" class="h-32 w-48 rounded-xl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col items-center gap-16 order-1 xl:order-2">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 1">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 2">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 3">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 4">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 5">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 6">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 7">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 8">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-9.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 9">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-10.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 10">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-hermetic-doors/hermetic-11.jpg') }}?t={{ env('VERSION_TIME') }}" alt="hermetic 11">
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>

                    <div>
                        <p class="text-paragraph text-custom-dark-blue/90 font-light xl:text-end">
                            @if($lang == 'id')
                            <span class="italic">Hermetic Door</span> ideal digunakan untuk lingkungan ruangan yang harus bersih dan higienis karena mampu menjaga tekanan, kebersihan, suhu, dan kondisi kelembaban yang diinginkan. Seluruh perakitan pintu dirancang untuk menjamin kebersihan, termasuk <span class="italic">vision panel</span>, pegangan pintu, dan bahan mudah dibersihkan. Pintu ini juga menjamin kedap udara maksimum berkat segel hermetis di sekitar tepinya saat pintu tertutup. Pintu ini memiliki klasifikasi kedap udara tertinggi yang diuji sesuai dengan standar UNE 85170:2016 dan UNE-EN 121207:2017.
                            @else
                            The Hermetic Door is ideally suited for environments that demand cleanliness and hygiene, as it effectively maintains desired pressure, cleanliness, temperature, and humidity levels. The entire assembly of the door is designed to ensure cleanliness, including the vision panel, door handles, and easily cleanable materials. Additionally, this door ensures maximum air tightness due to the hermetic seals around its edges when closed. It holds the highest air tightness classification, tested according to the UNE 85170:2016 and UNE-EN 121207:2017 standards.
                            @endif
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="c-container pb-8 sm:pb-10 md:pb-12 text-subparagraph">
    <div class="px-10 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl py-8 text-custom-white gap-6">
        <h1 class="font-ttRamillas font-extrabold text-subtitle">Downloads</h1>

        <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 w-full">
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12 border-b border-b-custom-white pb-2 px-4 sm:px-6 md:px-8">
                <p>Brosure Hermetic Door</p>

                <a href="{{asset('assets/brosure/hermetic/HERMETIC DOOR.pdf')}}?t={{ env('VERSION_TIME') }}" download>
                    <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="c-container pb-8 sm:pb-10 md:pb-12">
    <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 xl:gap-14">
        <div class="col-span-1 pt-4 sm:pt-6 md:pt-8 pl-4 sm:pl-6 md:pl-8 relative">
            <div class="absolute top-0 left-0 w-[95%] h-[95%] bg-custom-light-gray -z-10 rounded-3xl">
            </div>

            <img src="{{asset('assets/product/automatic-hermetic-doors/project.jpg')}}?t={{ env('VERSION_TIME') }}" alt="project" style="box-shadow: 15px 20px 30px 0px rgba(0, 0, 0, 0.15);" class="rounded-3xl w-full">
        </div>
        <div class="col-span-1 flex flex-col justify-center gap-4 sm:gap-5 md:gap-6">
            <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold">Automatic Door Projects</h1>
            <p class="text-paragraph text-custom-dark-blue">
                @if($lang == 'id')
                Kami telah melayani berbagai pelanggan dan menyediakan pintu otomatis untuk beragam perusahaan di seluruh Indonesia. Sudah banyak proyek dan perusahaan yang mempercayakan layanan kami.
                @else
                We have served various customers and provided automatic doors for various companies throughout Indonesia. Many projects and companies have entrusted our services.
                @endif
            </p>

            <a href="{{ route('project', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition">
                <p class="text-paragraph font-bold">
                    Our Project
                </p>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </div>
</div>

<x-footer :lang="$lang" />

{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

{{-- JS --}}
<script src="{{ asset('js/automatic-hermetic-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
