<div class="white-bg py-3">
    <div class="section-header" data-aos="fade-up">
        <a href="{{ route('category.posts', 'hemp-bag') }}">
            <div class="tagline">Hemp bag</div>
        </a>
        <div class="title">Making and Crafts</div>
    </div>
    <div class="row justify-content-center cat-section" data-aos="fade-up">
        @if($hemp_bags && $hemp_bags->isNotEmpty())
            @foreach($hemp_bags as $post)
                <div class="item col-12 col-md-2">
                    <a href="{{ route('post.detail', $post->id) }}">
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


<style>
.fixed-size-img {
    width: 100%; /* Ensure the image spans the container width */
    height: 400px; /* Increase height for larger images */
    object-fit: cover; /* Maintain aspect ratio and crop excess parts */
}

.cat-section .item {
    padding: 15px; /* Add padding around items */
}

@media (min-width: 992px) { /* For larger screens */
    .cat-section .item {
        padding: 20px; /* Increase padding for larger screens */
    }
}

</style>