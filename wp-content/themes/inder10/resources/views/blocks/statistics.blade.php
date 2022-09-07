<!-- Statistics-->
<section class="section section-xl bg-transparent">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-md-3 col-lg-2">
      @if ($title)
        <h6>{{ $title }}</h6>
      @endif

      </div>

      <div class="col-md-9 offset-lg-1">
        <div class="row row-50 row-md-70">

        @if ($list)
        @foreach ($list as $item)
          @php
            $start_div = $loop->index % 2 === 0 ? '<div class="col-sm-6 col-xl-4">' : '<div class="col-sm-6 col-xl-5 offset-xl-2">';
            $end_div = $loop->index % 2 === 0 ? '</div>' : '</div>' ;

            $inner_div = $loop->index % 2 === 0 ? '<div class="box-counter text-center text-sm-start">' : '<div class="box-counter text-center text-sm-start ms-xxl-5">';
          @endphp

          {!! $start_div !!}
            <!--Counter-->
            {!! $inner_div !!}
              <div class="box-counter-main">
                <div class="counter">{{ $item['num'] }}</div>
                @if ($item['sign'])
                <div class="counter-postfix">{{ $item['sign'] }}</div>
                @endif
              </div>
              <div class="box-counter-divider"></div>
              <h4 class="box-counter-title">{{ $item['text'] }}</h4>
            </div>
          {!! $end_div !!}

        @endforeach
        @endif

        </div>
      </div>


    </div>
  </div>
</section>
