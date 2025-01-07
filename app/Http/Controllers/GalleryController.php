<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('CMS.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('CMS.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('galleries');

        Gallery::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Image uploaded successfully!');
    }

    public function edit(Gallery $gallery)
    {
        return view('CMS.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('galleries');
            $gallery->image = $imagePath;
        }

        $gallery->update($request->only('title', 'image'));

        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully!');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Image deleted successfully!');
    }
}
