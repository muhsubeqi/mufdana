@extends('layouts.back.app')
@section('title', @isset($brand) ? 'Edit Brand' : 'Add Brand')
@section('content')
    <div class="dashboard_alert scrollbar_custom w-full bg-surface">
        <form class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8" action="@if(isset($brand)) {{ route('brand.update', $brand->id) }} @else {{ route('brand.store') }} @endif" method="POST" enctype="multipart/form-data">
            @if(isset($brand))
                @method('PUT')
            @endif
            @csrf
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h4 class="heading4 max-lg:mt-3">Add Brand</h4>
                <button type="submit" class="button-main">Save</button>
            </div>
            <div class="alert_block grid gap-5 sm:p-10 p-7 mt-7.5 rounded-lg bg-white">
                <div class="name">
                    <label for="name">Brand Name <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" name="name" id="name" type="text"
                           placeholder="Brand Name..." value="@if(isset($brand)) {{ $brand->name }} @endif" required/>
                </div>
                <div class="address">
                    <label for="address">Address</label>
                    <textarea class="border w-full px-4 py-3 mt-2 border-line rounded-lg" id="address" name="address" rows="3"
                              placeholder="Address..." >@if(isset($brand)) {{ $brand->address }} @endif</textarea>
                </div>
                <div class="google-map">
                    <label for="google-map">Link Frame Google Map <span class="text-red">*</span></label>
                    <textarea class="border w-full px-4 py-3 mt-2 border-line rounded-lg" id="address" name="frame_google_map" rows="4"
                              placeholder="Link Frame Google Map..." >@if(isset($brand)) {!! $brand->frame_google_map !!} @endif</textarea>
                </div>
                <div class="status">
                    <label>Status <span class="text-red">*</span></label>
                    <div class="select_block flex items-center w-full h-12 pr-10 pl-4 mt-2 border border-line rounded-lg">
                        <select class="w-full h-full appearance-none outline-none cursor-pointer text-secondary placeholder:text-secondary" name="status">
                            <option value="1" @if(isset($brand) && $brand->status == 1) selected @endif>Active</option>
                            <option value="0" @if(isset($brand) && $brand->status == 0) selected @endif>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
