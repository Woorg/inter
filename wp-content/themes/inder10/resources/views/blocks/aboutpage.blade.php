<!-- About-->
<section class="section section-xl bg-default">
  <div class="container">
    <div class="row">
      <div class="col-xl-10">
        @if ($title)
        <h6>{{ $title }}</h6>
        @endif

        @if ($text)
        <h2>{{ $text }}</h2>
        @endif

      </div>
    </div>
    <div class="row row-sm row-30">

      <div class="col-lg-10 offset-lg-2">

        @if ($text_second)
        <p class="pe-lg-5">{{ $text_second }}</p>
        @endif

        <div class="row row-30 row-md align-items-center">

          @if ($image)
          <div class="col-md-6">
            {!! wp_get_attachment_image($image, 'full') !!}
          </div>
          @endif

          @if ($video)

          <div class="col-md-4 offset-md-1 text-center text-md-start">
            <!-- Video-->
            <div class="video-wrap mt-md-5">
              <div class="video">
                @if ($video_thumb)
                {!! wp_get_attachment_image($video_thumb, 'full', null, ['class' => 'video-image']) !!}
                @endif
                <!-- Video button-->
                <a class="video-btn" href="{{ $video }}" data-lightgallery="item">
                  <svg class="video-btn-svg" width="45" height="45" viewbox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 37.5V7.5L34.5 22.5L13.5 37.5Z" stroke-width="2" stroke-linejoin="round"></path>
                  </svg></a>
              </div>
            </div>
          </div>
          @endif

        </div>
      </div>

    </div>
  </div>
</section>
