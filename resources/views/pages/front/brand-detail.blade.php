@extends('layouts.front.app')
@section('title')
    {{ $brand->name }}
@endsection
@section('content')

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="breadcrumb_inner relative sm:mt-20 mt-16 lg:py-20 py-14">
            <div class="breadcrumb_bg absolute top-0 left-0 w-full h-full">
                <img src="{{ asset('/assets/images/components/breadcrumb_candidate.webp')}}" alt="breadcrumb_candidate" class="w-full h-full object-cover" />
            </div>
            <div class="container relative h-full">
                <div class="breadcrumb_content flex flex-col items-start justify-center xl:w-[1000px] lg:w-[848px] md:w-5/6 w-full h-full">
                    <div class="list_breadcrumb flex items-center gap-2 animate animate_top" style="--i: 1">
                        <a href="{{ route('front.brand') }}" class="caption1 text-white">Cabang</a>
                        <span class="caption1 text-white opacity-40">/</span>
                        <span class="caption1 text-white opacity-60">{{ $brand->name }}</span>
                    </div>
                    <h3 class="heading3 text-white mt-2 animate animate_top" style="--i: 2">{{ $brand->name }}</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="contact lg:py-20 sm:py-14 py-10 bg-surface">
        <div class="container flex max-lg:flex-col lg:items-center justify-between xl:gap-32 gap-20 gap-y-10">
            <div class="content">
                <div class="heading">
                    <h3 class="heading3">Kontak Kami</h3>
                    <p class="body2 text-secondary mt-3">Dapatkan pinjaman dana tunai dengan proses cepat dan mudah!</p>
                </div>
                <ul class="list gap-6 sm:mt-8 mt-6">
                    <li class="flex flex-col gap-2">
                        <strong class="text-title">Alamat:</strong>
                        <p class="desc body2 text-secondary">{{ $brand->address }}</p>
                    </li>
                    <li class="flex flex-col mt-4">
                        <strong class="text-title">Infomation:</strong>
                        <p class="desc body2 text-secondary">mufdana2025@gmail.com</p>
                    </li>
                    <li class="flex flex-col mt-4">
                        <strong class="text-title">Our social media:</strong>
                        <ul class="list flex flex-wrap items-center gap-2.5">
                            <li>
                                <a href="https://www.facebook.com/people/Gadai-BPKB-Mandiri-Utama-Finance/61576945419346/" target="_blank" class="w-10 h-10 flex items-center justify-center rounded-full border border-line duration-300 hover:bg-primary hover:text-white">
                                    <span class="icon-facebook text-black duration-300"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="map flex-shrink-0 xl:w-[630px] lg:w-1/2 w-full h-[400px]">
                {!! $brand->frame_google_map !!}
            </div>
        </div>
    </section>
@endsection
