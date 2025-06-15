@extends('layouts.back.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container h-full lg:py-15 sm:py-12 py-8">
        <h4 class="heading4 max-lg:mt-3">Dashboard</h4>
        <ul class="list_counter grid 2xl:grid-cols-4 grid-cols-2 sm:gap-7.5 gap-5 mt-7.5 w-full">
            <li class="counter_item applied_job flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Page Views</span>
                    <h4 class="number heading4 mt-1">{{ $data['totalScreenPageViews'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-eye sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item services_offered flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Visitors</span>
                    <h4 class="number heading4 mt-1">{{ $data['totalVisitors'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-users sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item views_profile flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">New Users</span>
                    <h4 class="number heading4 mt-1">{{ $data['totalNewUsers'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-user sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item total_reviews flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Active Users</span>
                    <h4 class="number heading4 mt-1">{{ $data['totalActiveUsers'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-user-check sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item total_reviews flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Sessions</span>
                    <h4 class="number heading4 mt-1">{{ $data['totalSessions'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-thumbs-up sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
            <li class="counter_item total_reviews flex items-center justify-between sm:gap-4 gap-3 sm:p-6 p-5 rounded-lg bg-white">
                <div class="counter_content">
                    <span class="text-secondary">Avg. Sessions Duration</span>
                    <h4 class="number heading4 mt-1">{{ $data['averageSessionDuration'] }}</h4>
                </div>
                <div class="counter_icon flex flex-shrink-0 items-center justify-center sm:w-[72px] w-12 sm:h-[72px] h-12 rounded-full bg-gradient">
                    <span class="ph-fill ph-clock sm:text-3xl text-2xl text-white"></span>
                </div>
            </li>
        </ul>
        <div class="chart_overview grid 2xl:grid-cols-2 grid-cols-2  gap-5 mt-7.5 w-full">
            <div class="w-full h-full rounded-lg bg-white">
                <div class="flex flex-wrap justify-between gap-6 p-6">
                    <div class="flex flex-wrap justify-between gap-6 p-6">
                        <h5 class="heading5">Top Browsers</h5>
                    </div>
                </div>
                <div class="chart md:px-6 pb-6">
                    <div id="chart-top-browser"></div>
                </div>
            </div>
            <div class="w-full h-full rounded-lg bg-white">
                <div class="flex flex-wrap justify-between gap-6 p-6">
                    <div class="flex flex-wrap justify-between gap-6 p-6">
                        <h5 class="heading5">Top Locations</h5>
                    </div>
                </div>
                <div class="chart md:px-6 pb-6">
                    <div id="chart-top-country"></div>
                </div>
            </div>
        </div>

        <div class="recent_applicants p-6 mt-7.5 rounded-lg bg-white">
            <h5 class="heading5">Top Visits</h5>
            <div class="list overflow-x-auto w-full p-5 rounded-xl">
                <table class="w-full max-[1400px]:w-[1200px] max-md:w-[1000px]">
                    <thead class="border-b border-line">
                    <tr>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Page</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Url</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Views</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['mostVisited'] as $item)
                        <tr class="item duration-300 hover:bg-background">
                            <td class="p-5 heading6">{{ $item['pageTitle'] }}</td>
                            <td class="p-5 whitespace-nowrap">{{ $item['fullPageUrl'] }}</td>
                            <td class="p-5">
                                <span class="tag bg-opacity-10 bg-primary text-primary text-button">{{ $item['screenPageViews'] }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="recent_applicants p-6 mt-7.5 rounded-lg bg-white">
            <h5 class="heading5">Top Referrers</h5>
            <div class="list overflow-x-auto w-full p-5 rounded-xl">
                <table class="w-full max-[1400px]:w-[1200px] max-md:w-[1000px]">
                    <thead class="border-b border-line">
                    <tr>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Page Referrer</th>
                        <th scope="col" class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">Views</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['topReferrers'] as $item)
                        <tr class="item duration-300 hover:bg-background">
                            <td class="p-5 heading6">{{ $item['pageReferrer'] }}</td>
                            <td class="p-5">
                                <span class="tag bg-opacity-10 bg-primary text-primary text-button">{{ $item['screenPageViews'] }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        initChart("#chart-top-browser", {!! json_encode($data['topBrowsers']['labels']) !!}, {!! json_encode($data['topBrowsers']['data']) !!});
        initChart("#chart-top-country", {!! json_encode($data['topCountries']['labels']) !!}, {!! json_encode($data['topCountries']['data']) !!});
        function initChart(element, label, data) {
            const options = {
                series: data,
                chart: {
                    width: 380,
                    type: 'pie',
                },
                labels: label,
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            const chart = new ApexCharts(document.querySelector(element), options);
            chart.render();
        }
    </script>
@endpush
