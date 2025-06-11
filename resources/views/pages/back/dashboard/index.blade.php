@extends('layouts.back.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container h-full lg:py-15 sm:py-12 py-8">
        <button class="btn_open_popup btn_menu_dashboard flex items-center gap-2 lg:hidden" data-type="menu_dashboard">
            <span class="ph ph-squares-four text-xl"></span>
            <strong class="text-button">Menu</strong>
        </button>
        <h4 class="heading4 max-lg:mt-3">Dashboard</h4>
        <ul class="list_counter grid 2xl:grid-cols-4 grid-cols-2 sm:gap-7.5 gap-5 mt-7.5 w-full">
            <li class="counter_item applied_job flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Posted Jobs</span>
                    <h4 class="number heading4 mt-1">80</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-briefcase sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item services_offered flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Posted Projects</span>
                    <h4 class="number heading4 mt-1">192</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-notepad sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item views_profile flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Application</span>
                    <h4 class="number heading4 mt-1">1280</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-eye sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item total_reviews flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Total Reviews</span>
                    <h4 class="number heading4 mt-1">4214</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-thumbs-up sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
        </ul>
        <div class="chart_overview flex max-xl:flex-col gap-7.5 mt-7.5">
            <div class="w-full h-full rounded-lg bg-white">
                <div class="flex flex-wrap justify-between gap-6 p-6">
                    <h5 class="heading5">Page Views</h5>
                    <div class="menu_time flex flex-wrap gap-7.5">
                        <button id="one_week" class="button_time line-before line-black line-2px text-button text-secondary">Week</button>
                        <button id="one_month" class="button_time line-before line-black line-2px text-button text-secondary">Month</button>
                        <button id="one_year" class="button_time line-before line-black line-2px text-button text-secondary active">Year</button>
                    </div>
                </div>
                <div class="chart md:px-6 pb-6">
                    <div id="chart-timeline"></div>
                </div>
            </div>
            <div class="notification overflow-hidden flex-shrink-0 flex-grow xl:w-[300px] h-full rounded-lg bg-white py-6">
                <h5 class="heading5 px-6">Notifications</h5>
                <ul class="list_notification scrollbar_custom max-h-[420px] flex flex-col gap-2.5 px-6 mt-5">
                    <li class="item flex gap-2">
                                    <span class="icon flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface text-secondary">
                                        <span class="ph-fill ph-bell text-lg"></span>
                                    </span>
                        <div class="content flex flex-col gap-2">
                            <p class="title text-secondary"><a href="candidates-detail1.html" class="text-black hover:underline">John Smith</a> applied for a job <a href="jobs-detail1.html" class="text-black hover:underline">UX/UI Design</a></p>
                            <span class="date caption1 text-secondary">25 mins ago</span>
                        </div>
                    </li>
                    <li class="item flex gap-2">
                                    <span class="icon flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface text-secondary">
                                        <span class="ph-fill ph-bell text-lg"></span>
                                    </span>
                        <div class="content flex flex-col gap-2">
                            <p class="title text-secondary"><a href="candidates-detail1.html" class="text-black hover:underline">John Hawkins</a> applied for a job <a href="jobs-detail1.html" class="text-black hover:underline">Project Manager</a></p>
                            <span class="date caption1 text-secondary">25 mins ago</span>
                        </div>
                    </li>
                    <li class="item flex gap-2">
                                    <span class="icon flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface text-secondary">
                                        <span class="ph-fill ph-bell text-lg"></span>
                                    </span>
                        <div class="content flex flex-col gap-2">
                            <p class="title text-secondary"><a href="candidates-detail1.html" class="text-black hover:underline">Dianne Russell</a> applied for a job <a href="jobs-detail1.html" class="text-black hover:underline">Web Developement</a></p>
                            <span class="date caption1 text-secondary">25 mins ago</span>
                        </div>
                    </li>
                    <li class="item flex gap-2">
                                    <span class="icon flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface text-secondary">
                                        <span class="ph-fill ph-bell text-lg"></span>
                                    </span>
                        <div class="content flex flex-col gap-2">
                            <p class="title text-secondary"><a href="candidates-detail1.html" class="text-black hover:underline">Arlene McCoy</a> applied for a job <a href="jobs-detail1.html" class="text-black hover:underline">UX/UI Design</a></p>
                            <span class="date caption1 text-secondary">25 mins ago</span>
                        </div>
                    </li>
                    <li class="item flex gap-2">
                                    <span class="icon flex flex-shrink-0 items-center justify-center w-8 h-8 rounded-full bg-surface text-secondary">
                                        <span class="ph-fill ph-bell text-lg"></span>
                                    </span>
                        <div class="content flex flex-col gap-2">
                            <p class="title text-secondary"><a href="candidates-detail1.html" class="text-black hover:underline">John Hawkins</a> applied for a job <a href="jobs-detail1.html" class="text-black hover:underline">Project Manager</a></p>
                            <span class="date caption1 text-secondary">25 mins ago</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="recent_applicants p-6 mt-7.5 rounded-lg bg-white">
            <h5 class="heading5">Recent applicants</h5>
            <div class="list overflow-x-auto w-full p-5 rounded-xl">
                <table class="w-full max-[1400px]:w-[1200px] max-md:w-[1000px]">
                    <thead class="border-b border-line">
                    <tr>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Candidates</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Job Title</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Date Applied</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Status</th>
                        <th scope="col" class="px-5 py-4 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-1.webp" alt="avatar/IMG-1" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Kelemen Krisztina</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Las Vegas, USA</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6">Senior UI/UX Designer</td>
                        <td class="p-5 whitespace-nowrap">Mar 12, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-yellow text-yellow text-button">On Hold</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_approved_application flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_approved_application">
                                    <span class="ph ph-check text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Approved Application</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-2.webp" alt="avatar/IMG-2" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Sara Smith</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Paris, France</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6">Senior UI/UX Designer</td>
                        <td class="p-5 whitespace-nowrap">Mar 10, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-yellow text-yellow text-button">On Hold</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_approved_application flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_approved_application">
                                    <span class="ph ph-check text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Approved Application</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-3.webp" alt="avatar/IMG-3" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Katona Beatrix</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Brasilla, Brazil</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6">Full Stack Development</td>
                        <td class="p-5 whitespace-nowrap">Mar 06, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-features text-features text-button">Interviewed</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-repeat text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Undo Approved</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-4.webp" alt="avatar/IMG-4" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Kende Lili</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Berlin, Germany</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6">Mobile App Developer</td>
                        <td class="p-5 whitespace-nowrap">Mar 01, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-red text-red text-button">Rejected</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-repeat text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Undo Approved</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="recent_proposals p-6 mt-7.5 rounded-lg bg-white">
            <h5 class="heading5">Recent Proposals</h5>
            <div class="list overflow-x-auto w-full p-5 rounded-xl">
                <table class="w-full max-[1400px]:w-[1200px] max-md:w-[1000px]">
                    <thead class="border-b border-line">
                    <tr>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Candidates</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Project Title</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Date Applied</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Status</th>
                        <th scope="col" class="px-5 py-4 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-5.webp" alt="avatar/IMG-5" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Maria Sahara</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Las Vegas, USA</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6 max-w-60">
                            <p class="project_name -style-1">Figma mockup needed for a new website for Electrical contractor business website</p>
                        </td>
                        <td class="p-5 whitespace-nowrap">Mar 12, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-yellow text-yellow text-button">On Hold</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_approved_application flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_approved_application">
                                    <span class="ph ph-check text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Approved Application</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-6.webp" alt="avatar/IMG-6" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Georgina Smith</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Berlin, Germany</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6 max-w-60">
                            <p class="project_name -style-1">I need you to design a email confirming for a ticket buying in a beautiful modern way for mobile</p>
                        </td>
                        <td class="p-5 whitespace-nowrap">Mar 10, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-yellow text-yellow text-button">On Hold</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_approved_application flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_approved_application">
                                    <span class="ph ph-check text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Approved Application</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-7.webp" alt="avatar/IMG-7" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Alexander Pato</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Brasilla, Brazil</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6 max-w-60">
                            <p class="project_name -style-1">Website Design (Web & Responsive) for an Online Tutoring Website</p>
                        </td>
                        <td class="p-5 whitespace-nowrap">Mar 06, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-features text-features text-button">Interviewed</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-repeat text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Undo Approved</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="item duration-300 hover:bg-background">
                        <th scope="row" class="p-5 text-left">
                            <div class="info flex items-center gap-3">
                                <a href="candidates-detail1.html" class="avatar flex-shrink-0 w-15 h-15 rounded-full overflow-hidden">
                                    <img src="./assets/images/avatar/IMG-8.webp" alt="avatar/IMG-8" class="w-full h-full object-cover" />
                                </a>
                                <a href="candidates-detail1.html" class="block">
                                    <strong class="candidates_name -style-1 heading6 duration-300 hover:text-primary">Linda Bentrix</strong>
                                    <div class="address flex items-center gap-2 mt-1 text-secondary">
                                        <span class="ph ph-map-pin text-xl"></span>
                                        <span class="employers_address font-normal">Paris, France</span>
                                    </div>
                                </a>
                            </div>
                        </th>
                        <td class="p-5 heading6 max-w-60">
                            <p class="project_name -style-1">UX/UI Designer | Web Designer to Redesign the First Screen of the Main Page</p>
                        </td>
                        <td class="p-5 whitespace-nowrap">Mar 01, 2024</td>
                        <td class="p-5">
                            <span class="tag bg-opacity-10 bg-red text-red text-button">Rejected</span>
                        </td>
                        <td class="p-5">
                            <div class="flex justify-end gap-2">
                                <button class="btn_action btn_open_popup btn_create_metting flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_create_meeting">
                                    <span class="ph ph-video-camera text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Create Metting</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-repeat text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Undo Approved</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_undo_approved flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_undo_approved">
                                    <span class="ph ph-box-arrow-down text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Download CV</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_reject flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_reject">
                                    <span class="ph ph-x text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Reject</span>
                                </button>
                                <button class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white" data-type="modal_delete">
                                    <span class="ph ph-trash text-xl"></span>
                                    <span class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
