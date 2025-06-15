@extends('layouts.back.app')
@section('title', 'Add Faq')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css')}}" />
    @endpush
@section('content')
    <div class="dashboard_alert scrollbar_custom w-full bg-surface">
        <form class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8" action="@if(isset($faq)) {{ route('faq.update', $faq->id) }} @else {{ route('faq.store') }} @endif"
              method="POST" enctype="multipart/form-data">
            @if(isset($faq))
                @method('PUT')
            @endif
            @csrf
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h4 class="heading4 max-lg:mt-3">Add Faq</h4>
                <button class="button-main" type="submit">Save</button>
            </div>
            <div class="alert_block grid gap-5 sm:p-10 p-7 mt-7.5 rounded-lg bg-white">
                <div class="question">
                    <label for="question">Question <span class="text-red">*</span></label>
                    <input class="w-full h-12 px-4 mt-2 border-line rounded-lg" name="question" id="question"
                           type="text"
                           placeholder="Title..." required value="@if(isset($faq)) {{ $faq->question }} @endif"/>
                </div>
                <div class="desc col-span-full">
                    <label>Answer: <span class="text-red">*</span></label>
                    <div class="form_editor mt-2">
                        <div id="editor">{{ isset($faq) ? $faq->answer : '' }}</div>
                        <input type="hidden" name="answer" id="answer" value="{{ isset($faq) ? $faq->answer : '' }}">
                    </div>
                </div>
                <div class="status">
                    <label>Status <span class="text-red">*</span></label>
                    <div
                        class="select_block flex items-center w-full h-12 pr-10 pl-4 mt-2 border border-line rounded-lg">
                        <select
                            class="w-full h-full appearance-none outline-none cursor-pointer text-secondary placeholder:text-secondary"
                            name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/quill.js')}}"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        quill.on('text-change', function () {
           const content = document.querySelector('#answer').value = quill.root.innerHTML;
            console.log(content)
        });
    </script>
@endpush
