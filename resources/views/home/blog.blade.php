@if($blog_posts->count() > 0)

<section class="bg-white py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center mb-4" data-aos="fade-up">
      <p class="text-uppercase tagline">Our Writing</p>

    </div>

    <!-- Blog Items -->
    <div class="row g-4" data-aos="fade-up">
      @foreach($blog_posts as $post)
        <!-- Blog Item -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card border-0 shadow h-100">
            <a href="{{ route('posts.show', $post->id) }}" class="position-relative">
              <img
                src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
                alt="{{ $post->title }}"
                class="card-img-top"
                style="object-fit: cover; height: 200px;"
              />
            </a>
            <div class="card-body d-flex flex-column">
              <small class="text-muted mb-2">
                <i class="fa-solid fa-calendar-days me-1"></i> 
                {{ $post->created_at->format('d F, Y') }}
              </small>
              <h5 class="card-title fw-bold">{{ $post->title }}</h5>
              <p class="card-text text-truncate">
                {{ Str::limit(strip_tags($post->description), 100) }}
              </p>
              <a href="{{ route('post.detail', $post->id) }}" class="btn btn-primary btn-sm mt-auto">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endif
