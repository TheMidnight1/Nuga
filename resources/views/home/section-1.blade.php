<style>
    .section-container {
      background-color: #eaf4e4; /* Light green background */
      padding: 60px 20px;
    }
    .section-title {
      font-size: 2rem;
      font-weight: bold;
    }
    .section-text {
      font-size: 1.2rem;
      color: #555;
    }
    .image-container img {
      border-radius: 8px;
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <section class="section-container py-2">
      <div class="row align-items-center">
        <!-- Image Section -->
        <div class="left-col col-12 col-lg-6">
        <div
            class="about-img d-flex justify-content-center align-items-center p-3"
          >
          <img src="{{ asset('image/began.png') }}" alt="Himalayan Region" class="img-fluid shadow">
          </div>
        
        </div>
        <!-- Text Section -->
        <div class="col-md-6">
          <h1 class="section-title">Where the Journey Begins</h1>
          <p class="section-text mt-4">
            High in the remote trans-Himalayan region of Nepal, the story of hemp begins. In remote villages like Mugu, hemp isn’t just a crop, it’s a lifeline for families who’ve cultivated it for generations.
          </p>
          <p class="section-text mt-3">
            It’s where tradition meets sustainability.
          </p>
        </div>
        
      </div>
  </section>