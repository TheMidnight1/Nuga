@extends('layouts.layout')

@section('title', 'Gallery')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5 display-4">Gallery</h1>

    <!-- Gallery Grid -->
    <div class="row g-3"> <!-- Reduced gap for mobile -->
        @foreach($gallery_products as $post)
        <div class="col-6 col-md-4 col-lg-3 gallery-item"> <!-- Fixed 2 columns on mobile -->
            <div class="card h-100 border-0 shadow-sm hover-effect">
                <a href="{{ asset('storage/' . $post->image) }}" 
                   data-lightbox="gallery" 
                   data-title="{{ $post->title }}"
                   class="gallery-link">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $post->image) }}"
                             alt="{{ $post->title }}"
                             class="card-img-top gallery-image">
                    </div>
                </a>
                <div class="card-body">
                    <h5 class="card-title text-truncate">{{ $post->title }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $gallery_products->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Include Lightbox2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

<!-- Include Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- Custom CSS -->
<style>
    /* Image Container Styles */
    .image-container {
        position: relative;
        width: 100%;
        padding-top: 75%; /* 4:3 Aspect Ratio */
        overflow: hidden;
    }

    .gallery-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* Card Styles */
    .card {
        margin-bottom: 0;
    }

    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }

    /* Gallery Link */
    .gallery-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    /* Card Title */
    .card-title {
        font-size: 0.9rem;
        margin-bottom: 0;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 1rem 0.75rem;
        }
        
        h1.display-4 {
            font-size: 2rem;
            margin-bottom: 1.5rem !important;
        }

        .card-body {
            padding: 0.5rem;
        }

        .gallery-item {
            padding: 0.375rem; /* Smaller padding for tighter grid */
        }

        .row {
            --bs-gutter-x: 0.75rem; /* Smaller gutters on mobile */
        }
    }

    /* Lightbox Customization */
    .lb-data .lb-caption {
        font-size: 1rem;
        font-weight: 500;
    }

    .lb-data .lb-number {
        padding-top: 10px;
    }
</style>

<!-- Initialize Lightbox with custom options -->
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'showImageNumberLabel': false,
        'fadeDuration': 300
    });
</script>
@endsection