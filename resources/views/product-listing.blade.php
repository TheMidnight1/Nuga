@extends('layouts.layout')
<!-- Extends the base layout -->

@section('title', 'Home - Product Detail') @section('content')

<section class="white-bg">
    <div class="breadcrumbs">
        <h1 class="title">Product</h1>
        <div class="breadcrumbs-contains">
            <ul>
                <li>Home</li>
                <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="#">Products</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="white-bg">
    <div id="new" class="tab-trending-content active row m-0">
        <div class="item col-12 col-md-3" data-aos="fade-up">
            <img src="https://imgs.search.brave.com/wC6ChSXM6e8yjan1RjpueJiHUXlhlhVKabYUxwS3UkU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zYWZl/aW1hZ2VraXQuY29t/L2Fzc2V0cy9pbWFn/ZXMvcHVycGxlLnN2/Zw" alt="New Item 1" />
            <h4>New Item 1</h4>
            <div class="round-btn">View Detail</div>
        </div>
        <div class="item col-12 col-md-3" data-aos="fade-up">
            <img src="https://imgs.search.brave.com/wC6ChSXM6e8yjan1RjpueJiHUXlhlhVKabYUxwS3UkU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zYWZl/aW1hZ2VraXQuY29t/L2Fzc2V0cy9pbWFn/ZXMvcHVycGxlLnN2/Zw" alt="New Item 2" />
            <h4>New Item 2</h4>
            <div class="round-btn">View Detail</div>
        </div>
        <div class="item col-12 col-md-3" data-aos="fade-up">
            <img src="https://imgs.search.brave.com/wC6ChSXM6e8yjan1RjpueJiHUXlhlhVKabYUxwS3UkU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zYWZl/aW1hZ2VraXQuY29t/L2Fzc2V0cy9pbWFn/ZXMvcHVycGxlLnN2/Zw" alt="New Item 2" />
            <h4>New Item 2</h4>
            <div class="round-btn">View Detail</div>
        </div>
        <div class="item col-12 col-md-3" data-aos="fade-up">
            <img src="https://imgs.search.brave.com/wC6ChSXM6e8yjan1RjpueJiHUXlhlhVKabYUxwS3UkU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9zYWZl/aW1hZ2VraXQuY29t/L2Fzc2V0cy9pbWFn/ZXMvcHVycGxlLnN2/Zw" alt="New Item 2" />
            <h4>New Item 2</h4>
            <div class="round-btn">View Detail</div>
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
