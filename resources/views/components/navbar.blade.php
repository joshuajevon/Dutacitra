<nav class="text-subparagraph block @if($bgColor === 'blue') bg-custom-darker-blue @elseif ($bgColor === 'transparent') bg-transparent @endif c-container z-50 w-full text-custom-white">
    <div class="flex justify-between items-center py-3">
        <a href="{{ route('homeEn') }}">
            <img src="{{asset('assets/logo/logo-icon-text.png')}}?t={{ env('VERSION_TIME') }}" alt="logo" class="hidden 2xl:block h-10  ">
            <img src="{{asset('assets/logo/logo-icon.png')}}?t={{ env('VERSION_TIME') }}" alt="logo" class="2xl:hidden block h-10">
        </a>

        <span class="hidden xl:flex justify-center items-center gap-16">
            <span class="flex justify-center items-center gap-8 sm:gap-16 md:gap-20">
                <a href="{{ route('homeEn') }}" class="@if($page === 'home') font-extrabold @endif ">Home</a>

                <a href="{{ route('productEn') }}" class="@if($page === 'product') font-extrabold @endif">Product</a>

                <a href="{{ route('projectEn') }}" class="@if($page === 'project') font-extrabold @endif">Project</a>

                <a href="{{ route('aboutEn') }}" class="@if($page === 'about') font-extrabold @endif">About Us</a>

                <a href="{{ route('contactEn') }}" class="@if($page === 'contact') font-extrabold @endif border border-custom-white rounded-full px-6 py-1 hover:bg-custom-white hover:text-custom-darker-blue transition">Contact</a>

                <div class="relative cursor-pointer z-50" onclick="toggleWebLanguageDropdown()">
                    <div class="inline-flex items-center overflow-hidden">
                        <p>
                            @if($lang === 'en')
                            EN
                            @else
                            ID
                            @endif
                        </p>

                        <svg id="language-dropdown-arrow-web" xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 transition" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div id="language-dropdown-web" class="hidden absolute end-0 z-10 mt-2 rounded-md border border-custom-white bg-custom-darker-blue shadow-lg" role="menu">
                        <div class="p-2">
                            <a href="{{ route($enRoute) }}" class="@if($lang === 'en') bg-custom-white text-custom-darker-blue @endif transition block rounded-lg px-4 py-2 hover:bg-custom-white hover:text-custom-darker-blue" role="menuitem">
                                EN
                            </a>

                            <a href="{{ route($idRoute) }}" class="@if($lang === 'id') bg-custom-white text-custom-darker-blue @endif block rounded-lg px-4 py-2 hover:bg-custom-white hover:text-custom-darker-blue" role="menuitem">
                                ID
                            </a>
                        </div>
                    </div>
                </div>

            </span>
        </span>

        <button class="inline xl:hidden rounded bg-custom-red p-2 transition" onclick="toggleNavbar()">
            <div class="h-6 w-6 relative">
                <span id="nav-icon-top" class="w-6 h-[0.125rem] bg-custom-white rounded-full absolute inset-x-0 mx-auto top-0.5 transition"></span>
                <span id="nav-icon-mid" class="w-6 h-[0.125rem] bg-custom-white rounded-full absolute inset-0 m-auto transition"></span>
                <span id="nav-icon-bottom" class="w-6 h-[0.125rem] bg-custom-white rounded-full absolute inset-x-0 mx-auto bottom-0.5 transition"></span>
            </div>
        </button>
    </div>
</nav>

{{-- Mobile Links --}}
<nav id="mobile-nav-links" class="c-container pb-2 @if($bgColor === 'blue') bg-custom-darker-blue @elseif ($bgColor === 'transparent') bg-transparent @endif hidden text-custom-white text-subparagraph absolute top-16 left-0 w-full z-50">
    <a href="{{ route('homeEn') }}" class="@if($page === 'home') font-extrabold @endif block py-3.5">Home</a>

    <a href="{{ route('productEn') }}" class="@if($page === 'product') font-extrabold @endif block py-3.5">Product</a>

    <a href="{{ route('projectEn') }}" class="@if($page === 'project') font-extrabold @endif block py-3.5">Project</a>

    <a href="{{ route('aboutEn') }}" class="@if($page === 'about') font-extrabold @endif block py-3.5">About Us</a>

    <a href="{{ route('contactEn') }}" class="@if($page === 'contact') font-extrabold @endif block py-3.5">Contact</a>

    <div class="relative transition-colors text-custom-light-green hover:text-custom-dark-green cursor-pointer py-3.5" onclick="toggleMobileLanguageDropdown()">
        <div class="inline-flex items-center overflow-hidden">
            <p>
                @if($lang === 'en')
                EN
                @else
                ID
                @endif
            </p>

            <svg id="language-dropdown-arrow-mobile" xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 transition" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>

        <div id="language-dropdown-mobile" class="hidden absolute start-0 z-10 mt-2 rounded-md border border-custom-white bg-custom-darker-blue shadow-lg" role="menu">
            <div class="p-2">
                <a href="{{ route($enRoute) }}" class="@if($lang === 'en') bg-custom-white text-custom-darker-blue @endif transition block rounded-lg px-4 py-2 hover:bg-custom-white hover:text-custom-darker-blue" role="menuitem">
                    EN
                </a>

                <a href="{{ route($idRoute) }}" class="@if($lang === 'id') bg-custom-white text-custom-darker-blue @endif block rounded-lg px-4 py-2 hover:bg-custom-white hover:text-custom-darker-blue" role="menuitem">
                    ID
                </a>
            </div>
        </div>
    </div>
</nav>
