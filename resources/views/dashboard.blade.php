<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('HOME') }}
        </h2>
    </x-slot>

    <!--<div class="py-12">-->
    <!--    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
    <!--        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">-->
    <!--            <div class="p-6 text-gray-900 dark:text-gray-100">-->
    <!--                {{ __("おかえりなさい！") }}-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div class="">
        <div class="w-full bg-white dark:bg-gray-800 shadow">
            <div class="height-30 container">
                <img src="{{ url('img/1.jpeg') }}" alt="" class="opacity_change item rel m-auto">
                <p class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight abs-center font-exbg">{{ __('90点') }}</p>
                <p class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight abs-centerend font-bg">{{ __('今日のあなたは最高ですね！') }}</p>
                <img src="{{ url('img/plus.png') }}" alt="" class="button-plus">
                <img src="{{ url('img/minus.png') }}" alt="" class="button-minus">
            </div>
        </div>
    </div>

    <!-- slickが効かないので一旦外す（slick-slide single-item）https://nebikatsu.com/7231.html/ https://ponsyon.com/archives/858#ex19_%E7%B8%A6%E6%96%B9%E5%90%91%E3%82%B9%E3%83%A9%E3%82%A4%E3%83%89 -->
    <!--<div class="slick-slide single-item">-->
    <!--    <img src="{{ url('img/1.jpeg') }}" alt="" class="">-->
    <!--</div>-->
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!--一応残しておく-->

            <!--<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">-->
            <!--    <div class="p-4 height-30 container">-->
            <!--        <img src="{{ url('img/1.jpeg') }}" alt="" class="opacity_change item rel">-->
            <!--        <p class="font-semibold text-lg text-gray-800 dark:text-gray-200 leading-tight abs font-bg">{{ __('今日のあなたは最高ですね！') }}</p>-->
            <!--    </div>-->
            <!--</div>-->

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

<script src="{{ asset('js/slick.js') }}"></script>

</x-app-layout>
