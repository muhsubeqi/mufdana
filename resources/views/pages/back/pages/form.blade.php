@extends('layouts.back.app')
@section('title', 'Add Pages')
@section('content')
    <div class="dashboard_alert scrollbar_custom w-full bg-surface">
        <form class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8" action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h4 class="heading4 max-lg:mt-3">Add Pages</h4>
                <button type="submit" class="button-main">Save</button>
            </div>
            <div class="alert_block grid gap-5 sm:p-10 p-7 mt-7.5 rounded-lg bg-white">
                <div class="title">
                    <label for="title">Title <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" name="title" id="title" type="text"
                           placeholder="Title..." required/>
                </div>
                <div class="content">
                    <label for="content">Content</label>
                    <textarea class="border w-full px-4 py-3 mt-2 border-line rounded-lg" id="content" name="content" rows="8"
                              placeholder="Content..."></textarea>
                </div>
                <div class="meta-title">
                    <label for="meta-title">Meta Title <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="meta-title" name="meta_title" type="text"
                           placeholder="Meta Title..." required/>
                </div>
                <div class="meta-description">
                    <label for="meta-description">Meta Description <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="meta-description" name="meta_description" type="text"
                           placeholder="Meta Description..." required/>
                </div>
                <div class="meta-keywords">
                    <label for="meta-keywords">Meta Keywords <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="meta-keywords" name="keywords" type="text"
                           placeholder="Meta Keywords..." required/>
                </div>
                <div class="position">
                    <label for="position">Position <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" id="position" name="position" type="number"
                           placeholder="Position..." required/>
                </div>
                <div class="status">
                    <label>Status <span class="text-red">*</span></label>
                    <div class="select_block flex items-center w-full h-12 pr-10 pl-4 mt-2 border border-line rounded-lg">
                        <select class="w-full h-full appearance-none outline-none cursor-pointer text-secondary placeholder:text-secondary" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
