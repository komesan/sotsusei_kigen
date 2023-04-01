<x-app-layout>
    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <form action="{{ route('journalings') }}" method="GET" class="w-full max-w-lg">
                <x-button class="bg-gray-100 text-gray-900">{{ __('Dashboard') }}</x-button>
            </form>
        </h2>
    </x-slot>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <x-errors id="errors" class="bg-blue-500 rounded-lg">{{$errors}}</x-errors>
        <!-- バリデーションエラーの表示に使用-->
        
        <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
            これまでのジャーナリング
            <ul>
                @foreach($contacts as $contact)
                    {{ $contact->id }}
                    {{ $contact->journalings_fact }}
                    {{ $contact->journalings_emotion }}
                @endforeach
            </ul>
        </div>
</x-app-layout>