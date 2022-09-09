<!-- skills-->
<section class="section section-xl bg-transparent">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-md-3 col-lg-2">
      @if ($title)
        <h6>{{ $title }}</h6>
      @endif
      </div>

      @if ($list)
      <div class="col-md-9 col-lg-5 offset-lg-1">

        @foreach ($list as $item)
        <div class="box-skill">
          <div class="box-skill-header">
            <h4>{{ $item['list_title'] }}</h4>
          </div>
          <div class="box-skill-text">
            {!! $item['list_text'] !!}
          </div>
        </div>
         @endforeach


      </div>
      @endif

      @if ($video_link)
      <div class="col-md-5 col-lg-3 offset-lg-1 text-center">
        <!-- Video-->
        <div class="video-wrap">
          @if ($image)
          {!! wp_get_attachment_image($image, 'full', null, ['class' => 'video-aside-img']) !!}
          @endif

          <div class="video">

            @if ($thumb)
            {!! wp_get_attachment_image($thumb, 'full', null, ['class' => 'video-image']) !!}
            @endif

            <!-- Video button--><a class="video-btn" href="{{ $video_link }}" data-lightgallery="item">
              <svg class="video-btn-svg" width="45" height="45" viewbox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 37.5V7.5L34.5 22.5L13.5 37.5Z" stroke-width="2" stroke-linejoin="round"></path>
              </svg></a>

          </div>

        </div>

      </div>
      @endif

    </div>
  </div>
</section>

<div class="container mt-0">
  <hr>
</div>
