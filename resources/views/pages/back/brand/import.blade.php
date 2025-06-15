@extends('layouts.back.app')
@section('title', 'Import')
@section('content')
    <div class="dashboard_alert scrollbar_custom w-full bg-surface">
        <form class="container h-fit lg:pt-15 lg:pb-30 max-lg:py-12 max-sm:py-8" action="{{ route('brand.import.data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h4 class="heading4 max-lg:mt-3">Import Data</h4>
                <button type="submit" class="button-main">Import</button>
            </div>
            <div class="alert_block grid gap-5 sm:p-10 p-7 mt-7.5 rounded-lg bg-white">
                <div class="border border-dashed border-gray-400 rounded-md p-4">
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-2">Choose Excel File</label>
                    <input type="file" name="file" id="file" accept=".xlsx,.xls,.csv"
                           class="block w-full text-sm border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>
        </form>
    </div>
@endsection
