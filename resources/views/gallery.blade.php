@extends('layouts.layout') <!-- Extends the base layout -->

@section('title', 'Home - Gallery')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mt-3 col-lg-4">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-4">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-4">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-6">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-6">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-3">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-3">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-3">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="col-md-4 mt-3 col-lg-3">
            <img src="{{ asset('image/green-150x150.webp') }}" class="img-fluid img-thumbnail clickable-image" alt="image" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
    </div>
</div>

<!-- Modal for Image Enlargement -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid" alt="Enlarged Image">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.clickable-image');
        const modalImage = document.getElementById('modalImage');

        images.forEach(image => {
            image.addEventListener('click', function () {
                modalImage.src = this.getAttribute('src');  
            });
        });
    });
</script>
@endsection
