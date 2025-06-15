@extends('layouts.front.app')
@section('title', 'FAQ Mufdana – Proses Gadai BPKB, Syarat, & Ketentuan')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="breadcrumb_inner sm:pt-20 pt-16">
            <div class="content relative w-full h-full">
                <div class="breadcrumb_bg absolute top-0 left-0 w-full h-full">
                    <img src="{{ asset('assets/images/components/breadcrumb_candidate.webp')}}" alt="breadcrumb_candidate" class="w-full h-full object-cover" />
                </div>
                <div class="container relative h-full lg:py-20 sm:py-14 py-10">
                    <div class="breadcrumb_content flex flex-col items-start justify-center xl:w-[1000px] lg:w-[848px] md:w-5/6 w-full h-full">
                        <div class="list_breadcrumb flex items-center gap-2 animate animate_top" style="--i: 1">
                            <a href="{{ url('/') }}" class="caption1 text-white">Home</a>
                            <span class="caption1 text-white opacity-40">/</span>
                            <span class="caption1 text-white opacity-60">Pertanyaan</span>
                        </div>
                        <h3 class="heading3 text-white mt-2 animate animate_top" style="--i: 2">Pertanyaan</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faqs lg:py-20 sm:py-14 py-10">
        <div class="container flex max-lg:flex-col justify-between gap-15 gap-y-10">
            <div class="content w-full">
                <div class="faqs_section">
                    <h4 class="heading4">Pertanyaan yang sering diajukan</h4>
                    <div class="list_faqs flex flex-col w-full mt-5">
                        @forelse($faqs as $index => $faq)
                            <div class="faq_item py-5 border-b border-line cursor-pointer {{ $index == 0 ? 'active' : '' }}">
                                <div class="heading flex items-center justify-between gap-2">
                                    <strong class="title text-title">{{ $faq->question }}</strong>
                                    <span class="icon_arrow ph-bold ph-caret-down text-2xl duration-[400ms]"></span>
                                </div>
                                <div class="answer mt-3" @if($index == 0) style="display: block" @endif >
                                    <p class="body2 text-secondary">{!! $faq->answer !!}</p>
                                </div>
                            </div>
                        @empty
                            <div class="faq_item py-5 border-b border-line cursor-pointer">
                                <div class="heading flex items-center justify-between gap-2">
                                    <strong class="title text-title">Belum ada pertanyaan</strong>
                                </div>
                            </div>

                        @endforelse
                    </div>
                </div>
            </div>
            <div class="form_area lg:sticky lg:top-24 flex-shrink-0 lg:w-[380px] w-full h-fit p-6 rounded-xl bg-white shadow-lg duration-300">
                <h4 class="heading4">Ajukan Pertanyaan Anda</h4>
                <p class="text-secondary mt-2">Tanya Apa Saja, Kami Siap Membantu</p>
                <form class="form flex flex-col gap-5 mt-4">
                    <div class="name">
                        <label for="username">Nama</label>
                        <input class="w-full mt-2 px-4 py-3 border-line rounded-lg" id="username" type="text" placeholder="Your Name" required />
                    </div>
                    <div class="mail">
                        <label for="email">Email</label>
                        <input class="w-full mt-2 px-4 py-3 border-line rounded-lg" id="email" type="email" placeholder="Your Email" required />
                    </div>
                    <div class="message">
                        <label for="message">Pertanyaan</label>
                        <textarea class="border w-full mt-2 px-4 py-3 border-line rounded-lg" id="message" name="message" rows="3" placeholder="Message content..." required></textarea>
                    </div>
                    <button class="button-main w-full text-center mt-1" onclick="alert('Fitur sedang dalam pengembangan')">Kirim Pertanyaan</button>
                </form>
            </div>
        </div>
    </section>
@endsection
