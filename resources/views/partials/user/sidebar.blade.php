
<h2 class="text-xl font-bold mb-4">Popular News</h2>
<ul>
    @foreach ($popularNews as $news)
        <li class="mb-2">
            <a href="#" class="text-gray-900 hover:text-white">{{ $news['title'] }}</a>
        </li>
    @endforeach
</ul>
<h2 class="text-xl font-bold mt-6 mb-4">Categories</h2>
<ul>
    @foreach ($categories as $category)
        <li class="mb-2">
            <a href="#" class="text-white hover:text-gray-900">{{ $category }}</a>
        </li>
    @endforeach
</ul>
