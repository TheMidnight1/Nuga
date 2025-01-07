@foreach($pashmina_products->chunk(8) as $index => $chunk)
@if($chunk->count() > 0)
<div class="product-section mb-5">
    <div class="container-fluid px-md-5">
        <!-- Dynamic Header Section -->
        <div class="text-center mb-4 mb-md-5">
            <h1 class="gallery-title mb-4">
                Pashmina Collection
            </h1>
            <a href="{{ route('category.posts', 'pashmina-products') }}"
                class="btn btn-outline-dark rounded-pill px-4">
                View Collection
            </a>

        </div>

        <!-- Dynamic Carousel -->
        <div id="productCarousel{{ $index }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($chunk->chunk(4) as $carouselChunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-3 g-md-4">
                        @foreach($carouselChunk as $post)
                        <div class="col-6 col-md-4 col-lg-3 {{ $loop->iteration > 2 ? 'd-none d-md-block' : '' }} 
                                                                            {{ $loop->iteration > 3 ? 'd-md-none d-lg-block' : '' }}">
                            <div class="product-card overflow-hidden rounded-4 shadow-sm">
                                <div class="position-relative h-100">
                                    <a href="" class="text-decoration-none">
                                        <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
                                            alt="{{ $post->title }}"
                                            class="w-100 h-100 object-fit-cover" />
                                        <div class="title-overlay position-absolute bottom-0 start-0 w-100 p-3">
                                            <h5 class="text-center mb-0 fs-6 fs-md-5 text-dark">{{ $post->title }}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            @if($chunk->count() > 4)
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel{{ $index }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel{{ $index }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            @endif
        </div>
    </div>
</div>
@endif
@endforeach

<style>
    body {
        background: #f4ede7;
    }

    .product-card {
        aspect-ratio: 1/1;
        transition: transform 0.3s ease;
        cursor: pointer;
        background: white;
    }

    .product-card:hover {
        transform: scale(1.05);
    }

    .carousel-inner {
        padding: 1rem 0;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
        opacity: 0.8;
    }

    .title-overlay {
        background: rgba(255, 255, 255, 0.9);
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .product-card:hover .title-overlay {
        transform: translateY(0);
    }

    @media (max-width: 768px) {

        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }

        .container-fluid {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }
    }

    .gallery-title {
        position: relative;
        font-size: clamp(1.5rem, 5vw, 2.5rem);
    }

    .gallery-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 2px;
        background: #000;
    }
</style>