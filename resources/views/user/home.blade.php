@extends('user.layout')

@section('content')
    <div class="w-full mx-auto">
        <div class="swiper-container my-8 relative mx-auto overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($news->take(5) as $newsItem)
                    <div class="swiper-slide">
                        <div class="bg-cover bg-center h-64" style="background-image: url('https://via.placeholder.com/800x400')">
                            <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
                                <h2 class="text-white text-2xl font-bold">{{ $newsItem['title'] }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>

        <h1 class="text-2xl font-bold mb-4">News List</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($paginatedNews as $newsItem)
                <div class="bg-white p-4 shadow rounded">
                    <h2 class="font-bold text-xl">{{ $newsItem['title'] }}</h2>
                    <p class="mt-2">{{ $newsItem['body'] }}</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">Read more</a>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $paginatedNews->links() }}
        </div>
    </div>
@endsection
