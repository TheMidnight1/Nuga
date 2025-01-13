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
            ->where('is_featured', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $medium_sized_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'medium-sized-products');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $large_sized_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'large-sized-products');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $hemp_bags = Post::whereHas('category', function ($query) {
            $query->where('slug', 'hemp-bag');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $pashmina_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'pashmina-products');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();



        $featured_products = Post::where('is_featured', true)->take(5)->get();
        $gallery_products = Post::where('is_gallery', true)->take(8)->get();



        $blog_posts = Post::whereHas('category', function ($query) {
            $query->where('slug', 'blog');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->where('is_gallery', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $hemp_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'hemp-product-catalogue');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->where('is_gallery', false)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $wollen_products = Post::whereHas('category', function ($query) {
            $query->where('slug', 'woolen-products');
        })
            ->where('is_published', true)
            ->where('is_featured', false)
            ->where('is_gallery', false)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();



        // Pass data to the view
        return view('index', compact(
            'small_sized_products',
            'medium_sized_products',
            'large_sized_products',
            'hemp_bags',
            'featured_products',
            'pashmina_products',
            'blog_posts',
            'gallery_products',
            'hemp_products',
            'wollen_products'
        ));
    }
    public function galleryPage()
    {
        $gallery_products = Post::where('is_gallery', true)->paginate(40);
        return view('gallery', compact('gallery_products'));
    }

    public function showCategory($slug)
    {
        $posts = Post::whereHas('category', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(20);
        return view('blog-listing', compact('posts', 'slug'));
    }

    public function postDetail($id)
    {
        $post = Post::findOrFail($id);
        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->take(4)->get();

        return view('product-detail', compact('post', 'relatedPosts'));
    }
}
