<section class="white-bg py-3">
      <div class="trending-tab-section" data-aos="fade-up">
        <div class="tabs-trending gap-5">
          <div class="tab-trending active" data-tab="new">New arrivals</div>
          <div class="tab-trending" data-tab="sale">Sale items</div>
          <div class="tab-trending" data-tab="best">Best sellers</div>
        </div>

        <div id="new" class="tab-trending-content active row">
          <div class="item col-12 col-md-2">
            <img src="{{ asset('image/product-1.webp') }}" alt="New Item 1" />
            <h4>New Item 1</h4>
            <a href="/product-detail.html"><div class="round-btn">View Detail</div></a>
          </div>
          <div class="item col-12 col-md-2">
            <img src="{{ asset('image/product-2.webp') }}" alt="New Item 2" />
            <h4>New Item 2</h4>
            <a href="/product-detail.html"><div class="round-btn">View Detail</div></a>
          </div>
          <div class="item col-12 col-md-2">
            <img src="{{ asset('image/product-3.webp') }}" alt="New Item 3" />
            <h4>New Item 3</h4>
            <a href="/product-detail.html"><div class="round-btn">View Detail</div></a>
          </div>
          <div class="item col-12 col-md-2">
            <img src="{{ asset('image/product-4.webp') }}" alt="New Item 4" />
            <h4>New Item 4</h4>
            <a href="/product-detail.html"><div class="round-btn">View Detail</div></a>
          </div>
        </div>

        <div id="sale" class="tab-trending-content">
          <div class="item">
            <img src="{{ asset('image/sale-product-1.webp') }}" alt="Sale Item 1" />
            <h4>Sale Item 1</h4>
            <div class="round-btn">
              View Detail
            </div>
          </div>
          <div class="item">
            <span class="badge">-20%</span>
            <img src="{{ asset('image/sale-product-2.webp') }}" alt="Sale Item 2" />
            <h4>Sale Item 2</h4>
            <div class="round-btn">
              View Detail
            </div>
          </div>
        </div>

        <div id="best" class="tab-trending-content">
          <div class="item">
            <img src="{{ asset('image/best-product-1.webp') }}" alt="Best Item 1" />
            <h4>Best Item 1</h4>
            <div class="round-btn">View Detail</div>
          </div>
          <div class="item">
            <img src="{{ asset('image/best-product-2.webp') }}" alt="Best Item 2" />
            <h4>Best Item 2</h4>
            <div class="round-btn">View Detail</div>
          </div>
        </div>
      </div>
    </section>