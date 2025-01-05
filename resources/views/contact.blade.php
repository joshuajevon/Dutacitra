@extends('template.template')

@section('head')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{ asset('css/[name].css') }}?t={{ env('VERSION_TIME') }}"> --}}
@endsection

@section('body')
<x-navbar :page="'contact'" :lang="$lang" :bgColor="'blue'" />

<div class="relative c-container flex flex-col text-custom-white pt-12 sm:pt-16 md:pt-20 pb-8 sm:pb-12 md:pb-16 gap-8">
    <div class="z-10 absolute top-0 left-0 w-full h-[22rem] sm:h-[28rem] md:h-[30rem] lg:h-[32rem] xl:h-[48rem] bg-center bg-cover" style="background-image: url('{{asset('assets/contact/header.jpg')}}?t={{ env('VERSION_TIME') }}')">
    </div>

    <div class="z-20 flex flex-col gap-4 max-w-4xl">
        <h1 class="font-playfair text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-custom-white">Get In Touch</h1>
        <p class="text-paragraph">
            @if($lang == 'id')
            Untuk informasi lebih lanjut atau konsultasi mengenai Automatic door jangan ragu untuk menghubungi kami. Kami siap membantu Anda dalam merencanakan solusi yang sesuai dengan kebutuhan Anda.
            @else
            For further information or consultations regarding Automatic Doors, feel free to contact us. We are ready to assist you in planning a solution that aligns with your needs.
            @endif
        </p>
    </div>

    <div class="z-20 flex flex-col xl:flex-row items-center gap-8 sm:gap-10 md:gap-12 text-custom-dark-blue">
        <div class="w-full xl:w-[500px] flex-none">
            <div class="flex flex-col gap-6 sm:gap-8 md:gap-10 bg-custom-light-yellow rounded-3xl p-8 sm:p-12 h-full text-paragraph" style="box-shadow: 10px 10px 20px 3px rgba(0, 0, 0, 0.25);">
                <h1 class="text-heading font-playfair font-extrabold">
                    Contact Us
                </h1>
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 sm:w-[1.875rem] md:w-8 h-7 sm:h-[1.875] md:h-8 flex-none" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <p>+62 0811 8869677</p>
                </div>

                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 sm:w-[1.875rem] md:w-8 h-7 sm:h-[1.875] md:h-8 flex-none" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>

                    <p class="break-all">dutacitranusajayaa@gmail.com</p>
                </div>

                <div class="text-custom-darker-blue flex gap-4 sm:gap-6 md:gap-7 lg:gap-8">
                    <a href="https://www.instagram.com/automaticdoordutacitra" target="_blank" rel="noopener noreferrer" class="bg-custom-lighter-blue w-12 sm:w-[3.25rem] md:w-14 lg:w-[3.75rem] xl:w-16 h-12 sm:h-[3.25rem] md:h-14 lg:h-[3.75rem] xl:h-16 flex justify-center items-center rounded-full hover:bg-custom-light-blue transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-[1.625rem] md:w-7 lg:[1.875rem] xl:w-8 h-6 sm:h-[1.625rem] md:h-7 lg:[1.875rem] xl:h-8" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>

                    <a href="https://www.tiktok.com/@automaticdoordutacitra" target="_blank" rel="noopener noreferrer" class="bg-custom-lighter-blue w-12 sm:w-[3.25rem] md:w-14 lg:w-[3.75rem] xl:w-16 h-12 sm:h-[3.25rem] md:h-14 lg:h-[3.75rem] xl:h-16 flex justify-center items-center rounded-full hover:bg-custom-light-blue transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 sm:w-[1.625rem] md:w-7 lg:[1.875rem] xl:w-8 h-6 sm:h-[1.625rem] md:h-7 lg:[1.875rem] xl:h-8" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                        </svg>
                    </a>

                    <a href="https://www.youtube.com/@automaticdoordutacitra" target="_blank" rel="noopener noreferrer" class="bg-custom-lighter-blue w-12 sm:w-[3.25rem] md:w-14 lg:w-[3.75rem] xl:w-16 h-12 sm:h-[3.25rem] md:h-14 lg:h-[3.75rem] xl:h-16 flex justify-center items-center rounded-full hover:bg-custom-light-blue transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 sm:w-[1.625rem] md:w-7 lg:[1.875rem] xl:w-8 h-6 sm:h-[1.625rem] md:h-7 lg:[1.875rem] xl:h-8" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-col gap-6 sm:gap-7 md:gap-8 bg-custom-dark-blue rounded-3xl p-8 sm:p-12 md:p-16 shadow-2xl" style="box-shadow: 10px 10px 20px 3px rgba(0, 0, 0, 0.25);">
                <h1 class="text-heading font-playfair font-extrabold text-custom-white">
                    Send Message
                </h1>

                <form id="form-contact" action="{{ route('contact-form') }}" method="POST" class="text-paragraph text-custom-white flex flex-col gap-8" onsubmit="validateContact(event)">
                    @csrf
                    <div class="flex gap-6 sm:gap-7 md:gap-8 w-full">
                        <div class="flex flex-col gap-2 w-full">
                            <input type="text" name="first-name" id="first-name" placeholder="First Name" class="bg-transparent border-b border-custom-white p-2 w-full">
                            <p id="error-first-name" class="hidden text-subparagraph text-red-500 px-2"></p>
                        </div>

                        <div class="flex flex-col gap-2 w-full">
                            <input type="text" name="last-name" id="last-name" placeholder="Last Name" class="bg-transparent border-b border-custom-white p-2 w-full">
                            <p id="error-last-name" class="hidden text-subparagraph text-red-500 px-2"></p>
                        </div>
                    </div>

                    <div class="flex gap-6 sm:gap-7 md:gap-8 w-full">
                        <div class="flex flex-col gap-2 w-full">
                            <input type="text" name="email" id="email" placeholder="Email" class="bg-transparent border-b border-custom-white p-2 w-full">
                            <p id="error-email" class="hidden text-subparagraph text-red-500 px-2"></p>
                        </div>

                        <div class="flex flex-col gap-2 w-full">
                            <input type="text" name="phone" id="phone" placeholder="Phone" class="bg-transparent border-b border-custom-white p-2 w-full">
                            <p id="error-phone" class="hidden text-subparagraph text-red-500 px-2"></p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <input type="text" name="subject" id="subject" placeholder="Subject" class="bg-transparent border-b border-custom-white p-2 w-full">
                        <p id="error-subject" class="hidden text-subparagraph text-red-500 px-2"></p>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <div class="flex flex-col gap-3 w-full">
                            <label for="message" class="px-2">Message</label>
                            <textarea name="message" id="message" rows="5" class="p-4 rounded-xl text-custom-dark-blue resize-none"></textarea>
                        </div>
                        <p id="error-message" class="hidden text-subparagraph text-red-500 px-2"></p>
                    </div>


                    <div class="flex justify-center items-center mt-2">
                        <button id="contact-submit-button" type="submit" class="rounded-full bg-custom-white hover:bg-[#D4E7ED] active:bg-[#BFDFE9] transition text-custom-dark-blue py-2 px-12 sm:px-14 md:px-16 font-bold flex justify-center items-center gap-3 sm:gap-3.5 md:gap-4">
                            Send
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 sm:w-[1.125rem] md:w-5 h-4 sm:h-[1.125rem] md:h-5" viewBox="0 0 16 16" stroke-width="0.5" stroke="currentColor">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                            </svg>
                        </button>
                    </div>

                    <p id="contact-validation-message" class="hidden text-subparagraph text-center">
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center gap-6 sm:gap-7 md:gap-8 text-custom-dark-blue pt-8 sm:pt-10 md:pt-12">
        <div class="flex flex-col justify-center items-center gap-2 sm:gap-3 md:gap-4 max-w-3xl">
            <h1 class="text-heading font-playfair font-extrabold text-center">
                Find Us on Google Maps
            </h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="col-span-1 flex flex-col gap-4">
                <h1 class="text-subtitle font-extrabold text-center">Marketing Office</h1>

                <div class="w-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8318105212643!2d106.71306488403506!3d-6.1532748779348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9b7741f8003%3A0xbdcd90985668cde0!2sPJS%20Tower!5e0!3m2!1sen!2sid!4v1699698972980!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[500px] rounded-3xl"></iframe>
                </div>

                <p class="text-paragraph text-center px-6 sm:px-8 md:px-10 lg:px-12 xl:px-14 2xl:px-16">Jl. Raya Daan Mogot No.1, RT.3/RW.12, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11840</p>
            </div>

            <div class="col-span-1 flex flex-col gap-4 ">
                <h1 class="text-subtitle font-extrabold text-center">Operational Office</h1>

                <div class="w-full">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d606.9580324079261!2d106.71164160312428!3d-6.147837243510641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9f26ee22301%3A0xd48a5a308918c15a!2sPT.%20DutaCitra%20NusaJaya!5e0!3m2!1sen!2sid!4v1697682781696!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[500px] rounded-3xl"></iframe>
                </div>

                <p class="text-paragraph text-center px-6 sm:px-8 md:px-10 lg:px-12 xl:px-14 2xl:px-16">Jl. Utan Jati Ruko Daan Mogot Baru Blok LB 2 No. 15, Kalideres, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11830</p>
            </div>
        </div>
    </div>
</div>

<x-footer :lang="$lang" />

{{-- JS --}}
<script src="{{ asset('js/contact.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection
