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
            <ul class="col-4 col-lg-7">
              <li><a href="/index.html">Home</a></li>
              <li>
                <a href="/prod-listing.html">Product</a>&nbsp;<i
                  class="fa-solid fa-angle-down"
                  style="font-size: 11px"
                ></i>
                <div class="dropdown">
                  <ul>
                    <div class="hamburgur-menu">
                      <div class="row">
                        <div class="col-3">
                          <div class="heading-title">
                            <span class="nav-title"
                              ><a href="#" class="fw-semibold">Felt</a></span
                            >
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
                            <span class="nav-title"
                              ><a href="#" class="fw-semibold">Hemp</a>
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
                            <span class="nav-title"
                              ><a href="#" class="fw-semibold">Pashmina</a>
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
                              alt="banner image"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </ul>
                </div>
              </li>
              <li>
                <a href="#">About</a>&nbsp;<i
                  class="fa-solid fa-angle-down"
                  style="font-size: 11px"
                ></i>
                <div class="dropdown">
                  <div class="small-menu">
                    <ul>
                      <li><a href="/static-page.html">About us</a></li>
                      <li><a href="/blog-listing.html">Blog</a></li>
                      <li><a href="#">Our team</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li><a href="/contact.html">Contact</a></li>
            </ul>
          </div>
          <div
            class="nav-icons col-3 row align-items-center justify-content-around"
          >
            <ul class="col-8">
              <li class="row">
                <i class="menu-icon fa-solid fa-magnifying-glass col-2"></i>
                <div class="inquiry-btn-container col-10">
                  <a href="#">Inquiry Now</a>
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
              <img src="/public/image/logo-2.webp" alt="Nuga" />
            </div>
            <div class="close-menu" id="closeMenu">&times;</div>
          </div>
          <div class="tab-buttons">
            <div class="tab-trending-btn active" data-target="menu-content">
              Menu
            </div>
            <div class="tab-trending-btn" data-target="info-content">Info</div>
          </div>
          <div class="tab-content">
            <!-- Menu Content -->
            <div id="menu-content" class="tab-panel active">
              <ul class="menu-items">
                <li class="has-submenu">
                  <a href="javascript:void(0)">Pages <span>+</span></a>
                  <ul class="submenu">
                    <li class="has-submenu-child">
                      <a href="javascript:void(0)">About <span>+</span></a>
                      <ul class="submenu-child">
                        <li><a href="#">About One</a></li>
                        <li><a href="#">About Two</a></li>
                        <li><a href="#">About Three</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Event</a></li>
                  </ul>
                </li>
                <!-- Other Menu Items -->
              </ul>
            </div>

            <!-- Info Content (this can be any static content you want to display) -->
            <div id="info-content" class="tab-panel">
              <div class="row pb-3 align-items-center">
                <i
                  class="col-2 footer-icon-contact fa-solid fa-location-dot"
                ></i
                ><span class="col-10 footer-contact address"
                  >203 Fake St. Mountain View, San Francisco, California,
                  USA</span
                >
              </div>
              <div class="row pb-3 align-items-center">
                <i class="col-2 footer-icon-contact fa-solid fa-phone"></i>
                <span class="col-10 footer-contact phone">+2 392 3929 210</span>
              </div>
              <div class="row pb-3 align-items-center">
                <i class="col-2 footer-icon-contact fa-solid fa-envelope"></i>
                <span class="col-10 footer-contact email">
                  info@yourdomain.com</span
                >
              </div>
              <div class="social-media d-flex gap-3 align-items-center">
                <a href="#"
                  ><i class="social-icon fa-brands fa-facebook footer-icon"></i
                ></a>
                <a href="#"
                  ><i class="social-icon fa-brands fa-instagram footer-icon"></i
                ></a>
                <a href="#"
                  ><i class="social-icon fa-brands fa-twitter footer-icon"></i
                ></a>
                <a href="#"
                  ><i class="social-icon fa-brands fa-linkedin footer-icon"></i
                ></a>
              </div>
            </div>
          </div>
        </nav>
      </section>
    </div>
    <!-- **********************Mobile Navigation********************** -->
