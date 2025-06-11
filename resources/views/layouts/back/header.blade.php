<header id="header" class="header -style-white relative">
    <div class="header_inner absolute flex items-center justify-between top-0 left-0 right-0 z-[1] w-full sm:h-20 h-16 min-[1600px]:px-15 lg:px-9 px-4 border-b border-line">
        <div class="left flex items-center gap-15 h-full max-[1600px]:gap-6">
            <h1>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo-white.png') }}" alt="logo-white" class="logo-white md:h-[42px] h-8 w-auto" />
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo-black md:h-[42px] h-8 w-auto hidden" />
                </a>
            </h1>
        </div>
        <div class="list_action flex items-center gap-5">
            <div class="help_block max-sm:hidden">
                <a href="javascript:void(0)" class="block">
                    <span class="ph ph-question text-white text-2xl block"></span>
                </a>
            </div>
            <div class="notification_block relative max-sm:hidden">
                <button class="relative block">
                    <span class="ph ph-bell text-white text-2xl block"></span>
                    <span class="absolute -top-0.5 right-0.5 w-2 h-2 bg-primary rounded-full"></span>
                </button>
                <div class="notification_submenu absolute w-[400px] p-5 top-[3.25rem] -left-9 bg-white rounded-xl">
                    <h6 class="heading6 pb-3">Notifications</h6>
                    <ul class="list_notification w-full">
                        <li class="notification_item w-full py-3 border-t border-line duration-300 hover:bg-background">
                            <a href="#!" class="flex gap-3 w-full">
                                        <span class="ic_noti flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface">
                                            <span class="ph-fill ph-bell text-lg text-secondary"></span>
                                        </span>
                                <div class="notification_detail">
                                    <p class="notification_desc text-secondary">The application is rejected on your job <span class="text-black">UI Designer</span> by <span class="text-black">Employer</span>.</p>
                                    <span class="notification_time caption2 text-placehover">25 mins ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="notification_item w-full py-3 border-t border-line duration-300 hover:bg-background">
                            <a href="#!" class="flex gap-3 w-full">
                                        <span class="ic_noti flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface">
                                            <span class="ph-fill ph-bell text-lg text-secondary"></span>
                                        </span>
                                <div class="notification_detail">
                                    <p class="notification_desc text-secondary">The application is rejected on your job <span class="text-black">Internet Security</span> by <span class="text-black">Employer</span>.</p>
                                    <span class="notification_time caption2 text-placehover">1 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="notification_item w-full py-3 border-t border-line duration-300 hover:bg-background">
                            <a href="#!" class="flex gap-3 w-full">
                                        <span class="ic_noti flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface">
                                            <span class="ph-fill ph-bell text-lg text-secondary"></span>
                                        </span>
                                <div class="notification_detail">
                                    <p class="notification_desc text-secondary">The application is rejected on your job <span class="text-black">Social Media Marketing</span> by <span class="text-black">Employer</span>.</p>
                                    <span class="notification_time caption2 text-placehover">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="notification_item w-full py-3 border-t border-line duration-300 hover:bg-background">
                            <a href="#!" class="flex gap-3 w-full">
                                        <span class="ic_noti flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface">
                                            <span class="ph-fill ph-bell text-lg text-secondary"></span>
                                        </span>
                                <div class="notification_detail">
                                    <p class="notification_desc text-secondary">The application is rejected on your job <span class="text-black">Social Media Marketing</span> by <span class="text-black">Employer</span>.</p>
                                    <span class="notification_time caption2 text-placehover">12 hours ago</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user_block relative max-sm:hidden">
                <button class="user_infor flex items-center gap-2 text-white">
                    <img src="{{ asset('assets/images/avatar/avatar1.png') }}" alt="IMG-7" class="user_avatar flex-shrink-0 w-9 h-9 rounded-full" />
                    <strong class="user_name text-title">{{ Auth::user()->name }}</strong>
                    <span class="ph ph-caret-down"></span>
                </button>
                <ul class="list_action_user absolute w-[240px] p-3 top-14 right-0 bg-white rounded-lg">
                    <li class="action_item">
                        <a href="javascript:void(0)" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph ph-user-circle text-2xl text-secondary"></span>
                            <strong class="text-title">My Profile</strong>
                        </a>
                    </li>
                    <li class="action_item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                                <span class="ph ph-sign-out text-2xl text-secondary"></span>
                                <strong class="text-title">Log Out</strong>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            <button class="humburger_btn min-[1400px]:hidden">
                <span class="ph-bold ph-list text-white text-2xl block"></span>
            </button>
        </div>
    </div>
</header>
