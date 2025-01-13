@extends('layouts.layout')

@section('title', ucfirst($slug) . ' - Blog Posts')

@section('content')

<section class="white-bg">
    <div class="breadcrumbs">
        <h1 class="title">{{ ucfirst($slug) }}</h1>
        <div class="breadcrumbs-contains">
            <ul>
                <li>Home</li>
                <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="#">{{ ucfirst($slug) }}</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="white-bg">
    <div class="row align-items-center" data-aos="fade-up">
        @forelse ($posts as $post)
        <div class="items blog-section col-12 col-md-3">
            <div class="blog-img-container">
                <a href="#">
                    <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('storage/uploads/posts/default.webp') }}" alt="{{ $post->title }}" />
                </a>
            </div>
            <div class="blog-contains">
                <a href="#">
                    <div class="dateline"><i class="fa-solid fa-calendar-days"></i> {{ $post->created_at->format('d F, Y') }}</div>
                    <div class="title">{{ $post->title }}</div>
                    <div class="summary">{{ Str::limit($post->summary, 100) }}</div>
                </a>
                <div class="read-more-btn mb-3"><a href="">View Detail</a></div>
            </div>
        </div>
        @empty
        <p class="text-center">No posts available in this category.</p>
        @endforelse
    </div>

    <!-- Pagination Links -->
    <div class="pagination py-2" data-aos="fade-up">
        {{ $posts->links() }}
    </div>
</section>

@endsection
