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
            <img
              class="img-fluid"
              src="{{ asset('storage/' . $product->image) }}"
              alt="{{ $product->name }}" />
          </a>
        </div>
        @endforeach
      </div>

      <div class="text-center mt-4">
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

    .photo-gallery .item img {
      width: 100%;
      height: 200px;

      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .photo-gallery .item img:hover {
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

    @media (max-width: 576px) {
      .photo-gallery h2 {
        font-size: 1.5rem;
      }

      .photo-gallery .item img {
        height: auto;
      }
    }
  </style>