<!-- Experience-->
<section class="section section-xl bg-gray">
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
            <p>{{ $item['list_text'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
      @endif

      @if ($image)
      <div class="col-md-5 col-lg-3 offset-lg-1 align-self-md-end text-center text-lg-start">
        {!! wp_get_attachment_image($image, 'full', null, ['class' => 'mt-4 mt-lg-0 mb-lg-5 ms-lg-n5']) !!}
      </div>
      @endif
    </div>
  </div>
</section>
