<!-- Content Sections -->
<section class="py-5">
  <div class="container">
    <!-- Section 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2 class="mb-3">Impacts Beyond Product</h2>
        <p>
            With every purchase, you are supporting families,preserving traditions, and promoting sustainability in a developing nation
        </p>
      </div>
      <div class="col-lg-6">
        <img src="{{asset('image/women-1.jpeg')}}" alt="Empowering Artisans" class="img-square">
      </div>
    </div>
    <!-- Section 2 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <h2 class="mb-3">Good for You , Good for the Planet</h2>
        <p>
        Natural fibers like hemp and woolen felt offer more than sustainability; they're better for our health. Free from synthetic chemicals, these materials are safe for daily use and gentle on the skin.        </p>
      </div>
      <div class="col-lg-6 order-lg-1">
        <img src="{{asset('image/goodhemp.webp')}}" alt="Sustainability First" class="img-square">
      </div>
    </div>
    <!-- Section 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <h2 class="mb-3">A Healthier Lifestyle: PFA-Free Fabrics</h2>
        <p>Our hemp and felt products are free from PFAs, or ‘forever chemicals,’ often found in synthetic fabrics. Choosing PFA-free items reduces exposure to substances linked to health risks, making these products ideal for conscious consumers.

</p>
      </div>
      <div class="col-lg-6">
        <img src="{{asset('image/hempfabric.jpg')}}" alt="A Healthier Lifestyle: PFA-Free Fabrics" class="img-square">
      </div>
    </div>
    <!-- Section 4 -->
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2">
        <h2 class="mb-3">The Impact Beyond Borders</h2>
        <p>Synthetic fabrics shed microplastics, which pollute oceans and harm ecosystems. Our natural fibers, free from plastics, offer an eco-friendly alternative that doesn’t contribute to this pollution.</p>
      </div>
      <div class="col-lg-6 order-lg-1">
        <img src="{{asset('image/felt.jpg')}}" alt="The Impact Beyond Borders" class="img-square">
      </div>
    </div>
  </div>
</section>

<style>
  /* Ensures images are square and scaled properly */
  .img-square {
    width: 200px; /* Adjust as needed for "small" */
    height: 200px;
    object-fit: cover; /* Crops the image to fit */
    border-radius: 10px; /* Optional: Rounded corners */
  }

  /* Existing styles */
  .bg-cover {
    background-size: cover;
    background-position: center;
  }

  .carousel-inner {
    height: 100%;
  }

  .carousel-item .text-white {
    max-width: 75%;
    font-size: 1rem;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
  }

  @media (max-width: 768px) {
    .carousel-item .text-white {
      font-size: 0.9rem;
    }

    section h2 {
      font-size: 1.5rem;
    }

    section p {
      font-size: 0.9rem;
    }

    .img-square {
      width: 150px; /* Smaller size for mobile */
      height: 150px;
    }
  }
</style>
