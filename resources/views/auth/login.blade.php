@extends('layouts.front.app')
@section('title', 'Login')
@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="breadcrumb_inner relative sm:mt-20 mt-16 lg:py-20 py-14">
            <div class="breadcrumb_bg absolute top-0 left-0 w-full h-full">
                <img src="{{ asset('assets/images/components/breadcrumb_candidate.webp')}}" alt="breadcrumb_candidate" class="w-full h-full object-cover" />
            </div>
            <div class="container relative h-full">
                <div class="breadcrumb_content flex flex-col items-start justify-center xl:w-[1000px] lg:w-[848px] md:w-5/6 w-full h-full">
                    <div class="list_breadcrumb flex items-center gap-2 animate animate_top" style="--i: 1">
                        <a href="{{ url('/') }}" class="caption1 text-white">Home</a>
                        <span class="caption1 text-white opacity-40">/</span>
                        <span class="caption1 text-white opacity-60">Login</span>
                    </div>
                    <h3 class="heading3 text-white mt-2 animate animate_top" style="--i: 2">Login</h3>
                </div>
            </div>
        </div>
    </section>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Form Login -->
    <section class="form_login lg:py-20 sm:py-14 py-10">
        <div class="container flex items-center justify-center">
            <div class="content sm:w-[448px] w-full">
                <h3 class="heading3 text-center">Log In</h3>
                <form class="form mt-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address*</label>
                        <input id="email" type="email" name="email" class="form-control w-full mt-3 border border-line px-4 h-[50px] rounded-lg" placeholder="Email address*" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                    <div class="form-group mt-6">
                        <label for="password">Password*</label>
                        <input id="password" type="password" name="password" class="form-control w-full mt-3 border border-line px-4 h-[50px] rounded-lg" placeholder="Password*" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="sub-input-checkbox flex items-center gap-2">
                            <input id="checkbox" type="checkbox" name="checkbox" />
                            <label for="checkbox" class="text-surface1">Remember me</label>
                        </div>
                        <a class="text-primary hover:underline" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <div class="block-button mt-6">
                        <button class="button-main bg-primary w-full text-center">Login</button>
                    </div>
                    <div class="navigate flex items-center justify-center gap-2 mt-6">
                        <span class="text-surface1">Not registered yet?</span>
                        <a class="text-button hover:underline" href="{{ route('register') }}">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
