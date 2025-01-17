<div class="white-bg py-3">
    <div class="section-header" data-aos="fade-up">
        <a href="{{ route('category.posts', 'hemp-bag') }}">
            <div class="tagline">Hemp Bag</div>
        </a>
        <div class="title">Making and Crafts</div>
    </div>
    <div class="row justify-content-center cat-section" data-aos="fade-up">
        @if($hemp_bags && $hemp_bags->isNotEmpty())
            @foreach($hemp_bags as $post)
                <div class="item col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('post.detail', $post->id) }}" class="d-block">
                        <div class="cat-section-img">
                            <img
                                src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
                                alt="{{ $post->title }}"
                                class="fixed-size-img shadow-1-strong rounded w-100"
                            />
                        </div>

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
/* Ensure fixed-size images and responsive layout */
.fixed-size-img {
    width: 100%; /* Full width */
    height: 250px; /* Fixed height for uniformity */
    object-fit: cover; /* Crop the image while maintaining aspect ratio */
}

/* Adjust padding around items */
.cat-section .item {
    padding: 10px; /* Default padding */
}

/* Larger screens: Adjust padding for spacing */
@media (min-width: 768px) {
    .cat-section .item {
        padding: 15px;
    }
}

@media (min-width: 992px) {
    .cat-section .item {
        padding: 20px;
    }
}

/* Typography for text alignment */
.cat-section .name {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}

/* Hover effect for images */
.cat-section-img img:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
</style>
