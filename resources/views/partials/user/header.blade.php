<header class="bg-white shadow p-4 relative z-50">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-lg font-bold">News App</div>
        <nav class="hidden lg:flex space-x-4">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-800">Home</a>
            @foreach ($categories as $category)
                <a href="{{ url('/category/' . strtolower($category)) }}" class="text-gray-600 hover:text-gray-800">{{ $category }}</a>
            @endforeach
        </nav>
        <div class="lg:hidden" x-data="{ open: false }">
            <button @click="open = !open" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-full bg-white shadow-lg rounded-lg py-2 z-50">
                <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-100">Home</a>
                @foreach ($categories as $category)
                    <a href="{{ url('/category/' . strtolower($category)) }}" class="block px-4 py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-100">{{ $category }}</a>
                @endforeach
            </div>
        </div>
    </div>
</header>

<!-- Add Alpine.js script in your layout file if not already included -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
