<section id="fiber-craftsmanship" class="py-5" style="background-color: #f9f9f9;">
    <div class="container">
        <!-- First Row -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{ asset('image/craftmanship.png') }}" alt="From Fiber to Craftsmanship" class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-md-6 text-center text-md-left">
                <h2 class="title font-weight-bold mb-3">From Fiber to Craftsmanship</h2>
                <p class="summary text-muted">
                    The fiber travels from the highlands to the artisans’ hands, where it’s woven into functional products like bags, accessories, and more.
                </p>
                <p class="summary font-italic">
                    Each piece carries the spirit of the Himalayas and the dedication of its makers.
                </p>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 text-center text-md-left">
                <h2 class="title font-weight-bold mb-3">Crafting Dreams One Thread at a Time…</h2>
                <p class="summary text-muted">
                    Every raw fiber turns into beautiful products, each stitch representing a step toward stability and sustainability. These products are not just “things,” but stories shared across borders.
                </p>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="{{ asset('image/hemp.webp') }}" alt="Crafting Dreams" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .title {
        font-size: 1.8rem;
        color: #333;
    }

    .summary {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .image-container {
        overflow: hidden;
        position: relative;
    }

    .image-container img {
        transition: transform 0.3s ease-in-out;
    }

    .image-container:hover img {
        transform: scale(1.05);
    }
</style>
