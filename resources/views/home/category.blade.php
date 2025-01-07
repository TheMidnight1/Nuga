<div class="white-bg py-3">
    <div class="section-header" data-aos="fade-up">
        <a href="{{route('category.posts','hemp-bag')}}">

            <div class="tagline">Hemp bag</div>
        </a>
        <div class="title">Making and Crafts</div>
    </div>
    <div class="row justify-content-center cat-section" data-aos="fade-up">
        @if($hemp_bags && $hemp_bags->isNotEmpty())
            @foreach($hemp_bags as $post)
                <div class="item col-12 col-md-2">
                    <a href="{{ $post->id ? route('posts.show', $post->id) : '#' }}">
                        <div class="cat-section-img">
                        <img
              src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
              alt="{{ $post->title }}"
              class="w-100 shadow-1-strong rounded" />                        </div>
                        <div class="name">{{ $post->title ?? 'No Title Available' }}</div>
                    </a>
                </div>
            @endforeach
        @else
            <div class="item col-12">
                <p class="text-center">No products available in this category.</p>
            </div>
        @endif
    </div>
</div>
