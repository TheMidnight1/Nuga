@extends('layouts.layout')

@section('title', $post->title ?? 'Product Detail')

@section('content')

<section class="white-bg">
    <div class="breadcrumbs">
        <h1 class="title">{{ $post->title ?? 'Product Detail' }}</h1>
        <div class="breadcrumbs-contains">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
                <li>{{ $post->title ?? 'Detail' }}</li>
            </ul>
        </div>
    </div>
</section>

<section class="white-bg my-2">
    <div class="product-section row justify-content-center align-items-center py-4">
        <div class="image-section col-12 col-md-6" data-aos="fade-right">
            <img 
            src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
            alt="{{ $post->title }}" 
                class="img-fluid rounded shadow-sm" 
            />
        </div>
        <div class="summary-section col-12 col-md-6" data-aos="fade-left">
            <div class="title">{{ $post->title  }}</div>
        </div>
    </div>
    <hr>
    <div class="editor-box py-5" data-aos="fade-up">
        {!! $post->content ?? '<p>Content not available.</p>' !!}
    </div>
</section>

<section class="white-bg">
    <div id="new" class="tab-trending-content active row m-0">
        @foreach ($relatedPosts as $relatedPost)
        <div class="item col-12 col-md-2 mb-3" data-aos="fade-up">
            <img 
            src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}"
            alt="{{ $relatedPost->title }}" 
                class="img-fluid rounded"
            />
            <h4>{{ $relatedPost->title  }}</h4>
            <a href="{{ route('post.detail', $post->id) }}">
              <div class="round-btn">View Detail</div>
            </a>
        </div>
        @endforeach
    </div>
</section>
<style>
  .breadcrumbs-contains ul {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.product-section img {
    max-width: 100%;
    height: auto;
}

.round-btn a {
    display: inline-block;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    text-decoration: none;
}

@media (max-width: 768px) {
    .summary-section {
        text-align: center;
    }
}

</style>

@endsection
