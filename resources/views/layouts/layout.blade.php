<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nuga')</title>

      <!-- SEO Meta Tags -->
      <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description of your site or page.')">
    <meta name="keywords" content="@yield('meta_keywords', 'keyword1, keyword2, keyword3')">
    <meta name="author" content="@yield('meta_author', 'Your Name or Company')">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Default OG Title')">
    <meta property="og:description" content="@yield('og_description', 'Default OG Description')">
    <meta property="og:image" content="@yield('og_image', asset('images/logo.png'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="@yield('og_type', 'website')">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">
    <meta name="twitter:title" content="@yield('twitter_title', 'Default Twitter Title')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Default Twitter Description')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/logo.png'))">
    
    <link rel="icon" href="asset('image/favicon.png')" type="image/png" />

    <!-- CSS Files -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0" />
    <link rel="stylesheet" href="{{ asset('css/responsivness.css') }}?v=1.0" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">


</head>

<body>
    @include('layouts.navigation') <!-- Include navigation -->

    <main>
        @yield('content') <!-- Placeholder for page content -->
    </main>

    @include('layouts.footer') <!-- Include footer -->
    <!-- JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Nuga",
  "url": "{{ url('/') }}",
  "description": "Nuga offers hemp-based products and supports local entrepreneurship. Explore sustainable craftsmanship with Nuga's eco-friendly products.",
  "logo": "{{ asset('images/logo.png') }}",
  "sameAs": [
    "https://www.facebook.com/nuga",
    "https://www.instagram.com/nuga"
  ]
}
</script>


</body>

</html>