<section style="background-color: #e8f5e9;">

  <div id="artisan-slider" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="d-flex align-items-center justify-content-center slider-item" 
             style="background-image: url({{asset('image/hempplant.jpg')}});">
          <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
            <h2 class="title mb-3">Hemp: A Plant-Based, Vegan Fiber</h2>
            <p class="summary">
              Hemp is entirely plant-based, making it a vegan-friendly and cruelty-free option. With low environmental impact, it supports sustainable farming and appeals to eco-conscious lifestyles.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="d-flex align-items-center justify-content-center slider-item" 
             style="background-image: url({{asset('image/finalfeltnobg.png')}});">
          <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
            <h2 class="title mb-3">Felt Makers: Adding Warmth to Tradition</h2>
            <p class="summary">
              Like hemp, woolen felt is made with love and skill. Artisans carefully craft felt decorations, bringing warmth and smiles to families.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="d-flex align-items-center justify-content-center slider-item" 
             style="background-image: url({{asset('image/feltshoe.jpg')}});">
          <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
            <h2 class="title mb-3">From the Hands of Artisans to Yours</h2>
            <p class="summary">
              Every product tells a story of a remote village, a determined artisan, and a community's hope for the future. By choosing these items, you bring a part of the Himalayas with you. More than a purchase, it’s a connection.
            </p>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#artisan-slider" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#artisan-slider" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<style>
  #artisan-slider {
    max-height: 75vh; /* Limit slider height */
    overflow: hidden;
  }

  .slider-item {
    height: 65vh; /* Consistent slide height */
    background-size: cover;
    background-position: center;
    text-align: center;
  }

  .carousel-inner {
    height: 100%; /* Ensure full height usage */
  }

  .carousel-item .text-white {
    max-width: 70%; /* Set consistent text width */
    font-size: 1.1rem; /* Slightly larger font for readability */
    line-height: 1.6; /* Improve text spacing */
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); /* Enhance text visibility */
  }

  .carousel-item .title {
    color: #fff; /* Explicitly set the text color to white */

    font-size: 1.8rem; /* Align title size with other sections */
    font-weight: bold;
  }

  .carousel-item .summary {
    font-size: 1rem;
    color: #ddd; /* Lighter muted text */
    margin-bottom: 1rem;
  }

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .slider-item {
      height: 50vh; /* Adjust height for tablets */
    }

    .carousel-item .title {
      font-size: 1.5rem; /* Adjust title font size */
    }

    .carousel-item .text-white {
      font-size: 0.9rem; /* Reduce font size for smaller screens */
    }
  }

  @media (max-width: 480px) {
    .slider-item {
      height: 40vh; /* Further height reduction for mobile */
    }

    .carousel-item .title {
      font-size: 1.3rem; /* Mobile title size */
    }

    .carousel-item .text-white {
      font-size: 0.8rem; /* Mobile text size */
    }
  }
</style>
