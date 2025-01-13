  <style>
    body {
      background-color: #f8f5f1;
      font-family: 'Arial', sans-serif;
    }
    .sale-banner {
      text-align: center;
      padding: 50px;
      position: relative;
      overflow: hidden;
    }
    .circle-left,
    .circle-right {
      width: 50%;
      height: 100%;
      position: absolute;
      border-radius: 50%;
      top: 0;
      overflow: hidden;
    }
    .circle-left {
      left: -10%;
      background: #fff;
    }
    .circle-right {
      right: -10%;
      background: #fff;
    }
    .sale-content {
      z-index: 1;
      position: relative;
    }
    .sale-text {
      margin: 20px 0;
      font-size: 2rem;
      font-weight: 300;
    }
    .discount {
      font-size: 3rem;
      font-weight: 600;
    }
    .shop-now {
      text-decoration: none;
      color: white;
      background: black;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .stars {
      position: absolute;
      bottom: 10%;
      left: 45%;
      font-size: 1.5rem;
      color: gold;
    }
    .img-left,
    .img-right {
      width: 50%;
      position: absolute;
      height: 100%;
      object-fit: cover;
      z-index: 0;
    }
    .img-left {
      left: 0;
    }
    .img-right {
      right: 0;
    }
  </style>
  <div class="sale-banner">
    <div class="circle-left"></div>
    <div class="circle-right"></div>
    <img src="left-image.jpg" alt="Left" class="img-left">
    <img src="right-image.jpg" alt="Right" class="img-right">
    <div class="sale-content">
      <h1>SPECIAL SALE</h1>
      <p class="sale-text">Take up to</p>
      <p class="discount">35% OFF</p>
      <a href="#" class="shop-now">SHOP NOW</a>
    </div>
    <div class="stars">
      &#9733; &#9733; &#9733; &#9733; &#9733;
    </div>
  </div>

