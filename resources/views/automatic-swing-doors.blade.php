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
    <h1 class="font-playfair text-center font-extrabold">Our Product</h1>
</div>

<div class="c-container flex justify-center items-center py-6 sm:py-7 md:py-8">
    <div class="flex flex-col justify-center items-center gap-4 max-w-5xl">
        <h1 class="text-heading text-custom-dark-blue font-playfair font-extrabold text-center">Automatic Swing Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light">
            @if($lang == 'id')
            <span class="italic">Automatic Swing Door</span> meningkatkan efisiensi penggunaan ruang dengan memfasilitasi aliran lalu lintas manusia. Mereka memberikan fungsionalitas, keamanan, dan menawarkan desain yang sangat baik. <span class="italic">Automatic Swing Door</span> ini dapat dengan mudah diintegrasikan dengan lingkungan tempat pemasangannya.
            @else
            Automatic Swing Door enhances space utilization efficiency by facilitating the flow of human traffic. Providing functionality, security, and an excellent design, these doors can be seamlessly integrated into their installation environment.
            @endif
        </p>
    </div>
</div>

<div class="w-full h-4 sm:h-5 md:h-6 lg:h-7 xl:h-8 bg-custom-darker-blue"></div>

<div class="c-container c-container pb-8 sm:pb-12 md:pb-16 flex flex-col">
    <div class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-playfair font-extrabold italic">Automatic Swing Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-10">
                <div class="col-span-1 pb-2 xl:pb-8 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 1">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 2">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 3">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 4">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 5">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 6">
                            </div>
                            <div class="swiper-slide product-swiper-slide">
                                <img src="{{ asset('assets/product/automatic-swing-doors/swing-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="swing 7">
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col justify-center gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light">
                        @if($lang == 'id')
                        <span class="italic">Automatic Swing Door</span> menggunakan operator bernama Vector. Operator Vector ini memungkinkan otomasi swing door apapun, baik baru maupun yang sudah ada. <span class="italic">Automatic Swing Doors</span> memberikan efisiensi tinggi, kinerja yang unggul, dan cocok untuk area lalu lintas yang padat. Operator Vector juga dapat digunakan pada pintu hermetic.
                        @else
                        The Automatic Swing Door utilizes an operator called Vector. The Vector operator enables automation for any swing door, whether it is a new installation or an existing one. Automatic Swing Doors offer high efficiency, superior performance, and are suitable for areas with dense traffic. The Vector operator can also be applied to hermetic doors.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="c-container pb-8 sm:pb-10 md:pb-12 text-subparagraph">
    <div class="px-10 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl py-8 text-custom-white gap-6">
        <h1 class="font-playfair font-extrabold text-subtitle">Downloads</h1>

        <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 w-full">
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12 border-b border-b-custom-white pb-2 px-4 sm:px-6 md:px-8">
                <p>Brosure Swing Door</p>

                <a href="{{asset('assets/brosure/swing/BROSUR VECTOR SWING DOOR.pdf')}}?t={{ env('VERSION_TIME') }}" download>
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

            <img src="{{asset('assets/product/automatic-swing-doors/project.jpg')}}?t={{ env('VERSION_TIME') }}" alt="project" style="box-shadow: 15px 20px 30px 0px rgba(0, 0, 0, 0.15);" class="rounded-3xl w-full">
        </div>
        <div class="col-span-1 flex flex-col justify-center gap-4 sm:gap-5 md:gap-6">
            <h1 class="text-heading text-custom-dark-blue font-playfair font-extrabold">Automatic Door Projects</h1>
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
<script src="{{ asset('js/automatic-swing-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
