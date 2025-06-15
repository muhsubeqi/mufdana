@extends('layouts.front.app')
@section('title', 'Gadai BPKB Mobil Motor Aman & Cepat | Mufdana')
@section('content')
    <!-- Slider -->
    <section id="home" class="slider">
        <div class="slider_inner relative md:h-[700px] sm:h-[500px] h-[600px] bg-[#F1F6F2]">
            <div class="container relative h-full">
                <div class="slider_bg flex items-center justify-end absolute top-0 left-0 w-full h-full sm:pt-20 pt-16">
                    <div class="slider_bg_inner absolute xl:right-0 md:w-[530px] sm:w-2/3 w-5/6 animate animate_left"
                         style="--i: 3">
                        <img src="{{ asset('assets/images/slider/slider4_bg.png')}}" alt="slider4_bg"
                             class="w-full h-full object-cover max-lg:opacity-80 max-md:hidden"/>
                        <div
                            class="flag_top flex items-center gap-3 absolute md:top-32 top-[16%] xl:-left-28 lg:-left-10 -left-2 py-2 px-3 bg-white rounded-lg shadow-xl max-lg:hidden">
                            <div class="flex items-center">
                                <div class="relative sm:w-[44px] w-10 sm:h-[44px] h-10 rounded-full overflow-hidden z-[3]">
                                    <img class="full h-full rounded-full" src="{{ asset('assets/images/avatar/avatar1.png') }}"
                                         alt="avatar1"/>
                                </div>
                                <div
                                    class="relative sm:w-[44px] w-10 sm:h-[44px] h-10 rounded-full overflow-hidden z-[2] -ml-5">
                                    <img class="full h-full rounded-full" src="{{ asset('assets/images/avatar/avatar2.png') }}"
                                         alt="avatar2"/>
                                </div>
                                <div
                                    class="relative sm:w-[44px] w-10 sm:h-[44px] h-10 rounded-full overflow-hidden z-[1] -ml-5">
                                    <img class="full h-full rounded-full" src="{{ asset('assets/images/avatar/avatar3.png') }}"
                                         alt="avatar3"/>
                                </div>
                                <div class="relative sm:w-[44px] w-10 sm:h-[44px] h-10 rounded-full overflow-hidden -ml-5">
                                    <img class="full h-full rounded-full" src="{{ asset('assets/images/avatar/avatar4.png') }}"
                                         alt="avatar4"/>
                                </div>
                            </div>
                            <div class="flag_info">
                                <h6 class="heading6">99+</h6>
                                <span class="caption1">Nasabah Bahagia</span>
                            </div>
                        </div>
                        <div
                            class="flag_bottom absolute sm:bottom-12 bottom-16 2xl:-right-24 right-0 p-4 bg-white rounded-xl shadow-xl max-lg:hidden">
                            <div class="flag_info pl-3 border-l-2 border-primary">
                                <h6 class="heading6">100%</h6>
                                <span class="caption1">Jaminan Keamanan</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="slider_content flex flex-col items-start justify-center sm:pt-20 pt-16 md:w-[704px] w-full h-full">
                    <h2 class="heading1 animate animate_top" style="--i: 1">Gadai BPKB Aman & Proses Cepat, Uang Cair Tanpa Ribet</h2>
                    <p class="body2 mt-5 animate animate_top" style="--i: 2">Ajukan Sekarang , Nikmati Proses Mudah, Bunga Ringan, dan Cashback Menarik!</p>
                    <div class="form_search w-full md:mt-10 mt-7 animate animate_top" style="--i: 3">
                        <a href="https://wa.me/6282325333445?text=Halo%20MUF%20Dana%2C%20saya%20ingin%20mengajukan%20pinjaman%20dengan%20jaminan%20BPKB.%0ANama%3A%20%0AAlamat%3A%20%0ANominal%20Pinjaman%3A%20%0AJenis%20Kendaraan%3A%20%0ATahun%20Kendaraan%3A%20"
                           class="button-main text-center flex-shrink-0">Ajukan Sekarang <span class="ph-bold ph-arrow-right ml-2"></span></a>
                    </div>
                    <div class="list_tags flex flex-wrap items-center gap-3 mt-5 animate animate_top" style="--i: 4">
                        <a href="https://wa.me/6282325333445?text=Halo%20MUF%20Dana%2C%20saya%20ingin%20mengajukan%20pinjaman%20dengan%20jaminan%20BPKB.%0ANama%3A%20%0AAlamat%3A%20%0ANominal%20Pinjaman%3A%20%0AJenis%20Kendaraan%3A%20%0ATahun%20Kendaraan%3A%20"
                           class="tag -small text-button-sm text-black border border-line hover:bg-primary hover:text-white">WhatsApp</a>
                        <a href="https://www.facebook.com/people/Gadai-BPKB-Mandiri-Utama-Finance/61576945419346/"
                           class="tag -small text-button-sm text-black border border-line hover:bg-primary hover:text-white">Facebook</a>
                        <a href="tel:+6282325333445"
                           class="tag -small text-button-sm text-black border border-line hover:bg-primary hover:text-white">Telepon</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Categories -->
    <section id="produk" class="top_categories lg:py-20 sm:py-14 py-10">
        <div class="container">
            <div class="heading flex items-end justify-between flex-wrap gap-4">
                <div class="left animate animate_top" style="--i: 1">
                    <h3 class="heading3">Produk yang kami
                        tawarkan</h3>
                    <p class="body2 text-secondary mt-3">Temukan produk pinjaman yang sesuai dengan kebutuhan Anda</p>
                </div>
            </div>
            <ul class="list grid xl:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-7.5 md:mt-10 mt-7">
                <li class="category_item h-full animate animate_top" style="--i: 1">
                    <a href="javascript:void(0)"
                       class="category_inner block h-full p-10 rounded-20 bg-white shadow-md duration-300 hover:shadow-xl">
                        <div class="flex items-center gap-3">
                            <span class="icon-programming flex-shrink-0 text-4xl"></span>
                            <h5 class="heading5 duration-300 hover:text-primary">Pembiayaan Berjaminan BPKB Mobil</h5>
                        </div>
                        <p class="desc mt-3 text-secondary">Dapatkan pinjaman dengan jaminan kendaraan, proses mudah dan bonus cashback.</p>
                    </a>
                </li>
                <li class="category_item h-full animate animate_top" style="--i: 2">
                    <a href="javascript:void(0)"
                       class="category_inner block h-full p-10 rounded-20 bg-white shadow-md duration-300 hover:shadow-xl">
                        <div class="flex items-center gap-3">
                            <span class="icon-applicant flex-shrink-0 text-4xl"></span>
                            <h5 class="heading5 duration-300 hover:text-primary">Pembiayaan Berjaminan BPKB Motor</h5>
                        </div>
                        <p class="desc mt-3 text-secondary">Dapatkan pinjaman dengan jaminan kendaraan, proses mudah, cepat dan tenor maksimal hingga 24Bulan.</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- How it work -->
    <section id="langkah" class="process lg:py-20 sm:py-14 py-10 bg-[#FAF7F1]">
        <div class="container">
            <h3 class="heading3 text-center animate animate_top" style="--i: 1">Langkah-langkah <br> Mudah Pengajuan Pinjaman</h3>
            <p class="body2 text-secondary text-center mt-3 animate animate_top" style="--i: 2">Pengajuan pinjaman mudah dan cepat</p>
            <ul class="list grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-7.5 md:mt-10 mt-7">
                <li class="item animate animate_top" style="--i: 1">
                    <span class="icon-job text-4xl"></span>
                    <h6 class="heading6 mt-4">1. Isi Form Online</h6>
                    <p class="mt-1">Siapkan data jaminan aset dan data diri Anda</p>
                </li>
                <li class="item animate animate_top" style="--i: 2">
                    <span class="icon-applicant text-4xl"></span>
                    <h6 class="heading6 mt-4">2. Kami akan menghubungimu</h6>
                    <p class="mt-1">Anda akan dihubungi Call Center kami untuk konsultasi pinjaman dan tenor.</p>
                </li>
                <li class="item animate animate_top" style="--i: 3">
                    <span class="icon-choose text-4xl"></span>
                    <h6 class="heading6 mt-4">3. Survei dan Validasi Aset</h6>
                    <p class="mt-1">Kami akan lakukan survei dan cek aset untuk proses selanjutnya.</p>
                </li>
                <li class="item animate animate_top" style="--i: 4">
                    <span class="icon-manage text-4xl"></span>
                    <h6 class="heading6 mt-4">4. Pencairan Dana</h6>
                    <p class="mt-1">Setelah survei dan disetujui, dana akan segera cair ke rekening Anda</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- Benefit -->
    <section id="tentang" class="benefit lg:py-20 sm:py-14 py-10">
        <div class="container">
            <div class="benefit_inner flex max-lg:flex-col-reverse items-center justify-between gap-y-8">
                <div class="benefit_content xl:w-[570px] lg:w-5/12 w-full">
                    <h3 class="heading3 animate animate_top" style="--i: 1">Mengapa MufDana?</h3>
                    <p class="body2 mt-3 animate animate_top" style="--i: 2">Solusi PinjamanDana Cepat, Terpercaya dan Tanpa Ribet</p>
                    <ul class="list_benefit flex flex-col gap-6 mt-8">
                        <li class="benefit_item flex gap-4 animate animate_top" style="--i: 3">
                            <span class="ph ph-wallet flex-shrink-0 text-4xl text-primary"></span>
                            <div class="benefit_info">
                                <h6 class="title heading6">Kecepatan dan Kemudahan</h6>
                                <p class="desc mt-1">Proses aplikasi cenderung cepat dan bisa dilakukan secara online, mengurangi kerumitan dibandingkan pengajuan pinjaman konvensional.</p>
                            </div>
                        </li>
                        <li class="benefit_item flex gap-4 animate animate_top" style="--i: 4">
                            <span class="ph ph-certificate flex-shrink-0 text-4xl text-primary"></span>
                            <div class="benefit_info">
                                <h6 class="title heading6">Terpercaya</h6>
                                <p class="desc mt-1">Sebagai bagian dari grup Bank Mandiri, MufDana memiliki kredibilitas dan reputasi yang baik, memberikan rasa aman bagi peminjam.</p>
                            </div>
                        </li>
                        <li class="benefit_item flex gap-4 animate animate_top" style="--i: 5">
                            <span class="ph ph-phone-call flex-shrink-0 text-4xl text-primary"></span>
                            <div class="benefit_info">
                                <h6 class="title heading6">Pinjaman Online Terdaftar OJK </h6>
                                <p class="desc mt-1">Solusi pinjaman online dari platform yang sudah terdaftar dan diawasi oleh OJK adalah pilihan terbaik untuk kecepatan dan kepercayaan</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="benefit_bg relative lg:w-5/12 sm:w-[45%] w-[85%] lg:pl-3 lg:pr-15">
                    <img src="{{ asset('assets/images/components/benefit1.webp')}}" alt="benefit1" class="w-full rounded-20"/>
                    <div
                        class="flag_benefit flex items-center gap-3 absolute sm:top-44 top-36 lg:right-0 -right-8 p-3 bg-white rounded-xl shadow-xl animate animate_left"
                        style="--i: 1">
                        <span class="ph ph-lightning sm:text-4xl text-3xl text-primary flex-shrink-0"></span>
                        <div class="flag_info">
                            <h6 class="heading6">24 / 7</h6>
                            <span class="caption1">Bantuan 24 Jam</span>
                        </div>
                    </div>
                    <div
                        class="flag_benefit flex items-center gap-3 absolute bottom-15 sm:-left-28 -left-7 p-3 bg-white rounded-xl shadow-xl animate animate_right"
                        style="--i: 2">
                        <div class="flag_info pl-[14px] border-l-2 border-primary">
                            <h6 class="heading6">100%</h6>
                            <span class="caption1">Keamanan Terjamin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner lg:pb-20 sm:pb-14 pb-10">
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
@endsection
