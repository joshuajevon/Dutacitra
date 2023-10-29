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
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Automatic Sliding Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light"><span class="italic">Automatic Sliding Doors</span> adalah pintu yang dapat membuka dan menutup dengan cara bergeser. <span class="italic">Automatic Sliding Doors</span> dirancang untuk membuka dan menutup secara otomatis dengan kecepatan tinggi, menggabungkan teknologi canggih untuk memastikan keamanan bagi tempat usaha dan penggunanya.</p>
    </div>
</div>

<div class="px-2 sm:px-4 md:px-6 lg:px-8 xl:px-10 2xl:px-12 flex flex-col justify-center items-center gap-6 sm:gap-7 md:gap-8 pt-8 bg-custom-darker-blue text-custom-white">
    <h1 class="text-lg sm:text-xl md:text-2xl font-ttRamillas font-bold text-center w-full">Product Type</h1>

    <div class="w-full">
        <div class="flex gap-4 sm:gap-6 md:gap-8 text-paragraph leading-none overflow-auto w-full pb-8">
            <span class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue bg-custom-light-blue text-custom-dark-blue pointer-events-none" data-product-type="1" onclick="changeProductType(this)">Standard</span>
            <span class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue" data-product-type="2" onclick="changeProductType(this)">Telescopic</span>
            <span class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue" data-product-type="3" onclick="changeProductType(this)">Curved & Semicircular</span>
            <span class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue" data-product-type="4" onclick="changeProductType(this)">Panic Break Out</span>
            <span class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue" data-product-type="5" onclick="changeProductType(this)">Fire Resistant</span>
        </div>
    </div>
</div>

<div class="c-container py-16 flex flex-col gap-32">
    {{-- Standard --}}
    <div id="automatic-standard" data-product-type="1" class="product-type">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Standard Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 4"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 5"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 6"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 7"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 8"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-9.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 9"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Standard Automatic Sliding Doors</span> direkomendasikan untuk area dengan tingkat kegiatan yang tinggi. Pintu ini memudahkan pergerakan orang tanpa kontak dengan pintu dan menawarkan kecepatan bukaan tertinggi di pasar, bersamaan dengan tingkat keamanan maksimum.
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Standard Sliding Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Dua daun pintu bergerak ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Daun pintu tunggal bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Telescopic --}}
    <div id="automatic-telescopic" data-product-type="2" class="product-type invisible absolute">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Telescopic Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 4"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 5"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Telescopic Sliding Doors</span> ideal untuk pintu masuk dengan ruang terbatas, untuk memisahkan lorong, atau untuk memperluas dan memaksimalkan akses di area yang sempit, atau di mana diperlukan untuk memperluas area lebar yang lebih dari biasanya. Pada pintu ini dapat memiliki bukaan sebesar 2/3 ruangan yang ada pada pintu tersebut.
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Telescopic Sliding Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Empat daun pintu bergerak berpasangan ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Dua daun pintu bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Curved & Semicurved --}}
    <div id="automatic-curved" data-product-type="3" class="product-type invisible absolute">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Curved & Semicurved Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 4"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 5"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 6"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 7"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 8"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Curved dan Semicurved Sliding Doors</span> adalah solusi yang elegan dan unik tanpa mengorbankan fungsi, kenyamanan, dan efisiensi pintu geser. Pintu ini dapat dipasang dengan kaca dan struktur cekung atau cembung dengan berbagai jari-jari dan tingkat kelengkungan yang berbeda.
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Curved & Semicurved Door</p>

                        <div class="grid grid-cols-1">
                            <div class="col-span-1 flex flex-col gap-3">
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Pintu terdiri dari pintu otomatis tunggal atau dua daun pintu geser yang bergerak secara radial.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Panic Break-Out / Emergency Automatic Sliding Doors --}}
    <div id="automatic-panic" data-product-type="4" class="product-type invisible absolute">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Panic Break-Out / Emergency Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 4"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 5"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 6"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Panic Break-Out Sliding Doors</span> memiliki fungsi kombinasi pintu geser dengan fitur keselamatan pintu keluar darurat untuk memaksimalkan luas area lalu lintas, dan memastikan bahwa rute evakuasi dengan pintu otomatis mematuhi peraturan dalam situasi darurat. Biasanya digunakan di bangunan umum seperti bandara, stasiun, atau area besar.
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Panic Break-Out Door Mechanism</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Normal Event</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Pintu ini beroperasi dalam mode normal, dengan bergeser membuka/menutup secara otomatis.
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Emergency Event</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/emergency-icon.png')}}" alt="emergency" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Saat situasi darurat, daun pintu akan melipat ke arah luar saat ditekan secara manual.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Fire Resistant Automatic Sliding Doors --}}
    <div id="automatic-panic" data-product-type="5" class="product-type invisible absolute">
        <div class="flex flex-col gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Fire Resistant Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-8">
                <div class="col-span-1">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 1"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 3"></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 4"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light"><span class="italic">Fire Resistant Sliding Doors</span> ini dirancang dengan menggabungkan fungsi <span class="italic">automatic sliding door</span> dengan sifat-sifat pintu tahan api. Direkomendasikan untuk memisahkan area dengan risiko kebakaran tinggi dan mencegah penyebaran api dan asap ke area lainnya. Pintu ini telah menjalani pengujian lengkap dan memenuhi semua sertifikasi sesuai dengan standar terkait ketahanan terhadap kebakaran.

                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Fire Resistant Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Empat daun pintu bergerak berpasangan ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-base sm:text-lg md:text-xl text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-xs sm:text-sm md:text-base text-custom-dark-blue/90 font-light">Dua daun pintu bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <p>Brosur Visio 100, 125, dan 175</p>

                <a href="{{asset('assets/brosure/sliding/Brosur Visio 100, 125, dan 175.pdf')}}?t={{ env('VERSION_TIME') }}" download>
                    <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9" />
                    </svg>
                </a>
            </div>
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12">
                <p>Opening Doors To The Future</p>

                <a href="{{asset('assets/brosure/sliding/Opening Doors To The Future..pdf')}}?t={{ env('VERSION_TIME') }}" download>
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

            <img src="{{asset('assets/product/automatic-sliding-doors/project.jpg')}}?t={{ env('VERSION_TIME') }}" alt="project" style="box-shadow: 15px 20px 30px 0px rgba(0, 0, 0, 0.15);" class="rounded-3xl w-full">
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
<script src="{{ asset('js/automatic-sliding-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
