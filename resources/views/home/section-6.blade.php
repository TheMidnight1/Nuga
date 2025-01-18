<style>
  .img-container {
    width: 100%;
    height: 300px;
    /* Fixed height for all images */
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .fixed-image {
    width: auto;
    height: 100%;
    object-fit: cover;
    /* Ensures the image fills the container proportionally */
  }

  .container {
    max-width: 1200px;
    /* Fixes container width for a uniform layout */
  }

  @media (max-width: 768px) {
    .img-container {
      height: 200px;
      /* Adjust for smaller screens */
    }
  }
</style>
<div class="white-bg py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center mb-4" data-aos="fade-up">
      <div class="tagline">Pashmina Products</div>
      <p class="text-muted">Explore our collection of premium-quality pashmina products that combine elegance with timeless craftsmanship.</p>
    </div>

    <!-- Product Section -->
    <div class="row align-items-center g-4" data-aos="fade-up">
      @if($pashmina_products && $pashmina_products->isNotEmpty())
      <!-- Left Images -->
      <div class="col-12 col-lg-3 d-flex flex-column justify-content-between">
        @foreach($pashmina_products->take(2) as $product)
        <div class="mb-3">
          <a href="{{ route('post.detail', $product->id ?? '#') }}" class="text-decoration-none">
            <figure class="img-container position-relative overflow-hidden rounded">
              <img
                src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
                alt="{{ $product->title ?? 'Default Title' }}"
                class="img-fluid w-100 fixed-image" />
              
            </figure>
          </a>
        </div>
        @endforeach
      </div>

      <!-- Middle Image -->
      <div class="col-12 col-lg-6">
        @if($pashmina_products->count() > 2)
        @php
        $centerpiece = $pashmina_products->skip(2)->first();
        @endphp
        @if($centerpiece)
        <a href="{{ route('post.detail', $centerpiece->id ?? '#') }}" class="text-decoration-none">
          <figure class="img-container position-relative overflow-hidden rounded">
            <img
              src="{{ $centerpiece->image ? asset('storage/' . $centerpiece->image) : asset('storage/uploads/posts/default.webp') }}"
              alt="{{ $centerpiece->title ?? 'Default Title' }}"
              class="img-fluid w-100 fixed-image" />
            
          </figure>
        </a>
        @endif
        @endif
      </div>

      <!-- Right Images -->
      <div class="col-12 col-lg-3 d-flex flex-column justify-content-between">
        @foreach($pashmina_products->skip(3)->take(2) as $product)
        <div class="mb-3">
          <a href="{{ route('post.detail', $product->id ?? '#') }}" class="text-decoration-none">
            <figure class="img-container position-relative overflow-hidden rounded">
              <img
                src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
                alt="{{ $product->title ?? 'Default Title' }}"
                class="img-fluid w-100 fixed-image" />
             
            </figure>
          </a>
        </div>
        @endforeach
      </div>
      @else
      <div class="text-center">
        <p class="text-muted">No products available at the moment. Please check back later.</p>
      </div>
      @endif
    </div>

    <!-- Explore More Button -->
    <div class="text-center mt-4">
      <a href="{{ route('category.posts', ['slug' => 'pashmina-products']) }}" class="btn btn-primary px-4 py-2">Explore More</a>
    </div>
  </div>
</div>