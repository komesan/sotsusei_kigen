<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ジャーナリング') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg rel">
                <div class="p-4 height-10">
                    <h class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">{{ __('ウィッシュリストを追加してみませんか？') }}</p>
                </div>
                <img src="{{ url('img/arrow_right.png') }}" alt="" class="abs-right">
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg rel">
                <div class="p-4 height-10">
                    <h class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight">{{ __('今のあなたにお勧めの本があります！') }}</p>
                </div>
                <img src="{{ url('img/arrow_right.png') }}" alt="" class="abs-right">
            </div>

        </div>
    </div>


</x-app-layout>
