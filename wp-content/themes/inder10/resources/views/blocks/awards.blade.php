<!-- My Awards-->
<section class="section section-xl bg-default">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-3 col-lg-2">
        @if ($title)
        <h6>{{ $title }}</h6>
        @endif

      </div>

      @if ($list)
      <div class="col-md-9 offset-lg-1">
        <div class="row row-30 row-lg-70">
        @foreach ($list as $item)
          <div class="col-sm-6 col-md-4">
            <div class="box-award">
              <div class="box-award-body">
                {!! wp_get_attachment_image($item['list_icon'], 'full') !!}
              </div>
              <h4 class="box-award-title">{{ $item['list_title'] }}</h4>
            </div>
          </div>
        @endforeach
        </div>
      </div>
      @endif

    </div>
  </div>
</section>
