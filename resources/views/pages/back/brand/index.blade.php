@extends('layouts.back.app')
@section('title', 'Brand')
@push('style')
    <style>
        .calendar_block iframe {
            width: 250px !important;
            height: 150px !important;
        }
    </style>
@endpush
@section('content')
    <div class="dashboard_meeting scrollbar_custom w-full bg-surface">
        <div class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h4 class="heading4 max-lg:mt-3">Brands</h4>
                <div class="flex gap-4">
                    <a href="{{ route('brand.export.data') }}" class="button-main">Export</a>
                    <a href="{{ route('brand.import') }}" class="button-main">Import</a>
                    <a href="{{ route('brand.create') }}" class="button-main">Add Brand</a>
                </div>
            </div>
            <div class="meeting_block p-6 mt-7.5 rounded-lg bg-white">

                    <ul class="list_meeting">
                        @forelse($brands as $brand)
                        <li class="item flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line rounded-lg duration-300 hover:bg-background">
                            <div class="left flex items-center gap-10">
                                <div class="calendar_block overflow-hidden w-[20px] h-[20px] rounded block max-lg:hidden">
                                    {!!  $brand->frame_google_map !!}
                                </div>
                                <div class="info">
                                    <p class="caption1 text-secondary mt-1">{{ $brand->status == 1 ? 'Active' : 'Inactive' }}</p>
                                    <strong class="title -style-1 heading6 hover:underline">{{ $brand->name }}</strong>
                                    <div class="flex items-center gap-4 mt-2">
                                        <div class="flex items-center gap-1">
                                            <span class="hour caption1">{{ \Illuminate\Support\Str::limit($brand->address, 80) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="action flex justify-end gap-2">
                                <a href="#"
                                   class="btn_action btn_view flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white">
                                    <span class="ph ph-eye text-xl"></span>
                                    <span
                                        class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">View</span>
                                </a>
                                <a href="{{ route('brand.edit', $brand->id) }}"
                                   class="btn_action btn_view flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white">
                                    <span class="ph ph-pencil-simple-line text-xl"></span>
                                    <span
                                        class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Edit</span>
                                </a>
                                <form action="{{ route('brand.destroy', $brand->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                       class="btn_action btn_view flex items-center justify-center relative w-10 h-10 rounded border border-line duration-300 hover:bg-primary hover:text-white">
                                        <span class="ph ph-trash text-xl"></span>
                                        <span
                                            class="flag absolute -top-10 left-1/2 py-0.5 px-1.5 rounded border border-line bg-white caption1 capitalize text-black whitespace-nowrap">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </li>
                        @empty
                            <li class="item flex flex-wrap items-center justify-between gap-4 p-5 border-b border-line rounded-lg duration-300 hover:bg-background">
                                <div class="info">
                                    <p class="caption1 text-secondary mt-1">No data</p>
                                </div>
                            </li>
                        @endforelse
                    </ul>

            </div>
        </div>
@endsection
