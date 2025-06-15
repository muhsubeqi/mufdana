@extends('layouts.front.app')
@section('title', 'Hubungi Kami | Konsultasi Gadai BPKB Aman di Mufdana')
@section('content')
    <!-- map -->
    <section class="map mt-32">
        <div class="map_inner lg:h-[580px] h-[480px] sm:pt-20 pt-16">
            <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.817335977884!2d112.57461479999999!3d-8.120072799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789fa87d0dedf1%3A0x3a4e1994fe6bfdb9!2sPT%20Mandiri%20Utama%20Finance%20Kepanjen!5e0!3m2!1sen!2sid!4v1749382361881!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="contact lg:py-20 sm:py-14 py-10">
        <div class="container flex max-lg:flex-col lg:items-center justify-between gap-y-10">
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
            <div class="form_area flex-shrink-0 xl:w-[520px] lg:w-1/2 p-9 rounded-xl bg-white shadow-lg duration-300">
                <form class="form flex flex-col gap-5" action="https://formspree.io/f/xdkzgknl" method="POST">
                    <div class="name">
                        <label for="username">Nama</label>
                        <input class="w-full mt-2 px-4 py-3 border-line rounded-lg" id="username" type="text" placeholder="Your Name" />
                    </div>
                    <div class="mail">
                        <label for="email">Email</label>
                        <input class="w-full mt-2 px-4 py-3 border-line rounded-lg" id="email" type="email" placeholder="Your Email" required />
                    </div>
                    <div class="message">
                        <label for="message">Pesan</label>
                        <textarea class="border w-full mt-2 px-4 py-3 border-line rounded-lg" id="message" name="message" rows="3" placeholder="Message content..." required></textarea>
                    </div>
                    <button type="submit" class="button-main w-full text-center mt-1">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
