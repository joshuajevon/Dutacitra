@extends('template.template')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}

<!-- YouTube API script -->
{{-- <script src="https://www.youtube.com/iframe_api"></script> --}}

{{-- Swiper JS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<style>
    .swiper {
        width: 100%;
    }

    .swiper-slide {
        position: relative;
        width: 70%;
        padding-bottom: 39.375%;
    }

    .swiper-slide img loading="lazy",
    .swiper-slide iframe {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 1.5rem;
        transition: transform 150ms cubic-bezier(0.4, 0, 0.2, 1);
        transform: scale(0.85);
    }

    .swiper-slide-active img loading="lazy",
    .swiper-slide-active iframe {
        transform: scale(1);
    }

</style>
@endsection

@section('body')
{{-- Hero --}}
<div class="flex flex-col justify-between text-custom-white pb-28 sm:pb-26 md:pb-24 gap-8 h-screen bg-cover bg-no-repeat bg-center" style="background-image: url('{{asset('assets/home/header.jpg')}}?t={{ env('VERSION_TIME') }}')">
    <x-navbar :page="'home'" :lang="$lang" :bgColor="'transparent'" />

    <div class="c-container flex flex-col gap-4 z-20 text-custom-white">
        <h1 class="font-ttRamillas text-heading lg:text-5xl">Paving the way <br>to the <span class="font-ttRamillas font-bold italic">future</span>,
            with<br><span class="font-ttRamillas font-extrabold text-4xl sm:text-5xl md:text-6xl lg:text-7xl italic">Automatic Door</span></h1>

        <p class="text-paragraph">Specialist in Automatic Door</p>

        <a href="{{ route('about', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white">
            <p class="text-paragraph font-bold">Learn More </p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </a>
    </div>
</div>

{{-- Carousel + Why Us? --}}
<div class="py-8 sm:py-12 md:py-16 flex flex-col gap-4 bg-no-repeat bg-[center_bottom_-14rem] sm:bg-[center_bottom_-16rem] md:bg-[center_bottom_-12rem] lg:bg-[center_bottom_-14rem]" style="background-image: url({{asset('assets/home/bg-circle.png')}}?t={{ env('VERSION_TIME') }}); ">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper pb-12">
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-1">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-2">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-3">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-4">
            </div>
            <div class="swiper-slide">
                <div id="player"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-5">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-6">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-7">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/home/home-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="home-8">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="c-container flex flex-col justify-center items-center gap-4 text-center">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Why PT. Dutacitra Nusa Jaya?</h1>
        <p class="text-custom-dark-blue text-paragraph">
            @if($lang == 'id')
            Perusahaan kami telah beroperasi sejak tahun 2000 dan men-Specialisasikan diri dalam industri Automatic Door. Tentunya dengan perjalanan yang cukup panjang dan luas ini,
            kami memiliki pengalaman dan kemampuan untuk membantu dalam menentukan Automatic Door yang sesuai dengan kebutuhan Anda. Kami juga memiliki tim Pemasangan dan Layanan Purna Jual yang sangat kompeten untuk mendukung Anda dalam hal ini.
            @else
            Our company has been operating since 2000, specializing in the Automatic Door industry. With our extensive and lengthy journey, we have the experience and capability to help you choose the perfect Automatic Door solution tailored to your needs. Complementing our offerings, we boast a highly skilled Installation and After-Sales Service team ready to provide excellent support throughout your journey with us.
            @endif
        </p>

        <a href="{{ route('about', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-transparent mt-2 sm:mt-3 md:mt-4">
            <p class="text-paragraph font-bold">Find more about us </p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </a>
    </div>
</div>

{{-- Our Service --}}
<div class="c-container bg-custom-darker-blue text-custom-white flex flex-col gap-8 sm:gap-10 md:gap-12 py-8 sm:py-12 md:py-16">
    <h1 class="text-heading font-ttRamillas font-extrabold text-center">
        Our Service
    </h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-12 sm:gap-10 md:gap-8">
        <div class="flex flex-col justify-center items-center gap-4 p-6 sm:p-7 md:p-8 rounded-xl sm:rounded-2xl md:rounded-3xl border border-custom-white relative">
            <p class="text-title font-ttRamillas font-extrabold text-center absolute -top-4 left-0 right-0 mx-auto bg-custom-darker-blue w-44 sm:w-56 xl:w-48 2xl:w-56">Sales</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                Kami menyediakan produk dan solusi berkualitas terbaik yang disesuaikan dengan kebutuhan Anda.
                @else
                We offer top-quality products and tailored solutions to meet your needs.
                @endif
            </p>
        </div>

        <div class="flex flex-col justify-center items-center gap-4 p-6 sm:p-7 md:p-8 rounded-xl sm:rounded-2xl md:rounded-3xl border border-custom-white relative">
            <p class="text-title font-ttRamillas font-extrabold text-center absolute -top-4 left-0 right-0 mx-auto bg-custom-darker-blue w-44 sm:w-56 xl:w-48 2xl:w-56">Installation</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                Kami memberikan bantuan ahli dalam pemasangan pintu otomatis.
                @else
                Our team provides expert assistance in the installation of automatic doors.
                @endif
            </p>
        </div>

        <div class="flex flex-col justify-center items-center gap-4 p-6 sm:p-7 md:p-8 rounded-xl sm:rounded-2xl md:rounded-3xl border border-custom-white relative">
            <p class="text-title font-ttRamillas font-extrabold text-center absolute -top-4 left-0 right-0 mx-auto bg-custom-darker-blue w-44 sm:w-56 xl:w-48 2xl:w-56">Spare Parts</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                Kami menyediakan komponen dan aksesoris yang diperlukan.
                @else
                We supply the necessary components and accessories.
                @endif
            </p>
        </div>

        <div class="flex flex-col justify-center items-center gap-4 p-6 sm:p-7 md:p-8 rounded-xl sm:rounded-2xl md:rounded-3xl border border-custom-white relative">
            <p class="text-title font-ttRamillas font-extrabold text-center absolute -top-4 left-0 right-0 mx-auto bg-custom-darker-blue w-44 sm:w-56 xl:w-48 2xl:w-56">Maintenance</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                Layanan perawatan pasca pemasangan untuk pintu otomatis.
                @else
                We offer post-installation maintenance services for automatic doors.
                @endif
            </p>
        </div>
    </div>
</div>

{{-- Why Us --}}
<div class="py-8 sm:py-12 md:py-16">
    <div class="relative">
        <div class="flex flex-col gap-6 absolute top-12 left-0 w-full -z-10">
            <span class="w-10/12 bg-custom-lighter-blue h-5"></span>
            <span class="w-11/12 bg-custom-dark-blue h-8"></span>
        </div>

        <div class="flex flex-col xl:flex-row gap-6 sm:gap-7 md:gap-8 pl-4 sm:pl-8 md:pl-12 lg:pl-16 xl:pl-20 2xl:pl-24">
            <div class="flex-none w-full xl:w-5/12 max-w-xs xl:max-w-none">
                <div class="w-full pb-full relative overflow-hidden">
                    <img src="{{asset('assets/home/MANUSA.jpg')}}?t={{ env('VERSION_TIME') }}" alt="Manusa" class="absolute w-full h-full rounded-xl sm:rounded-2xl md:rounded-3xl object-cover object-center">
                </div>
            </div>

            <div class="flex flex-col gap-8 xl:mt-40">
                <div class="flex flex-col gap-4 pr-4 sm:pr-8 md:pr-12 lg:pr-16 xl:pr-20 2xl:pr-24">
                    <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Why Manusa Automatic Door?</h1>
                    <p class="text-custom-dark-blue text-paragraph">
                        @if($lang == 'id')
                        Manusa adalah salah satu perusahaan terkemuka di dunia dalam industri automatic door. Dengan pengalaman dan keberadaan perusahaan serta distributor tunggal di hampir seluruh dunia, Manusa telah berhasil memimpin pasar automatic door. Prestasi ini didorong oleh teknologi canggih yang dikembangkan sendiri dan tim profesional yang bekerja untuk mencapai kepuasan pelanggan sepenuhnya.
                        @else
                        Manusa is one of the world's leading companies in the automatic door industry. With a wealth of experience and sole distributor presence spanning across the globe, Manusa has successfully taken the lead in the automatic door market. This achievement is propelled by cutting-edge technology developed in-house and a professional team dedicated to achieving complete customer satisfaction.
                        @endif
                    </p>

                    <a href="{{ route('about', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white mt-2 sm:mt-3 md:mt-4">
                        <p class="text-paragraph font-bold">
                            Find more about us</p>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-col gap-1">
                    <div class="grid grid-cols-1 xl:grid-cols-3 gap-2 right-0">
                        <div class="col-span-1 flex items-center gap-2 text-custom-dark-blue bg-custom-light-blue p-4">
                            <span>
                                <h1 class="text-heading font-semibold">
                                    90+
                                </h1>
                            </span>
                            <span>
                                <p class="text-subparagraph font-light leading-none">Manusa present in over 90 countries</p>
                            </span>
                        </div>

                        <div class="col-span-1 flex items-center gap-2 text-custom-dark-blue bg-custom-light-yellow p-4">
                            <span>
                                <h1 class="text-heading font-semibold">
                                    20k+
                                </h1>
                            </span>
                            <span>
                                <p class="text-subparagraph font-light leading-none">Automatic doors are manufactured and installed each year</p>
                            </span>
                        </div>

                        <div class="col-span-1 flex items-center gap-2 text-custom-light-yellow bg-custom-dark-blue p-4">
                            <span>
                                <h1 class="text-heading font-semibold">
                                    350+
                                </h1>
                            </span>
                            <span>
                                <p class="text-subparagraph font-light leading-none">Highly qualified professionals</p>
                            </span>
                        </div>
                    </div>

                    <div class="w-full h-2 bg-custom-light-taupe">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-16 pb-12 sm:pb-16 md:pb-20 lg:pb-24 xl:pb-28 2xl:pb-32 pt-6 sm:pt-8 md:pt-10">
    {{-- Left --}}
    <div class="col-span-1 flex flex-col gap-10 md:gap-8 md:pt-8">
        <div class="flex flex-col md:items-end gap-4 pl-4 sm:pl-8 md:pl-12 lg:pl-16 xl:pl-20 2xl:pl-24 pr-4 sm:pr-8 md:pr-0 md:text-end order-2 md:order-1">
            <h1 class="text-subheading text-custom-dark-blue font-ttRamillas font-extrabold">Strive to provide best product</h1>
            <p class="text-custom-dark-blue text-paragraph">
                @if($lang == 'id')
                Kami menawarkan beragam produk pintu otomatis yang dapat menjadi solusi untuk kebutuhan Anda. Mulai dari sliding doors, swing doors, revolving doors, dan hermetic doors.
                @else
                We offer a diverse range of automatic door products that can cater to your specific needs, including sliding doors, swing doors, revolving doors, and hermetic doors.
                @endif
            </p>

            <a href="{{ route('product', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white mt-1 sm:mt-2 md:mt-4">
                <p class="text-paragraph font-bold">Our Product</p><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 h-6 sm:h-7 md:h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </a>
        </div>

        <div class="order-1 md:order-2">
            <div class="pl-4 sm:pl-8 md:pl-12 lg:pl-16 xl:pl-20 2xl:pl-24 pr-4 sm:pr-8 md:pr-0 relative">
                <div class="w-full pb-2/3 relative">
                    <img src="{{asset('assets/home/best-product-1.jpg')}}?t={{ env('VERSION_TIME') }}" alt="best-product-1" class="absolute w-full h-full rounded-xl sm:rounded-2xl md:rounded-3xl z-10" style="box-shadow: 0px 20px 20px 0px rgba(0, 0, 0, 0.15);">

                    <img src="{{asset('assets/home/best-product-2.jpg')}}?t={{ env('VERSION_TIME') }}" alt="best-product-2" class="absolute w-full h-full rounded-xl sm:rounded-2xl md:rounded-3xl -translate-x-2 sm:-translate-x-4 md:-translate-x-6 lg:-translate-x-8 xl:-translate-x-10 2xl:-translate-x-12 translate-y-3 sm:translate-y-4 md:translate-y-6 lg:translate-y-8 xl:translate-y-10 2xl:translate-y-12 -z-10" style="box-shadow: 0px 20px 20px 0px rgba(0, 0, 0, 0.15);">

                    <div class="absolute w-full h-full rounded-e-xl sm:rounded-e-2xl md:rounded-e-3xl -translate-x-8 sm:-translate-x-12 md:-translate-x-16 lg:-translate-x-20 xl:-translate-x-24 2xl:-translate-x-28 translate-y-6 sm:translate-y-7 md:translate-y-10 lg:translate-y-12 xl:translate-y-16 2xl:translate-y-20 -z-20 bg-custom-light-gray"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Right --}}
    <div class="col-span-1 flex flex-col gap-4 sm:gap-6 md:gap-8">
        <div class="pr-4 sm:pr-8 md:pr-12 lg:pr-16 xl:pr-20 2xl:pr-24 pl-4 sm:pl-8 md:pl-0 relative">
            <div class="w-full pb-2/3 relative">
                <img src="{{asset('assets/home/distinctive-projects-1.jpg')}}?t={{ env('VERSION_TIME') }}" alt="distinctive-projects-1" class="absolute w-full h-full rounded-xl sm:rounded-2xl md:rounded-3xl z-10" style="box-shadow: 0px 20px 20px 0px rgba(0, 0, 0, 0.15);">

                <img src="{{asset('assets/home/distinctive-projects-2.jpg')}}?t={{ env('VERSION_TIME') }}" alt="distinctive-projects-2" class="absolute w-full h-full rounded-xl sm:rounded-2xl md:rounded-3xl -z-10 translate-x-2 sm:translate-x-4 md:translate-x-6 lg:translate-x-8 xl:translate-x-10 2xl:translate-x-12 -translate-y-3 sm:-translate-y-4 md:-translate-y-5 lg:-translate-y-6 xl:-translate-y-7 2xl:-translate-y-8" style="box-shadow: 0px 20px 20px 0px rgba(0, 0, 0, 0.15);">

                <div class="absolute w-full h-full pr-4 sm:pr-8 md:pr-12 lg:pr-16 xl:pr-20 2xl:pr-24 pl-4 sm:pl-8 md:pl-0 right-0 top-0 -translate-y-6 sm:-translate-y-8 md:-translate-y-10 lg:-translate-y-12 xl:-translate-y-14 2xl:-translate-y-16 translate-x-8 sm:translate-x-12 md:translate-x-16 lg:translate-x-20 xl:translate-x-24 2xl:translate-x-28 bg-custom-light-gray rounded-l-xl sm:rounded-l-2xl md:rounded-l-3xl -z-20">
                </div>
            </div>
        </div>

        <div class="flex flex-col items-end md:items-start gap-4 pr-4 sm:pr-8 md:pr-12 lg:pr-16 xl:pr-20 2xl:pr-24 pl-4 sm:pl-8 md:pl-0 text-end md:text-start">
            <h1 class="text-subheading text-custom-dark-blue font-ttRamillas font-extrabold">Our Distinctive Projects</h1>
            <p class="text-custom-dark-blue text-paragraph">
                @if($lang == 'id')
                Kami telah melayani berbagai pelanggan dan menyediakan pintu otomatis untuk beragam perusahaan di seluruh Indonesia. Sudah banyak proyek dan perusahaan yang mempercayakan layanan kami.
                @else
                We have served a diverse clientele, supplying automatic doors to various companies across Indonesia. Our services have been entrusted by numerous projects and businesses to meet their specific needs.
                @endif
            </p>

            <a href="{{ route('project', ['lang' => $lang]) }}" class="flex items-center gap-3 sm:gap-3.5 md:gap-4 text-custom-dark-blue border border-custom-dark-blue rounded-full px-8 sm:px-9 md:px-10 py-1 sm:py-1.5 md:py-2 w-fit hover:bg-custom-dark-blue hover:text-custom-white transition bg-custom-white mt-1 sm:mt-2 md:mt-4">
                <p class="text-paragraph font-bold">Our Project</p>
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
<script src="{{ asset('js/welcome.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
