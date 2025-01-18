<div id="artisan-slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex align-items-center justify-content-center slider-item" style="background-image: url({{asset('image/laxmi.webp')}});">
        <div class="text-white p-4 bg-dark bg-opacity-50 rounded text-center">
          <h1 class="journey-title mb-3">Join the Journey</h1>
          <p class="journey-text">
            Choosing these items means supporting a healthier lifestyle and a cleaner planet.
            Your decision to support these products changes lives.
            Together, we can uplift communities, sustainably.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* General slider styling */
  #artisan-slider {
    max-height: 75vh;
    overflow: hidden;
  }

  .slider-item {
    height: 65vh;
    background-size: cover;
    background-position: center;
    text-align: center;
  }

  .carousel-inner {
    height: 100%;
  }

  /* Typography for text */
  .journey-title {
    font-size: 2.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
  }

  .journey-text {
    font-size: 1.2rem;
    line-height: 1.8;
    max-width: 600px;
    margin: auto;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .slider-item {
      height: 55vh;
    }

    .journey-title {
      font-size: 2rem;
    }

    .journey-text {
      font-size: 1rem;
    }
  }

  @media (max-width: 768px) {
    .slider-item {
      height: 50vh;
    }

    .journey-title {
      font-size: 1.8rem;
    }

    .journey-text {
      font-size: 0.9rem;
    }
  }

  @media (max-width: 480px) {
    .slider-item {
      height: 45vh;
    }

    .journey-title {
      font-size: 1.5rem;
    }

    .journey-text {
      font-size: 0.8rem;
      padding: 0 1rem;
    }
  }
</style>
