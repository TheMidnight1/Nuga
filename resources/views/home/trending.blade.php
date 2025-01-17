<section class="white-bg py-3">
  <div class="trending-tab-section" data-aos="fade-up">
    <div class="tabs-trending gap-5">
      <div class="tab-trending active" data-tab="new">Small Sized Product</div>
      <div class="tab-trending" data-tab="sale">Medium Sized Product</div>
      <div class="tab-trending" data-tab="best">Large Sized Product</div>
    </div>

    <!-- Small Sized Product Section -->
    <div id="new" class="tab-trending-content active row">
      @if(isset($small_sized_products))
      @foreach ($small_sized_products as $post)
      <div class="item col-12 col-md-2">
        <img
          src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
          alt="{{ $post->title }}"
          class="w-100 shadow-1-strong rounded" />
        <h4>{{ $post->title }}</h4>
        <a href="{{ route('post.detail', $post->id) }}">
          <div class="round-btn">View Detail</div>
        </a>
      </div>
      @endforeach
      @endif
    </div>

    <!-- Medium Sized Product Section -->
    <div id="sale" class="tab-trending-content row">
  @if(isset($medium_sized_products))
    @foreach ($medium_sized_products as $post)
      <div class="col-6 col-md-2 mb-4 d-flex flex-column align-items-center">
        <!-- Image Container -->
        <div class="ratio ratio-1x1 w-100">
          <img
            src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
            alt="{{ $post->title }}"
            class="img-fluid rounded shadow" />
        </div>
        <!-- Title -->
        
        <!-- Button -->
        <a href="{{ route('post.detail', $post->id) }}" class="btn btn-primary btn-sm mt-2">
          View Detail
        </a>
      </div>
    @endforeach
  @endif
</div>


    <!-- Large Sized Product Section -->
    <div id="best" class="tab-trending-content row">
  @foreach($large_sized_products as $post)
    <div class="col-6 col-md-2 mb-4 d-flex flex-column align-items-center">
      <!-- Image Container -->
      <div class="ratio ratio-1x1 w-100">
        <img
          src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
          alt="{{ $post->title }}"
          class="img-fluid rounded shadow" />
      </div>
      <!-- Title -->
      
      <!-- Button -->
      <a href="{{ route('post.detail', $post->id) }}" class="btn btn-primary btn-sm mt-2">
        View Detail
      </a>
    </div>
  @endforeach
</div>


  </div>
</section>