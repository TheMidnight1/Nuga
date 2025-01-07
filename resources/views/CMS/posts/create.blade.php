@extends('CMS.cms_layouts.layout')

@section('content')
<div class="container">
    <h1 class="text-center">Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control w-100" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Select a Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="5" class="form-control w-100" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control w-100">
        </div>
        <div class="form-check form-switch mb-3">
            <input type="checkbox" name="is_published" id="is_published" class="form-check-input">
            <label class="form-check-label" for="is_published">Publish Post</label>
        </div>
        <div class="form-check form-switch mb-3">
            <input type="checkbox" name="is_gallery" id="is_gallery" class="form-check-input">
            <label class="form-check-label" for="is_gallery">Include in Gallery</label>
        </div>

        <div class="form-check form-switch mb-3">
            <input type="checkbox" name="is_featured" id="is_featured" class="form-check-input">
            <label class="form-check-label" for="is_featured">Include in Featured Post</label>
        </div>

        <button type="submit" class="btn btn-primary w-100">Create Post</button>
    </form>
</div>

@endsection
