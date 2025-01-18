<div class="white-bg py-5">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <a href="{{ route('category.posts', 'hemp-bag') }}">
        <div class="tagline">
          Hemp Products
        </div>
      </a>
      <!--<h2 class="title fw-bold">Explore Our Hemp Collection</h2>-->
    </div>

    <div class="row justify-content-center g-4" data-aos="fade-up">
      <!-- Left Section -->
      @foreach ($hemp_products->take(1) as $product)

      <div class="col-12 col-lg-6">
        <a href="{{ route('post.detail', $product->id) }}" class="text-decoration-none">
          <figure class="img-container position-relative overflow-hidden rounded">
            <img
            src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
            alt="Hemp Product"
              class="img-fluid w-100"
              style="max-height: 400px; object-fit: cover;"
            />
            <figcaption class="prod-info position-absolute bottom-0 start-0 end-0 text-center bg-dark bg-opacity-75 text-white py-2">
              <span class="name h5">{{ $product->title }}</span>
            </figcaption>
          </figure>
        </a>
      </div>
      @endforeach

      <!-- Right Section -->
      <div class="col-12 col-lg-6">
        <div class="row g-3">
          @foreach ($hemp_products->skip(1)->take(4) as $product)
          <div class="col-6">
          <a href="{{ route('post.detail', $product->id) }}" class="text-decoration-none">
          <figure class="img-container position-relative overflow-hidden rounded">
                <img
                src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
                alt="{{ $product->title }}"
                  class="img-fluid w-100"
                  style="height: 180px; object-fit: cover;"
                />
                <figcaption class="prod-info position-absolute bottom-0 start-0 end-0 text-center bg-dark bg-opacity-75 text-white py-2">
                  <span class="name h6">{{ $product->title }}</span>
                </figcaption>
              </figure>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Explore More Button -->
    <div class="text-center mt-4">
      <a href="{{ route('category.posts', 'hemp-products') }}" class="btn btn-primary px-4 py-2">Explore More</a>
    </div>
  </div>
</div>
