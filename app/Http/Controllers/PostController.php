<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('CMS.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('CMS.posts.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',

        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('posts', 'public') : null;

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imagePath,
            'is_published' => $request->boolean('is_published'),
            'is_gallery' => $request->boolean('is_gallery'),
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id,

        ]);


        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }






    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('CMS.posts.edit', compact('post', 'categories'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        // Handle image upload if a new image is provided
        if ($request->file('image')) {
            // Delete the old image if it exists
            if ($post->image && \Storage::exists('public/' . $post->image)) {
                \Storage::delete('public/' . $post->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('posts', 'public');
            $post->image = $imagePath; // Update the image path in the database
        }

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'is_published' => $request->boolean('is_published'),
            'is_gallery' => $request->boolean('is_gallery'),
            'slug' => Str::slug($request->title),
            'category_id' => $request->category_id
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }





    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}
