<!-- Reviews-->
<section class="section section-xl bg-gray">
  <div class="container">
    <div class="row row-30 justify-content-center justify-content-md-start">
      <div class="col-md-3 col-lg-2">
        @if ($title)
        <h6>500+ LOYAL CLIENTS</h6>
        @endif

        @if ($subtitle)
        <h2 class="h2-offset-narrow">{{ $subtitle }}</h2>
        @endif

      </div>

      <div class="col-md-8 offset-lg-1">
        @if ($reviews)
        <div class="owl-carousel owl-theme owl-carousel-style-2" data-items="1" data-owl="{&quot;nav&quot;:true,&quot;autoplayTimeout&quot;:3500,&quot;margin&quot;:20,&quot;stagePadding&quot;:0}">
          @foreach ($reviews as $review)
          <div class="quote-classic">
            <div class="quote-body">
              <div class="quote-mark mt-n2"></div>
              <div class="quote-text">
                <p class="q h4">{{ $review['reviews_text'] }}</p>
              </div>
            </div>

            @if ($review['reviews_name'])
            <div class="quote-footer">
              <p class="quote-cite">-  {{ $review['reviews_name'] }}</p>
            </div>
            @endif
          </div>
          @endforeach

        </div>
        @endif
      </div>

    </div>
  </div>
</section>
