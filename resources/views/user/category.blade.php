@extends('user.layout')

@section('content')
    <div class="w-full mx-auto">
        <h1 class="text-2xl font-bold mb-4">{{ ucfirst($category) }} News</h1>
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
