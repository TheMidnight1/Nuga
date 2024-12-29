@extends('layouts.layout') <!-- Extends the base layout -->

@section('title', 'Nuga - Contact')

@section('content')
    <section class="white-bg">
      <div class="breadcrumbs">
        <h1 class="title">Contact Us</h1>
        <div class="breadcrumbs-contains">
          <ul>
            <li>Home</li>
            <li class="icon"><i class="fa-solid fa-chevron-right"></i></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="white-bg my-2 contact-section">
      <div class="tagline text-center" data-aos="fade-up">Keep in touch</div>
      <div class="summary text-center"  data-aos="fade-up">
        Been tearing your hair out to find the perfect gift for your loved ones?
        Try visiting our nationwide local stores. You can also contact us to
        become partner or distributor. Call us, send us an email or make an
        appointment now.
      </div>
      <style>
    .info-section {
      padding: 20px 0;
    }
    .info-section .item {
      margin-bottom: 20px;
      text-align: left;
    }
    .info-section .title {
      font-size: 18px;
      margin-bottom: 10px;
    }
    .info-section .desc {
      color: #666;
    }
    @media (max-width: 768px) {
      .info-section {
        text-align: center;
      }
      .info-section .item {
        margin-bottom: 30px;
        text-align: center;
      }
      /* Remove margin from last item */
      .info-section .item:last-child {
        margin-bottom: 0;
      }
    }
  </style>
</head>
<body>
    <div class="row justify-content-between info-section align-items-center" data-aos="fade-up">
      <div class="item col-12 col-md-3">
        <div class="title">Address</div>
        <div class="desc">
          <i class="fa-solid fa-location-dot"></i>&nbsp;Kathmandu, Nepal
        </div>
      </div>
      <div class="item col-12 col-md-3">
        <div class="title">Contact</div>
        <div class="desc">
          <i class="fa-solid fa-phone"></i>&nbsp;9841000000
          <br />
          <i class="fa-solid fa-envelope"></i>&nbsp;abc@gmail.com
        </div>
      </div>
      <div class="item col-12 col-md-3">
        <div class="title">HOUR OF OPERATION</div>
        <div class="desc">
          <i class="fa-regular fa-clock"></i>&nbsp;Sun-Sat : 9:00 - 21:00
        </div>
      </div>
  </div>
      <div class="map-container" style="width: 100%; height: 400px">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093176!2d144.95373521550363!3d-37.81627974202132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1df5c0b%3A0x5045675218ce6e0!2zTGFuZG1hcmsgU3QsIFZpY3RvcmlhLCBBdXN0cmFsaWE!5e0!3m2!1sen!2sus!4v1665747162364!5m2!1sen!2sus"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
      <div class="inquiry-section py-5" data-aos="fade-up">
        <form action="">
          <div class="row">
            <div class="form-group mb-3 col-12 col-md-6">
              <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                placeholder="Name*"
                required
              />
            </div>

            <div class="form-group mb-3 col-12 col-md-6">
           
              <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                placeholder="Address*"
                required
              />
            </div>
          </div>

          <div class="row">
            <div class="form-group mb-3 col-12 col-md-6">
             
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Email*"
                required
              />
            </div>

            <div class="form-group mb-3 col-12 col-md-6">
              <input
                type="text"
                class="form-control"
                id="phone"
                name="phone"
                placeholder="Phone*"
                required
              />
            </div>
          </div>
          <div class="form-group mb-3">
            <textarea
              class="form-control"
              id="message"
              name="message"
              rows="5"
              placeholder="Enter your message"
              required
            ></textarea>
          </div>
          <div class="btn-container">
          <button type="submit" class="btn round-btn">Send Message</button>
          </div>
        </form>
      </div>
    </section>

@endsection