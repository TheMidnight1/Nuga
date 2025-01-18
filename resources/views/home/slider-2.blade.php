<section class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center section-header">Photo Gallery</h2>
            <p class="text-center">
                Browse our gallery of beautiful products and experiences.
            </p>
        </div>

        @if ($gallery_products->count() > 0)
        <div class="row photos">
            @foreach ($gallery_products->take(8) as $product)
            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="{{ asset('storage/' . $product->image) }}" data-lightbox="gallery">
                    <div class="img-container">
                        <img
                            class="img-fluid"
                            src="{{ asset('storage/' . $product->image) }}"
                            alt="{{ $product->name }}" />
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="text-center pb-4">
            <a href="{{ route('gallery') }}" class="btn btn-primary">View More</a>
        </div>
        @else
        <p class="text-center text-muted">No gallery items are available at the moment. Please check back later!</p>
        @endif
    </div>
</section>

<!-- Include Lightbox2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

<!-- Include Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<style>
    .photo-gallery {
        color: #313437;
        background-color: #fff;
    }

    .photo-gallery h2 {
        font-weight: bold;
        margin-bottom: 20px;
        padding-top: 20px;
        color: #72a499;
    }

    .photo-gallery p {
        color: #7d8285;
    }

    .photo-gallery .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto 20px;
        text-align: center;
    }

    .photo-gallery .photos {
        padding-bottom: 20px;
    }

    .photo-gallery .item {
        padding: 10px;
    }

    /* Container to keep images fixed size */
    .photo-gallery .img-container {
        width: 100%;
        height: 250px; /* Fixed height */
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .photo-gallery .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .photo-gallery .img-container img:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .btn {
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .btn-primary {
        background-color: #72a499;
        border: none;
    }

    .btn-primary:hover {
        background-color: #5d8a80;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .photo-gallery h2 {
            font-size: 1.5rem;
        }

        .photo-gallery .item {
            margin-bottom: 15px;
        }

        .photo-gallery .img-container {
            height: 200px; /* Adjust image height for smaller screens */
        }
    }

    @media (max-width: 768px) {
        .photo-gallery .item {
            margin-bottom: 20px;
        }
    }
</style>
