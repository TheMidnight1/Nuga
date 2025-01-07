@extends('CMS.cms_layouts.layout')

@section('content')
<div class="container-fluid">
    <h1 class="text-center mb-4">Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control w-100" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" rows="5" class="form-control w-100" required>{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control w-100">
            @if($post->image)
                <p class="mt-2">Current Image:</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="img-fluid rounded" style="max-width: 150px;">
            @endif
        </div>
        <div class="form-check form-switch mb-3">
            <input type="checkbox" name="is_published" id="is_published" class="form-check-input" {{ $post->is_published ? 'checked' : '' }}>
            <label class="form-check-label" for="is_published">Publish Post</label>
        </div>
        <div class="form-check form-switch mb-3">
            <input type="checkbox" name="is_gallery" id="is_gallery" class="form-check-input" {{ $post->is_gallery ? 'checked' : '' }}>
            <label class="form-check-label" for="is_gallery">Include in Gallery</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update Post</button>
    </form>
</div>
@endsection
