<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $small_sized_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'small-sized-product');
        })
        ->where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();


        $medium_sized_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'medium-sized-products');
        })
        ->where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

        $large_sized_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'large-sized-products');
        })
        ->where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();

        $hemp_bags = Post::whereHas('category', function ($query) {
            $query->where('slug', 'hemp-bag');
        })
        ->where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();


        // Pass data to the view
        return view('index', compact('small_sized_products','medium_sized_products','large_sized_products','hemp_bags'));
    }
}
