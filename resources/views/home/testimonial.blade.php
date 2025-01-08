

@if(isset($featured_products) && $featured_products->isNotEmpty())
<section class="testimonials-wrapper white-bg py-3" data-aos="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="tagline">Products</div>
      <div class="title">Our Featured Products</div>
      <div class="separator"></div>
    </div>
    <div id="demo2" class="two-item-carousel owl-carousel owl-theme">


      @foreach ($featured_products as $post)

      <!--Testimonial Block-->
      <div class="testimonial-block">
        <div class="inner-box">
          <div class="image">
            <img
              src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
              alt="{{ $post->title }}" />
          </div>
          <div class="content">
            <i class="fas fa-quote-right"></i>
            <div class="author-info">
              {{$post->title}} <span>
                {{$post->category->name}}
              </span>
            </div>
            <div class="summary">
              {{$post->description}}
            </div>
            
          </div>
          <a href="{{ route('post.detail', $post->id) }}" 
           class="btn btn-primary rounded-circle position-absolute" 
           style="width: 50px; height: 50px; bottom: 15px; right: 15px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-right"></i>
        </a>
        </div>
        
      </div>
      


      @endforeach
    </div>
  </div>
</section>
@endif