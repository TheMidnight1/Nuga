<div class="white-bg py-5">
  <div class="container">
    <div class="section-header text-center mb-4" data-aos="fade-up">
      <p class="tagline text-uppercase text-primary fw-bold mb-2">Wollen Product</p>
      <h2 class="title fw-bold">Making and Crafts</h2>
    </div>

    <div class="row justify-content-center g-4" data-aos="fade-up">
      @foreach($wollen_products as $product)
        <!-- Dynamic Category Item -->
        <div class="item col-6 col-md-3 col-lg-2 text-center">
          <a href="{{ route('post.detail', ['id' => $product->id]) }}" class="text-decoration-none">
            <div class="cat-section-img-prod position-relative overflow-hidden">
              <img
              src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/uploads/posts/default.webp') }}"
              alt="{{ $product->title }}"
                class="img-fluid"
              />
            </div>
            <div class="name mt-2 text-dark fw-bold">{{ $product->title }}</div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>
