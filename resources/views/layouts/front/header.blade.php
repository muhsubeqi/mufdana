<header id="header" class="header -style-6 relative">
    <div class="container relative">
        <div class="header_inner flex items-center justify-between z-[1] sm:h-20 h-16 2xl:px-15 px-9 border-b border-light rounded-full bg-white">
            <h1>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="logo" class="logo-black md:h-[42px] h-8 w-auto" />
                </a>
            </h1>
            <div class="navigator h-full max-xl:hidden">
                <ul class="list flex items-center gap-5 h-full">
                    <li class="h-full relative">
                        <a href="{{ url('/') }}" class="flex items-center gap-1 h-full duration-300 {{ request()->is('/') ? 'active' : '' }}">
                            <span class="text-title relative">Home</span>
                        </a>
                    </li>
                    <li class="h-full relative">
                        <a href="{{ route('about') }}" class="flex items-center gap-1 h-full duration-300 {{ request()->routeIs('about') ? 'active' : '' }}">
                            <span class="text-title relative">Tentang Kami</span>
                        </a>
                    </li>
                    <li class="h-full relative">
                        <a href="{{ route('front.brand') }}" class="flex items-center gap-1 h-full duration-300 {{ request()->routeIs('front.brand') ? 'active' : '' }}">
                            <span class="text-title relative">Cabang Kami</span>
                        </a>
                    </li>
                    <li class="h-full relative">
                        <a href="{{ route('front.faq') }}" class="flex items-center gap-1 h-full duration-300 {{ request()->routeIs('front.faq') ? 'active' : '' }}">
                            <span class="text-title relative">Pertanyaan</span>
                        </a>
                    </li>
                    <li class="h-full relative">
                        <a href="{{ route('contact') }}" class="flex items-center gap-1 h-full duration-300 {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <span class="text-title relative">Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="list_action flex items-center gap-7 h-full">
                <div class="list_icon flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard.index') }}" class="flex items-center gap-1 text-title duration-300 text-white bg-primary px-5 py-2 rounded-full">
                                <span class="ph-bold ph-user"></span>
                                <span>Dashboard</span>
                            </a>
                        @else
                            <a href="https://wa.me/6282325333445?text=Halo%20MUF%20Dana%2C%20saya%20ingin%20mengajukan%20pinjaman%20dengan%20jaminan%20BPKB.%0ANama%3A%20%0AAlamat%3A%20%0ANominal%20Pinjaman%3A%20%0AJenis%20Kendaraan%3A%20%0ATahun%20Kendaraan%3A%20" class="flex items-center gap-1 text-title duration-300 text-white bg-primary px-5 py-2 rounded-full">
                                <span class="ph-bold ph-phone"></span>
                                <span>Konsultasi</span>
                            </a>
                        @endauth
                    @endif
                </div>
                <button class="humburger_btn xl:hidden">
                    <span class="ph-bold ph-list text-2xl block"></span>
                </button>
            </div>
        </div>
    </div>
</header>
