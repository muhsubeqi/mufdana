@extends('layouts.front.app')
@section('title', 'Cabang kami')
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
                        <a href="{{ url('/') }}" class="caption1 text-white">Home</a>
                        <span class="caption1 text-white opacity-40">/</span>
                        <span class="caption1 text-white opacity-60">Cabang Kami</span>
                    </div>
                    <h3 class="heading3 text-white mt-2 animate animate_top" style="--i: 2">Cabang Kami</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <div class="about lg:py-20 sm:py-14 py-10">
        <div class="container mx-auto px-4">
            <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-8">
                @php $brands = \App\Models\Brand::all(); @endphp
                @foreach ($brands as $brand)
                    <li>
                        <a href="{{ route('front.brand.detail', $brand->slug) }}" class="flex flex-col items-center gap-2 text-button p-2 rounded-lg bg-white duration-300 shadow-md">
                            <img src="{{ asset('assets/images/brand/brand.jpg') }}" alt="home1" class="w-full rounded" />
                            <span>{{ $brand->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


    <!-- Contact Us -->
    <section class="contact lg:py-20 sm:py-14 py-10">
        <div class="container flex max-lg:flex-col lg:items-center justify-between gap-20 gap-y-8">
            <div class="content lg:w-5/12">
                <div class="heading">
                    <h3 class="heading3">Kami siap membantu anda?</h3>
                    <p class="body2 text-secondary mt-3">Dapatkan pinjaman dana tunai dengan proses cepat dan mudah!
                        Cukup jaminkan BPKB mobil atau motor kamu, dan dana langsung cair.</p>
                </div>
                <ul class="list grid xl:grid-cols-2 lg:grid-cols-1 sm:grid-cols-2 gap-6 sm:mt-8 mt-6">
                    <li class="flex flex-col gap-2">
                        <strong class="text-title">Alamat:</strong>
                        <p class="desc body2 text-secondary">Jl. Ahmad Yani No.A12 Kav A11, Ardirejo, Kec. Kepanjen, Kabupaten Malang</p>
                    </li>
                    <li class="flex flex-col gap-2">
                        <strong class="text-title">Jam Operasional:</strong>
                        <p class="desc body2 text-secondary">
                            Senin - Jumat: 08:00 - 15:00<br />
                            Sabtu: 08:00 - 12:00
                        </p>
                    </li>
                    <li class="flex flex-col gap-2">
                        <strong class="text-title">Informasi:</strong>
                        <p class="desc body2 text-secondary">mufdana2025@gmail.com</p>
                    </li>
                    <li class="flex flex-col gap-2">
                        <strong class="text-title">sosial media kami:</strong>
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
            <ul class="list_img grid grid-cols-2 sm:gap-7.5 gap-5 flex-shrink-0 xl:w-[690px] lg:w-3/5 w-full">
                <li class="w-full aspect-[3/4] rounded-lg overflow-hidden animate animate_left" style="--i: 1">
                    <img src="{{ asset('assets/images/components/benefit1.webp')}}" alt="IMG-10" class="w-full h-full object-cover" />
                </li>
                <li class="w-full aspect-[3/4] rounded-lg overflow-hidden animate animate_left" style="--i: 2">
                    <img src="{{ asset('assets/images/components/benefit10.webp')}}" alt="IMG-11" class="w-full h-full object-cover" />
                </li>
            </ul>
        </div>
    </section>
@endsection
