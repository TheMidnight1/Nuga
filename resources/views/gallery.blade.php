@extends('layouts.layout')

@section('title', 'Gallery')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Gallery</h1>

    <!-- Gallery Grid -->
    <div class="row">
        @foreach($gallery_products as $post)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <a href="{{ asset('storage/' . $post->image) }}" data-lightbox="gallery" data-title="{{ $post->title }}">
                <img
                    src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->title }}"
                    class="fixed-size-image rounded shadow-sm">
            </a>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $gallery_products->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Include Lightbox2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

<!-- Include Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Custom CSS for Fixed Image Size -->
<style>
    .fixed-size-image {
        width: 200px; /* Set the desired width */
        height: 150px; /* Set the desired height */
        object-fit: cover; /* Ensures the image fits the container */
    }
</style>
@endsection
