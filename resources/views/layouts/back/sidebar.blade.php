<div
    class="menu_dashboard overflow-hidden flex-shrink-0 min-[320px]:w-[280px] w-[80vw] h-full bg-white relative z-[2] max-lg:hidden">
    <div class="inner scrollbar_custom max-h-full py-6 px-3">
        <div class="area">
            <span class="px-6 text-xs font-semibold text-secondary uppercase">Overviews</span>
            <ul class="list_link flex flex-col gap-2 mt-2">
                <li>
                    <a href="{{ route('dashboard.index') }}" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background
                    {{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                        <span class="ph-duotone ph-squares-four text-2xl text-secondary"></span>
                        <strong class="text-title">Dashboard</strong>
                    </a>
                </li>
                <li>
                    <a href="{{ route('brand.index') }}" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background
                    {{ request()->routeIs('brand.index') ? 'active' : '' }}">
                        <span class="ph-duotone ph-chats text-2xl text-secondary"></span>
                        <strong class="text-title">Brands</strong>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.index') }}" class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background
                    {{ request()->routeIs('pages.index') ? 'active' : '' }}">
                        <span class="ph-duotone ph-chats text-2xl text-secondary"></span>
                        <strong class="text-title">Pages</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-bookmarks.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-bookmarks-simple text-2xl text-secondary"></span>
                        <strong class="text-title">Events</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-meetings.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-chalkboard-teacher text-2xl text-secondary"></span>
                        <strong class="text-title">Blogs</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div class="area mt-6">
            <span class="px-6 text-xs font-semibold text-secondary uppercase">Management</span>
            <ul class="list_link flex flex-col gap-2 mt-2">
                <li>
                    <a href="{{ route('faq.index') }}" {{ request()->routeIs('faq.index') ? 'active' : '' }}
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-notepad text-2xl text-secondary"></span>
                        <strong class="text-title">Faq</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-jobs.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-briefcase text-2xl text-secondary"></span>
                        <strong class="text-title">Users</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div class="area mt-6">
            <span class="px-6 text-xs font-semibold text-secondary uppercase">User</span>
            <ul class="list_link flex flex-col gap-2 mt-2">
                <li>
                    <a href="employers-profile.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-user-circle text-2xl text-secondary"></span>
                        <strong class="text-title">My Profile</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-profile-setting.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-read-cv-logo text-2xl text-secondary"></span>
                        <strong class="text-title">Profile Setting</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-change-passwords.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-lock-key-open text-2xl text-secondary"></span>
                        <strong class="text-title">Change Passwords</strong>
                    </a>
                </li>
                <li>
                    <a href="employers-delete-profile.html"
                       class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                        <span class="ph-duotone ph-trash text-2xl text-secondary"></span>
                        <strong class="text-title">Delete Profile</strong>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();"
                           class="link flex items-center gap-3 w-full py-3 px-6 rounded-lg duration-300 hover:bg-background">
                            <span class="ph-duotone ph-sign-out text-2xl text-secondary"></span>
                            <strong class="text-title">Log Out</strong>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
