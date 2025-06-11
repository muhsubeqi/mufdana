@extends('layouts.front.app')
@section('title', 'Tentang kami')
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
                        <span class="caption1 text-white opacity-60">Tentang Kami</span>
                    </div>
                    <h3 class="heading3 text-white mt-2 animate animate_top" style="--i: 2">Tentang Kami</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <div class="about lg:py-20 sm:py-14 py-10">
        <div class="container flex flex-col items-center">
            <h3 class="heading3 text-center animate animate_top" style="--i: 1">
                Solusi Dana Cepat dan
                Terpercaya
            </h3>
            <p class="body2 text-center mt-3 animate animate_top" style="--i: 2">
                MufDana adalah perusahaan jasa pembiayaan resmi yang menyediakan solusi pinjaman dengan jaminan BPKB mobil dan motor. Kami hadir untuk membantu masyarakat mendapatkan dana tunai dengan cepat dan mudah tanpa harus menjual atau kehilangan kendaraan kesayangan.

                Sebagai lembaga pembiayaan yang berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK), MufDana menjunjung tinggi keamanan, transparansi, dan profesionalisme dalam setiap proses pengajuan. Kepercayaan nasabah adalah prioritas kami, dan itulah mengapa kami terus menghadirkan layanan yang jujur, efisien, dan tanpa biaya tersembunyi.
            </p>
            <a href="https://wa.me/6282325333445" class="button-main mt-4 animate animate_top" style="--i: 3">Kontak kami</a>
        </div>
    </div>

    <!-- Counter -->
    <section class="counter lg:py-15 sm:py-12 py-8 bg-[#FAF7F1]">
        <div class="container flex max-lg:flex-wrap items-center justify-between max-lg:gap-y-8">
            <div class="item max-lg:flex max-lg:flex-col max-lg:w-1/2 animate animate_top" style="--i: 1">
                <h2 class="heading2 pb-1 text-center">200+</h2>
                <span class="body1 text-center">Nasabah Bahagia</span>
            </div>
            <div class="line flex-shrink-0 w-px h-20 bg-line max-lg:hidden"></div>
            <div class="item max-lg:flex max-lg:flex-col max-lg:w-1/2 animate animate_top" style="--i: 2">
                <h2 class="heading2 pb-1 text-center">100%</h2>
                <span class="body1 text-center">Proses mudah dan cepat</span>
            </div>
            <div class="line flex-shrink-0 w-px h-20 bg-line max-lg:hidden"></div>
            <div class="item max-lg:flex max-lg:flex-col max-lg:w-1/2 animate animate_top" style="--i: 3">
                <h2 class="heading2 pb-1 text-center">100%</h2>
                <span class="body1 text-center">Jaminan Keamanan (OJK)</span>
            </div>
            <div class="line flex-shrink-0 w-px h-20 bg-line max-lg:hidden"></div>
            <div class="item max-lg:flex max-lg:flex-col max-lg:w-1/2 animate animate_top" style="--i: 4">
                <h2 class="heading2 pb-1 text-center">0%</h2>
                <span class="body1 text-center">Biaya Tersembunyi</span>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner lg:pb-20 sm:pb-14 pb-10 mt-10">
        <div class="container">
            <div class="banner_inner relative sm:px-16 px-8 py-16 overflow-hidden rounded-xl animate animateZoomOutUp"
                 style="--i: 5">
                <div class="banner_bg absolute top-0 left-0 w-full h-full z-[-1]">
                    <img src="./assets/images/components/banner1.webp" alt="banner1" class="w-full h-full object-cover"/>
                </div>
                <div class="banner_content">
                    <h4 class="heading4 text-white animate animate_top" style="--i: 1">Dapatkan pinjaman dana tunai  <br
                            class="max-sm:hidden"/>dengan proses cepat dan mudah!</h4>
                    <p class="desc mt-2 text-white animate animate_top" style="--i: 2">Cukup jaminkan BPKB mobil atau motor kamu, dan dana langsung cair.</p>
                    <div class="md:mt-7 mt-5 animate animate_top" style="--i: 3">
                        <a href="https://wa.me/6282325333445?text=Halo%20MUF%20Dana%2C%20saya%20ingin%20mengajukan%20pinjaman%20dengan%20jaminan%20BPKB.%0ANama%3A%20%0AAlamat%3A%20%0ANominal%20Pinjaman%3A%20%0AJenis%20Kendaraan%3A%20%0ATahun%20Kendaraan%3A%20" class="button-main bg-white">Pinjam Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
