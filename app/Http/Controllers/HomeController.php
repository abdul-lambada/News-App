<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy untuk berita
        $news = collect([
            ['id' => 1, 'title' => 'Breaking News: Example Title 1', 'body' => 'This is a short description of the news article number 1.', 'category' => 'Politics'],
            ['id' => 2, 'title' => 'Tech Update: Example Title 2', 'body' => 'This is a short description of the news article number 2.', 'category' => 'Technology'],
            ['id' => 3, 'title' => 'Sports Highlight: Example Title 3', 'body' => 'This is a short description of the news article number 3.', 'category' => 'Sports'],
            ['id' => 4, 'title' => 'Entertainment Buzz: Example Title 4', 'body' => 'This is a short description of the news article number 4.', 'category' => 'Entertainment'],
            ['id' => 5, 'title' => 'Political Debate: Example Title 5', 'body' => 'This is a short description of the news article number 5.', 'category' => 'Politics'],
            ['id' => 6, 'title' => 'Health Alert: Example Title 6', 'body' => 'This is a short description of the news article number 6.', 'category' => 'Health'],
            ['id' => 7, 'title' => 'Breaking News: Example Title 7', 'body' => 'This is a short description of the news article number 7.', 'category' => 'Politics'],
            ['id' => 8, 'title' => 'Tech Update: Example Title 8', 'body' => 'This is a short description of the news article number 8.', 'category' => 'Technology'],
            ['id' => 9, 'title' => 'Sports Highlight: Example Title 9', 'body' => 'This is a short description of the news article number 9.', 'category' => 'Sports'],
            ['id' => 10, 'title' => 'Entertainment Buzz: Example Title 10', 'body' => 'This is a short description of the news article number 10.', 'category' => 'Entertainment'],
            ['id' => 11, 'title' => 'Political Debate: Example Title 11', 'body' => 'This is a short description of the news article number 11.', 'category' => 'Politics'],
            ['id' => 12, 'title' => 'Health Alert: Example Title 12', 'body' => 'This is a short description of the news article number 12.', 'category' => 'Health'],
            ['id' => 13, 'title' => 'Breaking News: Example Title 13', 'body' => 'This is a short description of the news article number 13.', 'category' => 'Politics'],
            ['id' => 14, 'title' => 'Tech Update: Example Title 14', 'body' => 'This is a short description of the news article number 14.', 'category' => 'Technology'],
            ['id' => 15, 'title' => 'Sports Highlight: Example Title 15', 'body' => 'This is a short description of the news article number 15.', 'category' => 'Sports'],
            ['id' => 16, 'title' => 'Entertainment Buzz: Example Title 16', 'body' => 'This is a short description of the news article number 16.', 'category' => 'Entertainment'],
            ['id' => 17, 'title' => 'Political Debate: Example Title 17', 'body' => 'This is a short description of the news article number 17.', 'category' => 'Politics'],
            ['id' => 18, 'title' => 'Health Alert: Example Title 18', 'body' => 'This is a short description of the news article number 18.', 'category' => 'Health'],
            ['id' => 19, 'title' => 'Breaking News: Example Title 19', 'body' => 'This is a short description of the news article number 19.', 'category' => 'Politics'],
            ['id' => 20, 'title' => 'Tech Update: Example Title 20', 'body' => 'This is a short description of the news article number 20.', 'category' => 'Technology'],
            ['id' => 21, 'title' => 'Sports Highlight: Example Title 21', 'body' => 'This is a short description of the news article number 21.', 'category' => 'Sports'],
            ['id' => 22, 'title' => 'Entertainment Buzz: Example Title 22', 'body' => 'This is a short description of the news article number 22.', 'category' => 'Entertainment'],
            ['id' => 23, 'title' => 'Political Debate: Example Title 23', 'body' => 'This is a short description of the news article number 23.', 'category' => 'Politics'],
            ['id' => 24, 'title' => 'Health Alert: Example Title 24', 'body' => 'This is a short description of the news article number 24.', 'category' => 'Health'],
        ]);

        // Paginate the news collection
        $perPage = 6; // Number of items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $news->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedNews = new LengthAwarePaginator($currentItems, $news->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath()
        ]);

        $popularNews = [
            ['title' => 'Popular News with title 1'],
            ['title' => 'Popular News with title  2'],
            ['title' => 'Popular News with title  3'],
            ['title' => 'Popular News with title  4'],
            ['title' => 'Popular News with title  5'],
        ];

        // Data dummy untuk kategori
        $categories = ['Politics', 'Sports', 'Technology', 'Entertainment', 'Health'];

        return view('user.home', compact('news', 'paginatedNews', 'popularNews', 'categories'));
    }

    public function category($category)
    {
        // Data dummy untuk berita
        $news = collect([
            ['id' => 1, 'title' => 'Breaking News: Example Title 1', 'body' => 'This is a short description of the news article number 1.', 'category' => 'Politics'],
            ['id' => 2, 'title' => 'Tech Update: Example Title 2', 'body' => 'This is a short description of the news article number 2.', 'category' => 'Technology'],
            ['id' => 3, 'title' => 'Sports Highlight: Example Title 3', 'body' => 'This is a short description of the news article number 3.', 'category' => 'Sports'],
            ['id' => 4, 'title' => 'Entertainment Buzz: Example Title 4', 'body' => 'This is a short description of the news article number 4.', 'category' => 'Entertainment'],
            ['id' => 5, 'title' => 'Political Debate: Example Title 5', 'body' => 'This is a short description of the news article number 5.', 'category' => 'Politics'],
            ['id' => 6, 'title' => 'Health Alert: Example Title 6', 'body' => 'This is a short description of the news article number 6.', 'category' => 'Health'],
            ['id' => 7, 'title' => 'Breaking News: Example Title 7', 'body' => 'This is a short description of the news article number 7.', 'category' => 'Politics'],
            ['id' => 8, 'title' => 'Tech Update: Example Title 8', 'body' => 'This is a short description of the news article number 8.', 'category' => 'Technology'],
            ['id' => 9, 'title' => 'Sports Highlight: Example Title 9', 'body' => 'This is a short description of the news article number 9.', 'category' => 'Sports'],
            ['id' => 10, 'title' => 'Entertainment Buzz: Example Title 10', 'body' => 'This is a short description of the news article number 10.', 'category' => 'Entertainment'],
            ['id' => 11, 'title' => 'Political Debate: Example Title 11', 'body' => 'This is a short description of the news article number 11.', 'category' => 'Politics'],
            ['id' => 12, 'title' => 'Health Alert: Example Title 12', 'body' => 'This is a short description of the news article number 12.', 'category' => 'Health'],
            ['id' => 13, 'title' => 'Breaking News: Example Title 13', 'body' => 'This is a short description of the news article number 13.', 'category' => 'Politics'],
            ['id' => 14, 'title' => 'Tech Update: Example Title 14', 'body' => 'This is a short description of the news article number 14.', 'category' => 'Technology'],
            ['id' => 15, 'title' => 'Sports Highlight: Example Title 15', 'body' => 'This is a short description of the news article number 15.', 'category' => 'Sports'],
            ['id' => 16, 'title' => 'Entertainment Buzz: Example Title 16', 'body' => 'This is a short description of the news article number 16.', 'category' => 'Entertainment'],
            ['id' => 17, 'title' => 'Political Debate: Example Title 17', 'body' => 'This is a short description of the news article number 17.', 'category' => 'Politics'],
            ['id' => 18, 'title' => 'Health Alert: Example Title 18', 'body' => 'This is a short description of the news article number 18.', 'category' => 'Health'],
            ['id' => 19, 'title' => 'Breaking News: Example Title 19', 'body' => 'This is a short description of the news article number 19.', 'category' => 'Politics'],
            ['id' => 20, 'title' => 'Tech Update: Example Title 20', 'body' => 'This is a short description of the news article number 20.', 'category' => 'Technology'],
            ['id' => 21, 'title' => 'Sports Highlight: Example Title 21', 'body' => 'This is a short description of the news article number 21.', 'category' => 'Sports'],
            ['id' => 22, 'title' => 'Entertainment Buzz: Example Title 22', 'body' => 'This is a short description of the news article number 22.', 'category' => 'Entertainment'],
            ['id' => 23, 'title' => 'Political Debate: Example Title 23', 'body' => 'This is a short description of the news article number 23.', 'category' => 'Politics'],
            ['id' => 24, 'title' => 'Health Alert: Example Title 24', 'body' => 'This is a short description of the news article number 24.', 'category' => 'Health'],
        ]);

        // Filter berita berdasarkan kategori
        $filteredNews = $news->filter(function ($newsItem) use ($category) {
            return strtolower($newsItem['category']) === strtolower($category);
        });

        // Paginate the filtered news collection
        $perPage = 6; // Number of items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $filteredNews->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedNews = new LengthAwarePaginator($currentItems, $filteredNews->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath()
        ]);

        $popularNews = [
            ['title' => 'Popular News with title 1'],
            ['title' => 'Popular News with title 2'],
            ['title' => 'Popular News with title 3'],
            ['title' => 'Popular News with title 4'],
            ['title' => 'Popular News with title 5'],
        ];

        $categories = ['Politics', 'Sports', 'Technology', 'Entertainment', 'Health'];

        return view('user.category', compact('category', 'paginatedNews', 'popularNews', 'categories'));
    }
}
