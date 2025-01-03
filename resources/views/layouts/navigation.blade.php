<!-- ****************Desktop  Navigation**************** -->
<header class="desktop-navigation">
  <section class="transparent-bg">
    <div class="top-nav">
      <div class="free-deliever">Craft your need with Nuga</div>
      <div class="top-nav-info">
        <ul>
          <li>
            <i class="fa-solid fa-location-dot"></i>&nbsp;Kathmandu, Nepal
          </li>
          <li><i class="fa-solid fa-phone"></i>&nbsp;+977-0123456789</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="white-bg">
    <div class="navbar row justify-content-between">
      <div class="nav-contains row col-8">
        <div class="logo-container col-lg-3 col-1">
          <img src="{{ asset('image/logo-2.webp') }}" alt="Nuga" />
        </div>
        <ul class="col-4 col-lg-7 ">
          <li><a href="{{ route('home') }}">Home</a></li>
          <!-- <li>
            <a href="/prod-listing.html">Product</a>&nbsp;<i
              class="fa-solid fa-angle-down"
              style="font-size: 11px"></i>
            <div class="dropdown">
              <ul>
                <div class="hamburgur-menu">
                  <div class="row">
                    <div class="col-3">
                      <div class="heading-title">
                        <span class="nav-title"><a href="#" class="fw-semibold">Felt</a></span>
                        <ul>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-3">
                      <div class="heading-title">
                        <span class="nav-title"><a href="#" class="fw-semibold">Hemp</a>
                        </span>
                        <ul>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-3">
                      <div class="heading-title">
                        <span class="nav-title"><a href="#" class="fw-semibold">Pashmina</a>
                        </span>
                        <ul>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                          <li><a href="#">Small Size</a></li>
                          <li><a href="#">Medium Size</a></li>
                          <li><a href="#">Large Size</a></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-3">
                      <div class="ham-menu-img">
                        <img
                          src="/public/image/menu-banner-2.webp"
                          alt="banner image" />
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </li> -->
          <li><a href="{{ route('about') }}">About us</a></li>
      
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
      <div
        class="nav-icons col-3 row align-items-center justify-content-around">
        <ul class="col-8">
          <li class="row">
            <!-- <i class="menu-icon fa-solid fa-magnifying-glass col-2"></i> -->
            <div class="inquiry-btn-container col-10">
              <a href="{{ route('inquiry') }}">Inquiry Now</a>
            </div>
          </li>
          <!-- <li>
                <i class="menu-icon fa-solid fa-cart-shopping"></i>
                <div class="shop-tag">
                  <div class="shop-num">3</div>
                </div>
              </li> -->
        </ul>
      </div>
    </div>
  </section>
</header>
<!-- *****************Desktop Navigation********************** -->

<!-- **********************Mobile Navigation********************** -->
<style>
  .nav.mobile-navigation {
    position: relative;
  }

  .transparent-bg {
    background: #f8f9fa;
  }

  .top-nav {
    padding: 8px 15px;
    text-align: center;
  }

  .white-bg {
    background: white;
    padding: 10px 15px;
  }

  .navbar {
    padding: 10px 0;
  }

  .menu-toggle {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
  }

  .bar {
    width: 25px;
    height: 2px;
    background-color: #333;
    margin: 3px 0;
    transition: 0.3s;
  }

  .mobile-menu {
    position: fixed;
    top: 0;
    right: -300px;
    width: 300px;
    height: 100vh;
    background-color: white;
    transition: 0.3s;
    z-index: 1000;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
  }

  .mobile-menu.active {
    right: 0;
  }

  .menu-header {
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #eee;
  }

  .close-menu {
    font-size: 24px;
    cursor: pointer;
  }

  .menu-items {
    list-style: none;
    padding: 20px 0;
    margin: 0;
  }

  .menu-items li a {
    display: block;
    padding: 15px 20px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #eee;
    transition: 0.3s;
  }

  .menu-items li a:hover {
    background-color: #f8f9fa;
    padding-left: 25px;
  }
</style>
</head>

<body>
  <div class="nav mobile-navigation">
    <section class="transparent-bg">
      <div class="top-nav">
        <div class="free-deliever">Craft your need with Nuga</div>
      </div>
    </section>
    <section class="white-bg">
      <div class="navbar row justify-content-between">
        <div class="logo-container col-6">
          <img src="{{ asset('image/logo-2.webp') }}" alt="Nuga" />
        </div>
        <div class="menu-toggle col-4" id="menuToggle">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>

      <nav id="mobileMenu" class="mobile-menu">
        <div class="menu-header">
          <div class="logo-container">
            <img src="{{ asset('image/logo-2.webp') }}" alt="Nuga" />
          </div>
          <div class="close-menu" id="closeMenu">&times;</div>
        </div>
        <ul class="menu-items">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('gallery') }}">Gallery</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav>
    </section>
  </div>

  <script>
    document.getElementById('menuToggle').addEventListener('click', function() {
      document.getElementById('mobileMenu').classList.add('active');
    });

    document.getElementById('closeMenu').addEventListener('click', function() {
      document.getElementById('mobileMenu').classList.remove('active');
    });
  </script>
  <!-- **********************Mobile Navigation********************** -->