<style>

    .image-slider {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    .image-slider img {
        border-radius: 15px;
        width: 100%;
        height: auto;
    }
    .slider-container {
        display: flex;
        transition: transform 0.5s ease-in-out;
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
    .custom-btn {
        border: none;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 50px;
        color: white;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(99, 102, 241, 0.2);
    }
    .custom-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
    }
    .decorative-circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(50px);
        z-index: 0;
    }
    .circle-1 {
        width: 300px;
        height: 300px;
        background: rgba(99, 102, 241, 0.1);
        top: -100px;
        right: -100px;
    }
    .circle-2 {
        width: 400px;
        height: 400px;
        background: rgba(139, 92, 246, 0.1);
        bottom: -150px;
        left: -150px;
    }
    .text-secondary {
        color: #6c757d;
    }
    .text-primary {
        color: #4f46e5;
    }
</style>

<section class="py-5 position-relative">
    <!-- Decorative Elements -->
    <div class="decorative-circle circle-1"></div>
    <div class="decorative-circle circle-2"></div>

    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Content Column -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="text-center text-lg-start">
                    <div class="section-header">
                        <p class="tagline" style="font-size:42px">
                        Crafting Dreams Into Reality
                        </p>
                    </div>
            
                    
                    <p class="lead mb-4 text-secondary">
                        At the heart of our atelier, creativity flows boundlessly. Each piece is crafted with precision, telling a story of passion and artistic vision.
                    </p>
                    
                    <p class="lead mb-4 text-secondary">
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
                        <img src="{{asset('image/laxmi.webp')}}" alt="Slide 1">
                        <img src="{{asset('image/dreams-hemp.png')}}" alt="Slide 2">
                        <!-- <img src="{{asset('image/laxmi3.webp')}}" alt="Slide 3"> -->
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <span class="slider-dot" onclick="changeSlide(0)"></span>
                    <span class="slider-dot" onclick="changeSlide(1)"></span>
                    <span class="slider-dot" onclick="changeSlide(2)"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slider-container img');
    const dots = document.querySelectorAll('.slider-dot');

    function updateSlider() {
        const width = slides[0].clientWidth;
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
