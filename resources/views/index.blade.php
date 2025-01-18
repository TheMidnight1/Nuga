@extends('layouts.layout') <!-- Extends the base layout -->

 <!-- Sets the title for the page -->
@section('title', 'Home - Nuga')

<!-- SEO Meta Tags -->
@section('meta_description', 'Welcome to Nuga, where we celebrate sustainable craftsmanship with hemp-based products and local entrepreneurship.')
@section('meta_keywords', 'hemp products, sustainable craftsmanship, local entrepreneurs, eco-friendly products, Nuga')
@section('og_title', 'Home - Nuga')
@section('og_description', 'Explore sustainable hemp products and craftsmanship at Nuga, supporting local entrepreneurs.')
@section('og_image', asset('images/logo.png'))
@section('og_url', url()->current())
@section('twitter_title', 'Home - Nuga')
@section('twitter_description', 'Discover sustainable hemp products and local craftsmanship at Nuga.')
@section('twitter_image', asset('images/logo.png'))


@section('content') <!-- Content section starts here -->
    
    <!-- ***************************Slider Section*********************** -->
    @include('home.slider')

    <!-- ***************************Slider Section*********************** -->

    <!-- **************************about section*********************** -->

    @include('home.about')
    @include('home.section-1')
    @include('home.transfering-hemp')
    @include('home.fiber-craftmanship')
    @include('home.local-entrepreneurs')
    @include('home.hemp-and-felt')
    @include('home.impact')
    @include('home.journey')






    @include('home.section-4')

    @include('home.section-5')
    @include('home.section-6')


    @include('home.support-local')

    <!-- @include('home.section-3') -->


    <!-- **************************about section*********************** -->

    <!-- ********************trending section********************* -->
    @include('home.trending', [
    'small_sized_products' => $small_sized_products,
    'medium_sized_products' => $medium_sized_products,
    'large_sized_products' => $large_sized_products,

])

    <!-- ********************trending section********************* -->
    @include('home.section-2',['pashmina_products'=>$pashmina_products])

    <!-- ********************product by categories********************* -->
    @include('home.category',['featured_products'=>$featured_products])

    <!-- ********************product by categories********************* -->

    <!-- ********************testimonials section********************* -->
    @include('home.testimonial  ')



    <!-- ********************testimonials section********************* -->

    <!-- ********************blog section********************* -->
    @include('home.blog')

    @include('home.slider-2')






    <!-- ********************blog section********************* -->
@endsection
