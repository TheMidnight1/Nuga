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
                <div class="col-6 col-md-3 mb-4 d-flex flex-column align-items-center">
                    <a href="{{ route('post.detail', $post->id) }}">
                        <div class="cat-section-img" style="width: 208px; height: 208px; overflow: hidden;">
                            <img
                                src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
                                alt="{{ $post->title }}"
                                class="img-fluid w-100 h-100 object-fit-cover shadow-1-strong rounded" />
                        </div>
                        <div class="name text-center mt-2">{{ $post->title ?? 'No Title Available' }}</div>
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
