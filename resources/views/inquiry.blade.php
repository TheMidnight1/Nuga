@extends('layouts.layout')

@section('title', 'Nuga - Inquiry')

@section('content')
<section class="white-bg py-2">
    <div class="row align-items-center">
        <div class="left-col col-12 col-lg-6" data-aos="fade-right">
            <div class="about-card">
                <div class="title">
                    Interested in Our Products? Submit Your Inquiry Now!
                </div>
                <div class="summary">
                    We specialize in selling high-end unique vases, wall arts, home accessories, and furniture pieces in bulk. If you're looking to enhance your collection or stock your store, please fill out the form, and we will get back to you with the best offers.
                </div>
            </div>
        </div>
        <div class="right-col col-12 col-lg-6" data-aos="fade-left">
            <div class="about-img d-flex justify-content-center align-items-center p-3">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form class="inquiry-form w-100" action="/submit-inquiry" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="product">Product of Interest</label>
                        <select class="form-control" id="product" name="product" required>
                            <option value="">Select a product</option>
                            <option value="vases">Vases</option>
                            <option value="wall-arts">Wall Arts</option>
                            <option value="home-accessories">Home Accessories</option>
                            <option value="furniture">Furniture Pieces</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="quantity">Quantity Required</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required />
                    </div>
                    <!-- <div class="form-group mb-3">
                        <label for="message">Additional Details</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Provide any additional details or requirements"></textarea>
                    </div> -->
                    <button type="submit" class="btn round-btn w-100">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
