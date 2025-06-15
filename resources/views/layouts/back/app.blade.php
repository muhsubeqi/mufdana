
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mufdana - Gadai BPKB Aman & Proses Cepat, Uang Cair Tanpa Ribet" />
    <title>@yield('title') - Mufdana</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/apexcharts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/output-tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/output-scss.css') }}" />
    @stack('style')
</head>

<body class="lg:overflow-hidden">
<!-- Header -->
@include('layouts.back.header')

<div class="dashboard_main overflow-hidden lg:w-screen lg:h-screen flex sm:pt-20 pt-16">
    @include('layouts.back.sidebar')
    <div class="content_dashboard scrollbar_custom max-h-full w-full h-fit bg-surface">
        @yield('content')
        <div class="flex items-center justify-center w-full h-15 bg-white duration-300 shadow-md">
            <span class="copyright caption1 text-secondary">©2024 FreelanHub. All Rights Reserved</span>
        </div>
    </div>
</div>

<!-- Menu mobile -->
@include('layouts.back.mobile-menu')

<!-- Modal -->
<div class="modal">
    <!-- menu_dashboard -->
    <div class="modal_item menu_dashboard -modal overflow-hidden relative flex-shrink-0 min-[320px]:w-[280px] w-[80vw] h-full bg-white" data-type="menu_dashboard">
        <div class="inner scrollbar_custom max-h-full py-6 px-3">
            <div class="area">
                <span class="px-6 text-xs font-semibold text-secondary uppercase">Overviews</span>
                <ul class="list_link flex flex-col gap-2 mt-2">
                    <li>
                        <a href="#!" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background active">
                            <span class="ph-duotone ph-squares-four text-2xl text-secondary"></span>
                            <strong class="text-title">Dashboard</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-messages.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-chats text-2xl text-secondary"></span>
                            <strong class="text-title">Messages</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-bookmarks.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-bookmarks-simple text-2xl text-secondary"></span>
                            <strong class="text-title">My Bookmarks</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-meetings.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-chalkboard-teacher text-2xl text-secondary"></span>
                            <strong class="text-title">Video Meetings</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-alerts-candidate.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-bell text-2xl text-secondary"></span>
                            <strong class="text-title">Alerts Candidate</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-billings.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-hand-coins text-2xl text-secondary"></span>
                            <strong class="text-title">Billings</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-payouts.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-credit-card text-2xl text-secondary"></span>
                            <strong class="text-title">Payouts</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="area mt-6">
                <span class="px-6 text-xs font-semibold text-secondary uppercase">Management</span>
                <ul class="list_link flex flex-col gap-2 mt-2">
                    <li>
                        <a href="employers-applicants-jobs.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-notepad text-2xl text-secondary"></span>
                            <strong class="text-title">Applicants Jobs</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-jobs.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-briefcase text-2xl text-secondary"></span>
                            <strong class="text-title">My Jobs</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-choose-job-package.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-file-arrow-up text-2xl text-secondary"></span>
                            <strong class="text-title">Submit Jobs</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-proposals-projects.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-gavel text-2xl text-secondary"></span>
                            <strong class="text-title">Proposals Projects</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-my-projects.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-newspaper-clipping text-2xl text-secondary"></span>
                            <strong class="text-title">My Projects</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-choose-project-package.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-clock-countdown text-2xl text-secondary"></span>
                            <strong class="text-title">Submit Projects</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-bought-services.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-stack text-2xl text-secondary"></span>
                            <strong class="text-title">Bought Services</strong>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="area mt-6">
                <span class="px-6 text-xs font-semibold text-secondary uppercase">User</span>
                <ul class="list_link flex flex-col gap-2 mt-2">
                    <li>
                        <a href="employers-profile.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-user-circle text-2xl text-secondary"></span>
                            <strong class="text-title">My Profile</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-profile-setting.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-read-cv-logo text-2xl text-secondary"></span>
                            <strong class="text-title">Profile Setting</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-my-packages.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-currency-circle-dollar text-2xl text-secondary"></span>
                            <strong class="text-title">My Packages</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-change-passwords.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-lock-key-open text-2xl text-secondary"></span>
                            <strong class="text-title">Change Passwords</strong>
                        </a>
                    </li>
                    <li>
                        <a href="employers-delete-profile.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-trash text-2xl text-secondary"></span>
                            <strong class="text-title">Delete Profile</strong>
                        </a>
                    </li>
                    <li>
                        <a href="login.html" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-sign-out text-2xl text-secondary"></span>
                            <strong class="text-title">Log Out</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- modal_create_meeting -->
    <div class="modal_item modal_create_meeting relative flex-shrink-0 sm:w-[600px] w-[90vw] rounded-lg bg-white" data-type="modal_create_meeting">
        <div class="heading flex items-center justify-between py-6 px-7 border-b border-line">
            <h5 class="heading5">Create Meeting</h5>
            <button class="close_popup_btn">
                <span class="ph ph-x text-2xl"></span>
            </button>
        </div>
        <form class="form grid sm:grid-cols-2 gap-5 md:p-7.5 p-6">
            <div class="date col-span-full">
                <label for="date">Date <span class="text-red">*</span></label>
                <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="date" type="date" required />
            </div>
            <div class="time">
                <label>Time <span class="text-red">*</span></label>
                <div class="select_block flex items-center w-full h-12 pr-10 pl-4 mt-2 border border-line rounded-lg">
                    <div class="select">
                        <span class="selected capitalize" data-title="10:00 AM">10:00 AM</span>
                        <ul class="list_option scrollbar_custom w-full max-h-[200px] bg-white">
                            <li class="capitalize" data-item="8:00 AM">8:00 AM</li>
                            <li class="capitalize" data-item="8:30 AM">8:30 AM</li>
                            <li class="capitalize" data-item="9:00 AM">9:00 AM</li>
                            <li class="capitalize" data-item="9:30 AM">9:30 AM</li>
                            <li class="capitalize" data-item="10:00 AM">10:00 AM</li>
                            <li class="capitalize" data-item="10:30 AM">10:30 AM</li>
                            <li class="capitalize" data-item="11:00 AM">11:00 AM</li>
                            <li class="capitalize" data-item="11:30 AM">11:30 AM</li>
                            <li class="capitalize" data-item="1:00 PM">1:00 PM</li>
                            <li class="capitalize" data-item="1:30 PM">1:30 PM</li>
                            <li class="capitalize" data-item="2:00 PM">2:00 PM</li>
                            <li class="capitalize" data-item="2:30 PM">2:30 PM</li>
                            <li class="capitalize" data-item="3:00 PM">3:00 PM</li>
                            <li class="capitalize" data-item="3:30 PM">3:30 PM</li>
                            <li class="capitalize" data-item="4:00 PM">4:00 PM</li>
                            <li class="capitalize" data-item="4:30 PM">4:30 PM</li>
                        </ul>
                    </div>
                    <span class="icon_down ph ph-caret-down right-3"></span>
                </div>
            </div>
            <div class="duration">
                <label for="duration">Duration <span class="text-red">*</span></label>
                <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="duration" type="text" placeholder="Duration" required />
            </div>
            <div class="col-span-full message">
                <label for="message">Message <span class="text-red">*</span></label>
                <textarea class="border w-full px-4 py-3 mt-2 border-line rounded-lg" id="message" name="message" rows="4" placeholder="Message" required></textarea>
            </div>
            <div class="flex items-center justify-end col-span-full gap-5 sm:mt-2">
                <button class="button-main bg-primary" type="submit">Re-schedule Meeting</button>
                <button class="button-main -border close_popup_btn" type="button">Cancel</button>
            </div>
        </form>
    </div>

    <!-- modal_delete -->
    <div class="modal_item modal_delete relative flex-shrink-0 sm:w-[600px] w-[90vw] rounded-lg bg-white" data-type="modal_delete">
        <div class="heading flex items-center justify-between py-6 px-7 border-b border-line">
            <h5 class="heading5">Delete</h5>
            <button class="close_popup_btn">
                <span class="ph ph-x text-2xl"></span>
            </button>
        </div>
        <div class="flex flex-col items-center py-7 md:px-10 px-6">
            <h5 class="heading5 text-center">Are you sure you want to delete?</h5>
            <p class="mt-3 text-secondary text-center">Do you really want to delete your these record? <br class="max-sm:hidden" />This process can't be undo.</p>
            <div class="flex items-center gap-5 mt-6">
                <button class="button-main bg-red btn_confirm_delete">Confirm</button>
                <button class="button-main -border close_popup_btn">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
