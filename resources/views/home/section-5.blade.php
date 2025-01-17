<div class="py-5 wollen-products-section">
  <div class="container">
    <div class="text-center mb-5 section-header" data-aos="fade-up">
      <p class="tagline">Wollen Product</p>
    </div>

    <div class="row justify-content-center g-4" data-aos="fade-up">
      @if($wollen_products->isEmpty())
      <div class="col-12 text-center">
        <p class="text-muted fs-5">No products available at the moment.</p>
      </div>
      @else
      @foreach($wollen_products as $product)
      <div class="col-6 col-md-4 col-lg-2">
        <div class="card border-0 shadow-sm h-100">
          <a href="{{ route('post.detail', ['id' => $product->id]) }}" class="text-decoration-none">
            <div class="ratio ratio-1x1 bg-light rounded overflow-hidden">
              <img
                src="{{ $product->image && file_exists(public_path('storage/' . $product->image)) ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
                alt="{{ $product->title }}"
                class="img-fluid w-100 h-100 object-fit-cover">
            </div>
            <div class="card-body p-2 text-center">
              <h3 class="h6 text-dark fw-semibold text-truncate">{{ $product->title }}</h3>
            </div>
          </a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
</div>

<style>
/* Product Image Styles */
.object-fit-cover {
    object-fit: cover;
}

/* Card Hover Effect */
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Title Styles */
.card-body h3 {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Responsive Padding Adjustments */
@media (max-width: 768px) {
    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }

    .display-6 {
        font-size: 1.75rem;
    }
}

@media (max-width: 576px) {
    .display-6 {
        font-size: 1.5rem;
    }
}
</style>
