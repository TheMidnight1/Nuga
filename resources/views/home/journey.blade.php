<div id="artisan-slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex align-items-center justify-content-center slider-item" style="background-image: url({{asset('image/laxmi.webp')}});">
        <div class="text-white p-4 bg-dark bg-opacity-50 rounded">

          <!-- <h2>Hemp: A Plant-Based, Vegan Fiber</h2>
          <p>Hemp is entirely plant-based, making it a vegan-friendly and cruelty-free option. With low environmental impact, it supports sustainable farming and appeals to eco-conscious lifestyles.</p>
         -->
         <h1 class="journey-title">Join the Journey</h1>
                <p class="journey-text">Choosing these items means supporting a healthier lifestyle and a cleaner planet.
                Your decision to support these products changes lives.
                Together, we can uplift communities, sustainably. </p>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
  #artisan-slider {
    max-height: 75vh; /* Reduce overall slider height */
    overflow: hidden;
  }

  .slider-item {
    height: 65vh; /* Set a specific height for the items */
    background-size: cover;
    background-position: center;
    text-align: center;
  }

  .carousel-inner {
    height: 100%;
  }

  .carousel-item .text-white {
    max-width: 75%; /* Reduce text container width */
    font-size: 1rem;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
  }

  

  @media (max-width: 768px) {
    .slider-item {
      height: 50vh; /* Adjust height for smaller screens */
    }

    .carousel-item .text-white {
      font-size: 0.8rem; /* Adjust font size */
    }
  }

  @media (max-width: 480px) {
    .carousel-item .text-white {
      font-size: 0.7rem; /* Smaller text for very small screens */
      padding: 1rem;
    }
  }
</style>
