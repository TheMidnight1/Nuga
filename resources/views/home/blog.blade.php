@if($blog_posts->count() > 0)

<section class="white-bg py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header text-center mb-4" data-aos="fade-up">
      <div class="tagline text-uppercase text-muted">Our Writing</div>
      <h2 class="title fw-bold">Our Blog</h2>
    </div>

      <!-- Blog Items -->
      <div class="row g-4" data-aos="fade-up">
        @foreach($blog_posts as $post)
          <!-- Blog Item -->
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card border-0 shadow h-100">
              <div class="blog-img-container position-relative">
                <a href="{{ route('posts.show', $post->id ) }}">
                  <img
                    src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
                    alt="{{ $post->title }}"
                    class="card-img-top"
                  />
                </a>
              </div>
              <div class="card-body d-flex flex-column">
                <div class="dateline text-muted mb-2">
                  <i class="fa-solid fa-calendar-days me-2"></i> 
                  {{ $post->created_at->format('d F, Y') }}
                </div>
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text text-truncate">
                  {{ Str::limit(strip_tags($post->description), 100) }}
                </p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn round-btn mt-auto">Read More</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section>
  @endif

<style>
  .white-bg {
    background-color: #fff;
  }

  .tagline {
    font-size: 0.9rem;
    font-weight: 600;
    letter-spacing: 1.2px;
    color: #aaa;
  }

  .title {
    font-size: 1.8rem;
    color: #333;
  }

  .blog-img-container img {
    object-fit: cover;
    width: 100%;
    height: 200px;
  }

  .card-body {
    display: flex;
    flex-direction: column;
  }

  .dateline {
    font-size: 0.85rem;
  }

  .btn.round-btn {
    background-color: #72a499;
    color: #fff;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    text-transform: uppercase;
    font-size: 0.85rem;
    font-weight: 600;
  }

  .btn.round-btn:hover {
    background-color: #555;
    color: #fff;
  }

  @media (max-width: 576px) {
    .blog-img-container img {
      height: 150px;
    }

    .title {
      font-size: 1.5rem;
    }
  }
</style>
