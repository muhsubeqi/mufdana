<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class DashboardController extends Controller
{
    public function index()
    {
        $startDate = Carbon::create(2025, 6, 13);
        $endDate = now();

        // Total Pengunjung
        $visitorsData = Analytics::get(
            Period::create($startDate, $endDate),
            ['totalUsers', 'activeUsers', 'newUsers', 'sessions', 'screenPageViews', 'averageSessionDuration']
        );

        $duration = CarbonInterval::seconds((int) $visitorsData->sum('averageSessionDuration'))->cascade();
        $data = [
            'totalVisitors' => $visitorsData->sum('totalUsers'),
            'totalActiveUsers' => $visitorsData->sum('activeUsers'),
            'totalNewUsers' => $visitorsData->sum('newUsers'),
            'totalSessions' => $visitorsData->sum('sessions'),
            'totalScreenPageViews' => $visitorsData->sum('screenPageViews'),
            'averageSessionDuration' => $duration->format('%H:%I:%S'),
        ];

        $data['mostVisited'] = Analytics::fetchMostVisitedPages(
            Period::create($startDate, $endDate),
            10
        );

        $data['topReferrers'] = Analytics::fetchTopReferrers(
            Period::create($startDate, $endDate),
            10
        );

        $data['topBrowsers'] = Analytics::fetchTopBrowsers(
            Period::create($startDate, $endDate),
            10
        );

        $labelTopBrowsers = [];
        $dataTopBrowsers = [];
        foreach ($data['topBrowsers'] as $browser) {
            $labelTopBrowsers[] = "{$browser['browser']} ({$browser['screenPageViews']})";
            $dataTopBrowsers[] = $browser['screenPageViews'];
        }

        $data['topBrowsers'] = [
            'labels' => $labelTopBrowsers,
            'data' => $dataTopBrowsers,
        ];

        $data['topCountries'] = Analytics::fetchTopCountries(
            Period::create($startDate, $endDate),
            10
        );

        $labelTopCountries = [];
        $dataTopCountries = [];
        foreach ($data['topCountries'] as $country) {
            $labelTopCountries[] = "{$country['country']} ({$country['screenPageViews']})";
            $dataTopCountries[] = $country['screenPageViews'];
        }

        $data['topCountries'] = [
            'labels' => $labelTopCountries,
            'data' => $dataTopCountries,
        ];

        return view('pages.back.dashboard.index', compact('data'));
    }
}
