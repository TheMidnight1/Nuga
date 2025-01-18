

<section class="py-5 position-relative">
    <!-- Decorative Elements -->
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>

    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Content Column -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="text-center text-lg-start">
                <h2 class="font-weight-bold mb-3">Crafting Dreams Into Reality</h2>
                
                    <p class="summary text-muted">
                        At the heart of our atelier, creativity flows boundlessly. Each piece is crafted with precision, telling a story of passion and artistic vision.
                    </p>

                    <p class="summary text-muted">
                        From skilled hands to innovative minds, every creation is a masterpiece of dedication and craftsmanship.
                    </p>

                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">
                            <span>Discover More</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slider Column -->
            <div class="col-lg-6 position-relative" data-aos="fade-left">
                <div class="image-slider">
                    <div class="slider-container">
                        <img src="{{ asset('image/laxmi.webp') }}" alt="Slide 1">
                        <img src="{{ asset('image/dreams-hemp.png') }}" alt="Slide 2">
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <span class="slider-dot" onclick="changeSlide(0)"></span>
                    <span class="slider-dot" onclick="changeSlide(1)"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .image-slider {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    .slider-container {
        display: flex;
        width: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .slider-container img {
        width: 100%; /* Ensure each image takes the full width of the container */
        height: auto;
        flex-shrink: 0;
        border-radius: 15px;
    }

    .slider-dot {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin: 0 5px;
        background-color: #d1d5db;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .slider-dot.active {
        background-color: #72a499;
    }
</style>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slider-container img');
    const dots = document.querySelectorAll('.slider-dot');

    function updateSlider() {
        const width = document.querySelector('.image-slider').clientWidth;
        document.querySelector('.slider-container').style.transform = `translateX(-${currentIndex * width}px)`;
        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentIndex].classList.add('active');
    }

    function changeSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    function autoScroll() {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
    }

    setInterval(autoScroll, 3000); // Auto-scroll every 3 seconds
    updateSlider();
</script>
