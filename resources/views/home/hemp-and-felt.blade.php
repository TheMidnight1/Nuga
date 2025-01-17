<div id="artisan-slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="d-flex align-items-center justify-content-center slider-item" style="background-image: url({{asset('image/hempplant.jpg')}});">
        <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
          <h2>Hemp: A Plant-Based, Vegan Fiber</h2>
          <p>Hemp is entirely plant-based, making it a vegan-friendly and cruelty-free option. With low environmental impact, it supports sustainable farming and appeals to eco-conscious lifestyles.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex align-items-center justify-content-center slider-item" style="background-image: url({{asset('image/finalfeltnobg.png')}});">
        <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
          <h2>Felt Makers: Adding Warmth to Tradition</h2>
          <p>Like hemp, woolen felt is made with love and skill. Artisans carefully craft felt decorations, bringing warmth and smiles to families.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="d-flex align-items-center justify-content-center slider-item" style="background-image: url({{asset('image/feltshoe.jpg')}});">
        <div class="text-white p-4 bg-dark bg-opacity-50 rounded">
          <h2>From the Hands of Artisans to Yours</h2>
          <p>Every product tells a story of a remote village, a determined artisan, and a community's hope for the future. By choosing these items, you bring a part of the Himalayas with you. More than a purchase, it’s a connection.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#artisan-slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#artisan-slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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
