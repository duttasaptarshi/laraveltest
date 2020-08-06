@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
            @include('sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-10">
            @include('publish-tweet-panel')

            <div class="order border-gray-300 rounded-lg">
                <div class="flex p-4">
                    <div class="mr-4">
                        <img
                            src="https://i.pravatar.cc/40"
                            alt="" 
                            class="rounded-full mr-2"           
                        >
                    </div>
                    <div>
                        <h5 class="font-bold mb-4">Sappy</h5>
                        <p class="text-sm">
                            Presumbly, if you are watching this series,you've already made the decision to embrace all the laravel has to offer.However, if you are still on the fence, give me just a moment to sell you on why i believe Laravel is the best framework choice in the PHP world!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:w-1/4">
            @include('friends-list')
        </div>
    </div>
@endsection
