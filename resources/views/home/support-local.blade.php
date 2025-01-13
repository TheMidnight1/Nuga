<style>
  .local-ngo {
    background-color: #eaf4f0;
    padding: 40px 0;
  }
  .local-ngo .carousel-item {
    text-align: center;
  }
  .local-ngo img {
    border-radius: 15px;
    max-height: 300px;
    object-fit: cover;
    margin-bottom: 20px;
  }
  .local-ngo .quote {
    font-size: 1.2rem;
    font-style: italic;
    color: #555;
    margin-bottom: 15px;
  }
  .local-ngo .name-location {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
  }
  .local-ngo .slide-counter {
    font-size: 0.9rem;
    color: #777;
    position: absolute;
    bottom: 20px;
    right: 20px;
  }
</style>

<section class="local-ngo">
  <div class="container">
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/600x300" class="d-block w-100" alt="Placeholder Image">
          <p class="quote">"Empowering local communities is our mission."</p>
          <p class="name-location">John Smith, New York</p>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/600x300" class="d-block w-100" alt="Placeholder Image">
          <p class="quote">"Opportunities change lives for the better."</p>
          <p class="name-location">Anna Lee, Tokyo</p>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="https://via.placeholder.com/600x300" class="d-block w-100" alt="Placeholder Image">
          <p class="quote">"Education is the key to empowerment."</p>
          <p class="name-location">Carlos Diaz, São Paulo</p>
        </div>
      </div>
      <!-- Slide Counter -->
      <div class="slide-counter">1/3</div>
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<script>
  const carousel = document.querySelector('#testimonialCarousel');
  const slideCounter = document.querySelector('.slide-counter');
  const totalSlides = document.querySelectorAll('.carousel-item').length;

  carousel.addEventListener('slid.bs.carousel', function (e) {
    const currentSlide = e.to + 1;
    slideCounter.textContent = `${currentSlide}/${totalSlides}`;
  });
</script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
