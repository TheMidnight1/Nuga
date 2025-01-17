@extends('layouts.layout') <!-- Extends the base layout -->

@section('title', 'Nuga - About Us')

@section('content')
    <section class="white-bg">
        <div class="breadcrumbs">
            <h1 class="title">About Us</h1>
            <div class="breadcrumbs-contains">
                <ul>
                    <li>Home</li>
                    <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="white-bg my-2 about-section">
        <div class="tagline text-center" data-aos="fade-up">Who We Are</div>
        <div class="summary text-center" data-aos="fade-up">
            Welcome to <strong>Nuga</strong>, where sustainability meets innovation. We specialize in crafting 
            plant-based products that are not only eco-friendly but also inspire healthier living. Our journey 
            started with a passion for nature and a commitment to a better future.
        </div>
    </section>

    <section class="white-bg info-section py-5">
        <div class="row justify-content-between align-items-center" data-aos="fade-up">
            <div class="item col-12 col-md-3">
                <div class="title">Our Mission</div>
                <div class="desc">
                    <i class="fa-solid fa-leaf"></i>&nbsp;To promote eco-friendly lifestyles with sustainable, 
                    plant-based solutions.
                </div>
            </div>
            <div class="item col-12 col-md-3">
                <div class="title">Our Vision</div>
                <div class="desc">
                    <i class="fa-solid fa-eye"></i>&nbsp;To create a world where nature and innovation coexist harmoniously.
                </div>
            </div>
            <div class="item col-12 col-md-3">
                <div class="title">Our Values</div>
                <div class="desc">
                    <i class="fa-solid fa-heart"></i>&nbsp;Sustainability, Quality, and Care for the Planet.
                </div>
            </div>
        </div>
    </section>

   

    <!-- <section class="white-bg team-section py-5">
    <div class="tagline text-center" data-aos="fade-up">Meet Our Team</div>
    <div class="row justify-content-center" data-aos="fade-up">
        <div class="team-member col-12 col-md-3 text-center mb-4">
            <img src="{{ asset('image/slider-3.jpeg') }}" alt="Team Member 1" class="team-image img-fluid rounded-circle shadow-sm mb-3">
            <h5>John Doe</h5>
            <p>Founder & CEO</p>
        </div>
        <div class="team-member col-12 col-md-3 text-center mb-4">
            <img src="{{ asset('image/slider-4.jpeg') }}" alt="Team Member 2" class="team-image img-fluid rounded-circle shadow-sm mb-3">
            <h5>Jane Smith</h5>
            <p>Creative Director</p>
        </div>
        <div class="team-member col-12 col-md-3 text-center mb-4">
            <img src="{{ asset('image/slider-3.jpeg') }}" alt="Team Member 3" class="team-image img-fluid rounded-circle shadow-sm mb-3">
            <h5>Mike Brown</h5>
            <p>Operations Manager</p>
        </div>
    </div>
</section> -->

<style>
    .team-image {
        width: 150px; /* Set width */
        height: 150px; /* Set height */
        object-fit: cover; /* Ensures the image fills the circular shape */
        border-radius: 50%; /* Makes the image circular */
    }
</style>

@endsection
