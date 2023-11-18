@extends('template.template')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'about'" :lang="$lang" :bgColor="'blue'" />

<div class="header" style="background-image: url({{asset('assets/header/product-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center font-extrabold">About Us</h1>
</div>

{{-- About Us --}}
<div class="c-container grid grid-cols-1 lg:grid-cols-2 py-8 sm:py-12 md:py-16 gap-8 sm:gap-10 md:gap-12">
    <div class="col-span-1 bg-gray-300 rounded-3xl h-72 sm:h-80 md:h-96 lg:h-full bg-cover bg-no-repeat bg-center" style="background-image: url({{asset('assets/about/about-us.jpg')}}?t={{ env('VERSION_TIME') }});">
    </div>
    <div class="col-span-1 text-custom-dark-blue flex flex-col gap-4 sm:gap-5 md:gap-6 lg:py-4">
        <h1 class="text-heading font-ttRamillas font-extrabold">
            About Us
        </h1>
        <p class="text-justify text-custom-dark-blue/90 text-paragraph">
            @if($lang == 'id')
            Perusahaan kami awalnya berfokus pada Automatic Gate dan Rolling Shutter, mewakili beberapa merek dari Italia, Jepang, dan China ketika pertama kali didirikan.
            <br><br>
            Pada tahun 2003, Manusa Door Systems SL dari Barcelona, Spanyol, menunjuk kami sebagai Distributor Tunggal untuk Manusa Automatic Door di seluruh Indonesia. Sejak saat itu, kami telah menekankan spesialisasi kami dalam bidang Automatic Door.
            <br><br>
            Dengan pengalaman yang luas, kami siap membantu Anda memenuhi kebutuhan Automatic Door Anda. Selain menjual dan memasang produk, kami juga menyediakan layanan purna jual, perawatan, dan kontrak perawatan lengkap dengan penyediaan sparepart yang komprehensif.
            @else
            Our company initially focused on Automatic Gates and Rolling Shutters, representing several brands from Italy, Japan, and China when first established.
            <br><br>
            In 2003, Manusa Door Systems SL from Barcelona, Spain, appointed us as the Sole Distributor for Manusa Automatic Doors throughout Indonesia. Since then, we have emphasized our specialization in the field of Automatic Doors.
            <br><br>
            With extensive experience, we are ready to assist you in meeting your Automatic Door needs. In addition to selling and installing products, we also provide after-sales service, maintenance, and complete maintenance contracts with comprehensive spare part provisions.
            @endif
        </p>
    </div>
</div>

{{-- History --}}
<div class="c-container bg-custom-dark-blue text-custom-white flex flex-col gap-12 py-8 sm:py-12 md:py-16">
    <h1 class="text-heading font-ttRamillas font-extrabold text-center">
        Our history
    </h1>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-16 lg:gap-y-8">
        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-2 md:top-2.5"></div>

            <div class="w-5 md:w-6 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-title font-ttRamillas font-extrabold text-center">2000</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                PT. Dutacitra Nusa Jaya didirikan dan bergerak pada bidang Automatic Gate dan Rolling Shutter
                @else
                PT. Dutacitra Nusa Jaya was established and specializes in the field of Automatic Gates and Rolling Shutters
                @endif
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-2 md:top-2.5"></div>

            <div class="w-5 md:w-6 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-title font-ttRamillas font-extrabold text-center">2003</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                PT. Dutacitra Nusa Jaya ditunjuk sebgai Sole Distributor Manusa Automatic Door
                @else
                PT. Dutacitra Nusa Jaya appointed as the Sole Distributor of Manusa Automatic Doors
                @endif
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-2 md:top-2.5"></div>

            <div class="w-5 md:w-6 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-title font-ttRamillas font-extrabold text-center">2015</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                PT. Dutacitra Nusa Jaya menspesialisasikan diri dalam bidang Automatic Door
                @else
                PT. Dutacitra Nusa Jaya specializing in the field of Automatic Doors
                @endif
            </p>
        </div>

        <div class="flex flex-col items-center gap-4 relative px-4 sm:px-6 md:px-8">
            <div class="absolute h-1 bg-custom-white w-full top-2 md:top-2.5"></div>

            <div class="w-5 md:w-6 aspect-square rounded-full bg-custom-white"></div>
            <p class="text-title font-ttRamillas font-extrabold text-center">Present</p>
            <p class="text-paragraph text-center font-light">
                @if($lang == 'id')
                PT. Dutacitra Nusa Jaya siap membantu Anda dalam memenuhi kebutuhan dalam Automatic Door
                @else
                PT. Dutacitra Nusa Jaya is ready to assist you in fulfilling your Automatic Door needs.
                @endif
            </p>
        </div>
    </div>
</div>

{{-- Vision & Mission --}}
<div class="c-container grid grid-cols-1 xl:grid-cols-2 gap-8 sm:gap-10 md:gap-12 xl:gap-0 text-custom-dark-blue py-8 sm:py-12 md:py-16">
    <div class="px-4 sm:px-6 md:px-8">
        <div class="flex flex-col gap-2 sm:gap-3 md:gap-4 justify-center items-center bg-custom-light-yellow rounded-3xl p-8 sm:p-10 md:p-12 h-full">
            <h1 class="text-heading font-ttRamillas font-extrabold text-center">
                @if($lang == 'id')
                Visi
                @else
                Vision
                @endif
            </h1>
            <p class="text-paragraph text-center">
                @if($lang == 'id')
                Menjadikan PT Dutacitra Nusa Jaya sebagai destinasi utama untuk memenuhi segala kebutuhan akan Automatic Door dengan komprehensif.
                @else
                To establish PT Dutacitra Nusa Jaya as the ultimate destination for comprehensive Automatic Door solutions.
                @endif
            </p>
        </div>

    </div>

    <div class="px-4 sm:px-6 md:px-8">
        <div class="flex flex-col gap-2 sm:gap-3 md:gap-4 justify-center items-center bg-custom-lighter-blue rounded-3xl py-8 sm:py-10 md:py-12 px-16 sm:px-20 md:px-24">
            <h1 class="text-heading font-ttRamillas font-extrabold text-center">
                @if($lang == 'id')
                Misi
                @else
                Mission
                @endif
            </h1>
            <p class="text-paragraph text-center">
                @if($lang == 'id')
                <ol class="list-decimal text-paragraph">
                    <li>
                        Memberikan konsultasi dan solusi yang tepat terkait kebutuhan Automatic Door.
                    </li>
                    <br>
                    <li>
                        Meningkatkan kompetensi karyawan agar mampu memberikan kepuasan pelanggan.
                    </li>
                    <br>
                    <li>
                        Menyediakan beragam produk dengan ketersediaan sparepart yang mencukupi, melaksanakan pemasangan yang profesional, dan memberikan pelayanan purna jual yang unggul.
                    </li>
                </ol>
                @else
                <ol class="list-decimal text-paragraph">
                    <li>
                        To provide precise consultations and solutions for Automatic Door requirements. </li>
                    <br>
                    <li>
                        To enhance employee competencies for customer satisfaction.
                    </li>
                    <br>
                    <li>
                        To offer a diverse range of products with ample spare part availability, execute professional installations, and deliver superior after-sales services.
                    </li>
                </ol>
                @endif
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
<div class="py-8 sm:py-12 md:py-16 flex flex-col gap-8 text-custom-dark-blue">
    <div class="c-container">
        <h1 class="text-heading font-ttRamillas font-extrabold text-center">
            Certificates & Authorizations
        </h1>
    </div>

    <div class="relative">
        <div class="absolute left-0 top-0 bottom-0 my-auto w-full h-96 bg-[#D9D9D9] z-[-10]"></div>

        <div class="c-container grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-subtitle font-ttRamillas font-extrabold text-center">Certificates Distributor</p>

                <img src="{{asset('assets/about/certificates-distributor.jpg')}}?t={{ env('VERSION_TIME') }}" alt="certificates distributor" class="border border-black">

            </div>

            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-subtitle font-ttRamillas font-extrabold text-center">Notice of Testing</p>

                <img src="{{asset('assets/about/notice-of-testing.jpg')}}?t={{ env('VERSION_TIME') }}" alt="notice of testing" class="border border-black">

            </div>

            <div class="col-span-1 flex flex-col items-center gap-2 lg:gap-8">
                <p class="text-subtitle font-ttRamillas font-extrabold text-center">Certificates of Origins</p>

                <img src="{{asset('assets/about/certificates-of-origin.jpg')}}?t={{ env('VERSION_TIME') }}" alt="certificates of origins" class="border border-black">

            </div>
        </div>
    </div>
</div>


<x-footer :lang="$lang" />
@endsection
