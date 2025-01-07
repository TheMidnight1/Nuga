@extends('layouts.layout') <!-- Extends the base layout -->

 <!-- Sets the title for the page -->
@section('title', 'Home - Nuga')

@section('content') <!-- Content section starts here -->
    
    <!-- ***************************Slider Section*********************** -->
    @include('home.slider')

    <!-- ***************************Slider Section*********************** -->

    <!-- **************************about section*********************** -->

    @include('home.about')
    <!-- **************************about section*********************** -->

    <!-- ********************trending section********************* -->
    @include('home.trending', [
    'small_sized_products' => $small_sized_products,
    'medium_sized_products' => $medium_sized_products,
    'large_sized_products' => $large_sized_products,

])

    <!-- ********************trending section********************* -->

    <!-- ********************product by categories********************* -->
    @include('home.category')

    <!-- ********************product by categories********************* -->

    <!-- ********************testimonials section********************* -->
    @include('home.testimonial  ')

    <!-- ********************testimonials section********************* -->

    <!-- ********************blog section********************* -->
    @include('home.blog')

    @include('home.slider-2')
    @include('home.section-1')
    @include('home.section-2')






    <!-- ********************blog section********************* -->
@endsection
