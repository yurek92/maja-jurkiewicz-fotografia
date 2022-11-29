@extends('layouts.app')

@section('breadcrumb')
    <div class="bg-gray-100 py-2 px-3 h-auto w-full z-30 text-gray-700 flex items-center">
        <a href="{{ route('panel') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
        </svg>
        <div class="text-sm font-medium text-green-700">Edycja formularza</div>
    </div>
@endsection

@section('content')
    <div class="bg-gray-100 pb-5">
        <div class="overflow-x-auto sm:mx-6 lg:mx-8">
            <div class="px-4 inline-block min-w-full sm:px-6 lg:px-8">
                @livewire('weeding-forms.weeding-form', ['weedingFormId' => $weedingFormId])
            </div>
        </div>
    </div>
@endsection
