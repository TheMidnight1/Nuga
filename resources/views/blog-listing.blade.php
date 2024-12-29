@extends('layouts.layout') <!-- Extends the base layout -->

@section('title', 'Home - Product Detail')

@section('content')

<section class="white-bg">
  <div class="breadcrumbs">
    <h1 class="title">Blog</h1>
    <div class="breadcrumbs-contains">
      <ul>
        <li>Home</li>
        <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
  </div>
</section>

<section class="white-bg">
  <div class="row align-items-center" data-aos="fade-up">
    <div class="items blog-section col-12 col-md-3">
      <div class="blog-img-container">
        <a href="#">
          <img
            src="https://htmldemo.net/learts/learts/assets/images/blog/s370/blog-1.webp"
            alt="" />
        </a>
      </div>
      <div class="blog-contains">
        <a href="#">
          <div class="dateline"><i class="fa-solid fa-calendar-days"></i> 1 January, 2012</div>
          <div class="title">This is a blog </div>
          <div class="summary">
            Working on writing our first book has been one of the most amazing
            projects. It seems like it will be forever until I get to show you
            what we’ve been…
          </div>
        </a>
        <div class="read-more-btn mb-3"><a href="#">Read More</a>
        </div>
      </div>
    </div>

    <div class="items blog-section col-12 col-md-3">
      <div class="blog-img-container">
        <a href="#">
          <img
            src="https://htmldemo.net/learts/learts/assets/images/blog/s370/blog-1.webp"
            alt="" />
        </a>
      </div>
      <div class="blog-contains">
        <a href="#">
          <div class="dateline"><i class="fa-solid fa-calendar-days"></i> 1 January, 2012</div>
          <div class="title">This is a blog </div>
          <div class="summary">
            Working on writing our first book has been one of the most amazing
            projects. It seems like it will be forever until I get to show you
            what we’ve been…
          </div>
        </a>
        <div class="read-more-btn mb-3"><a href="#">Read More</a>
        </div>
      </div>
    </div>

    <div class="items blog-section col-12 col-md-3">
      <div class="blog-img-container">
        <a href="#">
          <img
            src="https://htmldemo.net/learts/learts/assets/images/blog/s370/blog-1.webp"
            alt="" />
        </a>
      </div>
      <div class="blog-contains">
        <a href="#">
          <div class="dateline"><i class="fa-solid fa-calendar-days"></i> 1 January, 2012</div>
          <div class="title">This is a blog </div>
          <div class="summary">
            Working on writing our first book has been one of the most amazing
            projects. It seems like it will be forever until I get to show you
            what we’ve been…
          </div>
        </a>
        <div class="read-more-btn mb-3"><a href="#">Read More</a>
        </div>
      </div>
    </div>

    <div class="items blog-section col-12 col-md-3">
      <div class="blog-img-container">
        <a href="#">
          <img
            src="https://htmldemo.net/learts/learts/assets/images/blog/s370/blog-1.webp"
            alt="" />
        </a>
      </div>
      <div class="blog-contains">
        <a href="#">
          <div class="dateline"><i class="fa-solid fa-calendar-days"></i> 1 January, 2012</div>
          <div class="title">This is a blog </div>
          <div class="summary">
            Working on writing our first book has been one of the most amazing
            projects. It seems like it will be forever until I get to show you
            what we’ve been…
          </div>
        </a>
        <div class="read-more-btn mb-3"><a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination py-2" data-aos="fade-up">
    <a href="#">&laquo;</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">&raquo;</a>
  </div>
</section>


@endsection