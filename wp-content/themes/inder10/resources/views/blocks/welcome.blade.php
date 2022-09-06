<!--Into-->
<section class="section section-inset-1 section-single-inner bg-transparent">
  <div class="container">
    <div class="row row-50">
      <div class="col-lg-6 col-xl-8">
        @if ($title)
        <h6>{{ $title }}</h6>
        @endif

        @if ($text)
        <h1 class="pe-xl-5">{{ $text }}</h1>
        @endif

        <div class="text-center text-lg-start">
          <div class="link-arrow-down" data-custom-scroll-to="about">
            <svg class="icon-stroke" width="30" height="102" viewbox="0 0 30 102" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 100L29 85.44M15 100L1 85.44M15 100V0" stroke-width="2"></path>
            </svg>
          </div>
        </div>

      </div>

      <div class="col-lg-6 col-xl-4 pt-lg-5 text-center text-lg-end">

        @if ($image)
        {!! wp_get_attachment_image($image, 'full', null, ['class' => 'mt-xxl-n2'] ) !!}
        @endif

      </div>

    </div>
  </div>
</section>

<div class="container mt-0">
  <hr>
</div>
