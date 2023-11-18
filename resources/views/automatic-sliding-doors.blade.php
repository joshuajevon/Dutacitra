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

<div class="header" style="background-image: url({{asset('assets/header/product-header.jpg')}}?t={{ env('VERSION_TIME') }});">
    <h1 class="font-ttRamillas text-center font-extrabold">Our Product</h1>
</div>

<div class="c-container flex justify-center items-center py-6 sm:py-7 md:py-8">
    <div class="flex flex-col justify-center items-center gap-4 max-w-5xl">
        <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold text-center">Automatic Sliding Doors</h1>
        <p class="text-paragraph text-custom-dark-blue/90 text-center font-light">
            @if($lang == 'id')
            <span class="italic">Automatic Sliding Door</span> adalah pintu yang dapat membuka dan menutup dengan cara bergeser. <span class="italic">Automatic Sliding Door</span> dirancang untuk membuka dan menutup secara otomatis dengan kecepatan tinggi, menggabungkan teknologi canggih untuk memastikan keamanan bagi tempat usaha dan penggunanya.
            @else
            Automatic Sliding Door is a door that operates by sliding open and closed. Designed to function automatically at high speeds, the Automatic Sliding Door incorporates advanced technology to ensure security for both commercial spaces and users.
            @endif
        </p>
    </div>
</div>

<div class="px-2 sm:px-4 md:px-6 lg:px-8 xl:px-10 2xl:px-12 flex flex-col justify-center items-center gap-4 sm:gap-5 md:gap-6 pt-4 sm:pt-6 md:pt-8 bg-custom-darker-blue text-custom-white sticky top-0">
    <h1 class="text-title font-ttRamillas font-bold text-center w-full">Product Type</h1>

    <div class="w-full">
        <div class="flex gap-4 sm:gap-6 md:gap-8 text-paragraph leading-none overflow-auto w-full pb-4 sm:pb-6 md:pb-8">
            <a href="#automatic-standard" class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Standard</a>
            <a href="#automatic-telescopic" class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Telescopic</a>
            <a href="#automatic-curved" class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Curved & Semicircular</a>
            <a href="#automatic-fire" class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Fire Resistant</a>
            <a href="#automatic-panic" class="product-type-selector flex w-44 sm:w-52 md:w-64 lg:w-auto flex-none lg:flex-1 justify-center items-center text-center border border-custom-white rounded-full px-5 sm:px-6 md:px-7 py-2 sm:py-3 md:py-4 cursor-pointer transition hover:bg-custom-light-blue hover:text-custom-dark-blue">Panic Break Out</a>
        </div>
    </div>
</div>

<div class="c-container pb-8 sm:pb-12 md:pb-16 flex flex-col">
    {{-- Standard --}}
    <div id="automatic-standard" class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Standard Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-10">
                <div class="col-span-1 pb-2 xl:pb-8 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 1"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 2"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 3"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 4"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 5"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 6"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 7"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 8"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/standard/sliding-standard-9.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding standard 9"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light">
                        @if($lang == 'id')
                        <span class="italic">Standard Automatic Sliding Door</span> direkomendasikan untuk area dengan tingkat kegiatan yang tinggi. Pintu ini memudahkan pergerakan orang tanpa kontak dengan pintu dan menawarkan kecepatan bukaan tertinggi di pasar, bersamaan dengan tingkat keamanan maksimum.
                        @else
                        The Standard Automatic Sliding Door is recommended for areas with high levels of activity. This door facilitates the movement of people without direct contact and provides the highest opening speed in the market, coupled with maximum security measures.
                        @endif
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Standard Sliding Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Dua daun pintu bergerak ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                        @else
                                        Two door leaves move in opposite directions, creating a spacious opening.
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Daun pintu tunggal bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                        @else
                                        Single door leaf moves either to the right or left, leaving an opening on the corresponding side.
                                        @endif
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
    <div id="automatic-telescopic" class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic xl:text-end">Telescopic Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12">
                <div class="col-span-1 pb-2 xl:pb-8 order-1 xl:order-2 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 1"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 2"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 3"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 4"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/telescopic/sliding-telescopic-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding telescopic 5"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6 order-2 xl:order-1">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light xl:text-end">
                        @if($lang == 'id')
                        <span class="italic">Telescopic Sliding Door</span> ideal untuk pintu masuk dengan ruang terbatas, untuk memisahkan lorong, atau untuk memperluas dan memaksimalkan akses di area yang sempit, atau di mana diperlukan untuk memperluas area lebar yang lebih dari biasanya. Pada pintu ini dapat memiliki bukaan sebesar 2/3 ruangan yang ada pada pintu tersebut.
                        @else
                        The Telescopic Sliding Door is ideal for entrances with limited space, for separating corridors, or for expanding and maximizing access in narrow areas, or where there is a need to widen the entrance beyond the typical width. This door type can achieve an opening size of up to 2/3 of the available space, making it a versatile solution for various spatial constraints.
                        @endif
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Telescopic Sliding Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')

                                        @else

                                        @endif

                                        Empat daun pintu bergerak berpasangan ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')

                                        @else

                                        @endif

                                        Dua daun pintu bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
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
    <div id="automatic-curved" class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Curved & Semicurved Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-10">
                <div class="col-span-1 pb-2 xl:pb-8 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 1"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 2"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 3"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 4"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 5"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 6"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-7.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 7"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/curved/sliding-curved-8.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding curved 8"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light">
                        @if($lang == 'id')
                        <span class="italic">Curved dan Semicurved Sliding Door</span> adalah solusi yang elegan dan unik tanpa mengorbankan fungsi, kenyamanan, dan efisiensi pintu geser. Pintu ini dapat dipasang dengan kaca dan struktur cekung atau cembung dengan berbagai jari-jari dan tingkat kelengkungan yang berbeda.
                        @else
                        The Curved and Semi Curved Sliding Door presents an elegant and unique solution without compromising on the functionality, comfort, and efficiency of sliding doors. These doors can be installed with curved or semi curved glass and structures, offering various radii and levels of curvature.
                        @endif
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Curved & Semicurved Door</p>

                        <div class="grid grid-cols-1">
                            <div class="col-span-1 flex flex-col gap-3">
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Pintu terdiri dari pintu otomatis tunggal atau dua daun pintu geser yang bergerak secara radial.
                                        @else
                                        The door consists of a single automatic door or two sliding door leaves that move radially.
                                        @endif
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
    <div id="automatic-fire" class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic xl:text-end">Fire Resistant Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-10">
                <div class="col-span-1 pb-2 xl:pb-8 order-1 xl:order-2 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 1"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 2"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 3"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/fire/sliding-fire-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding fire 4"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6 order-2 xl:order-1">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light xl:text-end">
                        @if($lang == 'id')
                        <span class="italic">Fire Resistant Sliding Door</span> ini dirancang dengan menggabungkan fungsi <span class="italic">automatic sliding door</span> dengan sifat-sifat pintu tahan api. Direkomendasikan untuk memisahkan area dengan risiko kebakaran tinggi dan mencegah penyebaran api dan asap ke area lainnya. Pintu ini telah menjalani pengujian lengkap dan memenuhi semua sertifikasi sesuai dengan standar terkait ketahanan terhadap kebakaran.
                        @else
                        The Fire-Resistant Sliding Door is designed by integrating the functionality of an automatic sliding door with fire-resistant properties. It is recommended for separating areas with high fire risk, preventing the spread of fire and smoke to other areas. This door has undergone comprehensive testing and meets all certifications in accordance with relevant fire resistance standards.
                        @endif
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Jenis Fire Resistant Door</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Bi-Parting</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Empat daun pintu bergerak berpasangan ke arah berlawanan, meninggalkan ruang bukaan yang luas.
                                        @else
                                        Four door leaves move in opposite directions, creating a spacious opening.
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Single</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/single-icon.png')}}" alt="single" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Dua daun pintu bergerak ke kanan atau kiri, meninggalkan ruang bukaan di sisi yang sesuai.
                                        @else
                                        Two door leaves move either to the right or left, leaving an opening on the corresponding side.
                                        @endif
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
    <div id="automatic-panic" class="product-type">
        <div class="flex flex-col gap-6 xl:gap-8">
            <div>
                <h1 class="text-heading text-custom-dark-blue font-ttRamillas font-extrabold italic">Panic Break-Out / Emergency Automatic Sliding Doors</h1>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-10">
                <div class="col-span-1 pb-2 xl:pb-8 flex items-center">
                    <div class="swiper mySwiper product-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-1.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 1"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-2.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 2"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-3.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 3"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-4.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 4"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-5.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 5"></div>
                            <div class="swiper-slide product-swiper-slide"><img src="{{ asset('assets/product/automatic-sliding-doors/panic/sliding-panic-6.jpg') }}?t={{ env('VERSION_TIME') }}" alt="sliding panic 6"></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-span-1 flex flex-col gap-6">
                    <p class="text-paragraph text-custom-dark-blue/90 font-light">
                        @if($lang == 'id')
                        <span class="italic">Panic Break-Out Sliding Door</span> memiliki fungsi kombinasi pintu geser dengan fitur keselamatan pintu keluar darurat untuk memaksimalkan luas area lalu lintas, dan memastikan bahwa rute evakuasi dengan pintu otomatis mematuhi peraturan dalam situasi darurat. Biasanya digunakan di bangunan umum seperti bandara, stasiun, atau area besar.
                        @else
                        The Panic Break-Out Sliding Door combines the functionality of a sliding door with emergency exit features to maximize traffic flow area and ensure that evacuation routes with automatic doors comply with regulations in emergency situations. Typically used in public buildings such as airports, stations, or large areas.
                        @endif
                    </p>

                    <div class="flex flex-col gap-4 bg-custom-lighter-blue text-custom-dark-blue/90 p-6 rounded-2xl">
                        <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-extrabold">Panic Break-Out Door Mechanism</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 2xl:grid-cols-2 gap-6 2xl:gap-4">
                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Normal Event</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/biparting-icon.png')}}" alt="bi-parting" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Pintu ini beroperasi dalam mode normal, dengan bergeser membuka/menutup secara otomatis.
                                        @else
                                        In normal mode the door operate by automatically sliding open/closed.
                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="col-span-1 flex flex-col gap-3">
                                <p class="text-subtitle text-custom-dark-blue/90 font-ttRamillas font-bold">Emergency Event</p>
                                <div class="flex items-center gap-4 h-full">
                                    <img src="{{asset('assets/product/emergency-icon.png')}}" alt="emergency" class="flex-none aspect-square w-20 sm:w-auto">

                                    <p class="text-subparagraph text-custom-dark-blue/90 font-light">
                                        @if($lang == 'id')
                                        Saat situasi darurat, daun pintu akan melipat ke arah luar saat ditekan secara manual.
                                        @else
                                        In emergency situations, the door leaves will fold outward when manually pushed.
                                        @endif
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

<div class="c-container pb-8 sm:pb-10 md:pb-12 text-subparagraph">
    <div class="px-10 sm:px-16 md:px-20 lg:px-24 xl:px-28 2xl:px-32 bg-custom-dark-blue flex flex-col items-center rounded-3xl py-8 text-custom-white gap-6">
        <h1 class="font-ttRamillas font-extrabold text-subtitle">Downloads</h1>

        <div class="flex flex-col gap-4 sm:gap-5 md:gap-6 w-full">
            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12 border-b border-b-custom-white pb-2 px-4 sm:px-6 md:px-8">
                <p>Brosure Sliding Door</p>

                <a href="{{asset('assets/brosure/sliding/Opening Doors To The Future..pdf')}}?t={{ env('VERSION_TIME') }}" download>
                    <svg class="w-4 sm:w-5 md:w-6 mr-1 flex-none" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.25 22H17.75V19.5H0.25V22ZM17.75 8.25H12.75V0.75H5.25V8.25H0.25L9 17L17.75 8.25Z" fill="#F8F4E9" />
                    </svg>
                </a>
            </div>

            <div class="w-full flex justify-between items-center gap-6 sm:gap-9 md:gap-12 border-b border-b-custom-white pb-2 px-4 sm:px-6 md:px-8">
                <p>Brosur Visio 100, 125, dan 175</p>

                <a href="{{asset('assets/brosure/sliding/Brosur Visio 100, 125, dan 175.pdf')}}?t={{ env('VERSION_TIME') }}" download>
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

            <img src="{{asset('assets/product/automatic-sliding-doors/project.jpg')}}?t={{ env('VERSION_TIME') }}" alt="project" style="box-shadow: 15px 20px 30px 0px rgba(0, 0, 0, 0.15);" class="rounded-3xl w-full">
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

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 md:w-8 aspect-square">
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
<script src="{{ asset('js/automatic-sliding-doors.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
