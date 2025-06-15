@extends('layouts.back.app')
@section('title', 'Pages')
@section('content')
    <div class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8">
        <div class="flex flex-wrap items-center justify-between gap-4">
            <h4 class="heading4 max-lg:mt-3">Pages</h4>
            <a href="{{ route('pages.create') }}" class="button-main">Add Pages</a>
        </div>
        <div class="alert_block p-6 mt-7.5 rounded-lg bg-white">
            <div class="flex flex-wrap items-center justify-between gap-5">
                <form class="relative w-[340px] h-12">
                    <input type="text" class="w-full h-full pl-4 pr-12 border border-line rounded-lg overflow-hidden"
                           placeholder="Search by keyword" required/>
                    <button type="submit" class="absolute top-1/2 -translate-y-1/2 right-4">
                        <span class="ph ph-magnifying-glass text-xl block"></span>
                    </button>
                </form>
                <div class="select_block sm:pr-16 pr-10 pl-3 py-2 border border-line rounded">
                    <div class="select">
                        <span class="selected caption1 capitalize"
                              data-title="sort by (default)">sort by (default)</span>
                        <ul class="list_option scrollbar_custom max-h-[200px] p-0 bg-white">
                            <li class="capitalize" data-item="default">sort by (default)</li>
                            <li class="capitalize" data-item="title (a -> z)">title (a -> z)</li>
                            <li class="capitalize" data-item="title (z -> a)">title (z -> a)</li>
                            <li class="capitalize" data-item="jobs (high to low)">jobs (high to low)</li>
                            <li class="capitalize" data-item="jobs (low to high)">jobs (low to high)</li>
                            <li class="capitalize" data-item="times (daily)">times (daily)</li>
                            <li class="capitalize" data-item="times (weekly)">times (weekly)</li>
                            <li class="capitalize" data-item="times (monthly)">times (monthly)</li>
                            <li class="capitalize" data-item="status (on)">status (on)</li>
                            <li class="capitalize" data-item="status (off)">status (off)</li>
                        </ul>
                    </div>
                    <span class="icon_down ph ph-caret-down right-3"></span>
                </div>
            </div>
            <div class="list overflow-x-auto w-full mt-5 rounded-xl">
                <table class="w-full max-[1400px]:w-[1200px] max-md:w-[1000px]">
                    <thead class="border-b border-line">
                    <tr>
                        <th scope="col"
                            class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                            title
                        </th>
                        <th scope="col"
                            class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                            Position
                        </th>
                        <th scope="col"
                            class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                            Uploader
                        </th>
                        <th scope="col"
                            class="px-5 py-4 text-left text-sm font-bold uppercase text-secondary whitespace-nowrap">
                            Status
                        </th>
                        <th scope="col"
                            class="px-5 py-4 text-right text-sm font-bold uppercase text-secondary whitespace-nowrap">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($pages as $page)
                        <tr class="item duration-300 hover:bg-background">
                            <th scope="row" class="p-5 text-left">
                                <div class="info">
                                    <div class="flex items-center gap-2.5">
                                        <a href="javascript:void(0)"
                                           class="title -style-1 heading6 hover:underline">{{ $page->title }}</a>
                                    </div>
                                    <div class="flex flex-wrap items-center gap-2 mt-2">
                                        <p class="caption1"><span class="text-secondary">Slug: </span><span
                                                class="region">{{ $page->slug }}</span></p>
                                        <div class="line flex-shrink-0 w-px h-4 bg-line"></div>
                                    </div>
                                </div>
                            </th>
                            <td class="p-5 whitespace-nowrap">{{ $page->position }}</td>
                            <td class="p-5 text-button text-primary">{{ $page->user->name }}</td>
                            <td class="p-5">
                                <button class="toggle_btn {{ $page->status == 1 ? 'active' : '' }}"></button>
                            </td>
                            <td class="p-5">
                                <div class="flex justify-end gap-2">
                                    <a href="employers-alerts-candidate-detail.html"
                                       class="btn_action btn_view flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white">
                                        <span class="ph ph-eye text-xl"></span>
                                        <span
                                            class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">View jobs</span>
                                    </a>
                                    <button
                                        class="btn_action btn_open_popup btn_edit_alert flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white"
                                        data-type="modal_edit_alert">
                                        <span class="ph ph-pencil-simple-line text-xl"></span>
                                        <span
                                            class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Edit alert</span>
                                    </button>
                                    <button
                                        class="btn_action btn_open_popup btn_delete flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white"
                                        data-type="modal_delete">
                                        <span class="ph ph-trash text-xl"></span>
                                        <span
                                            class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="item duration-300 hover:bg-background">
                            <td class="p-5 text-center" colspan="5">No data</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
