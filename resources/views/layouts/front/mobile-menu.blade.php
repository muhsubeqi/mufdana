<!-- Menu mobile -->
<div class="menu_mobile">
    <button
        class="menu_mobile_close flex items-center justify-center absolute top-5 left-5 w-8 h-8 rounded-full bg-surface">
        <span class="ph-bold ph-x"></span>
    </button>
    <div class="heading flex items-center justify-center mt-5">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="h-8"/>
        </a>
    </div>
    <div class="mt-4">
        <ul class="nav_mobile">
            <li class="nav_item py-2">
                <a href="{{ url('/') }}" class="text-xl font-semibold flex items-center justify-between">
                    Home
                </a>
            </li>
            <li class="nav_item py-2">
                <a href="{{ route('about') }}" class="text-xl font-semibold flex items-center justify-between">
                    Tentang Kami
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
            <li class="nav_item py-2">
                <a href="{{ route('contact') }}" class="text-xl font-semibold flex items-center justify-between">
                    Kontak
                </a>
            </li>
        </ul>
    </div>
</div>
