<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Talenthub</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    @include('partials.user.header', ['categories' => $categories])

    <div class="container mx-auto py-4">
        <!-- For large screens -->
        <div class="hidden lg:grid grid-cols-12 gap-4">
            <!-- Main Content and Slider -->
            <main class="col-span-9">
                @yield('content')
            </main>

            <!-- Sidebar -->
            <aside class="col-span-3 bg-gray-800 text-white p-4 h-full">
                <h2 class="text-xl font-bold mb-4">Popular News</h2>
                <ul>
                    @foreach ($popularNews as $news)
                        <li class="mb-2">
                            <a href="#" class="text-blue-400 hover:text-blue-600">{{ $news['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h2 class="text-xl font-bold mt-6 mb-4">Categories</h2>
                <ul>
                    @foreach ($categories as $category)
                        <li class="mb-2">
                            <a href="#" class="text-white hover:text-gray-400">{{ $category }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

        <!-- For small screens -->
        <div class="lg:hidden grid grid-cols-1 gap-4">
            <!-- Main Content and Slider -->
            <main>
                @yield('content')
            </main>

            <!-- Sidebar -->
            <aside class="bg-gray-800 text-white p-4 h-full">
                <h2 class="text-xl font-bold mb-4">Popular News</h2>
                <ul>
                    @foreach ($popularNews as $news)
                        <li class="mb-2">
                            <a href="#" class="text-blue-400 hover:text-blue-600">{{ $news['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h2 class="text-xl font-bold mt-6 mb-4">Categories</h2>
                <ul>
                    @foreach ($categories as $category)
                        <li class="mb-2">
                            <a href="#" class="text-white hover:text-gray-400">{{ $category }}</a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>

    <!-- Footer -->
    @include('partials.user.footer')

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                slidesPerView: 1,
            });
        });
    </script>
</body>
</html>
