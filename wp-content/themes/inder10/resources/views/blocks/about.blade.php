<!-- about-->
<section class="section section-lg bg-transparent" id="about">
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
    <div class="row row-30 row-xxl">

      <div class="col-md-3 col-lg-2">
        @if ($subtitle)
        <h6>{{ $subtitle }}</h6>
        @endif
      </div>

      @if ($list)
      <div class="col-md-4 offset-lg-1">
      @foreach ($list as $index => $item)

        @php
          $item_icon = $item['list_icon'];
          $item_title = $item['list_title'];
          $item_text = $item['list_text'];
        @endphp

        @if ($index < 2)
        <div class="box-service">
          <div class="box-service-header d-flex align-items-baseline">
            <div class="icon icon-sm icomoon {{ $item_icon }}"></div>
            <h4>{{ $item_title }}</h4>
          </div>
          <div class="box-service-text">
            <p class="pe-xl-4">{{ $item_text }}</p>
          </div>
        </div>
        @endif

        @if ($index == 2)
        <div class="box-service box-service-mod">
          <div class="box-service-header d-flex align-items-baseline">
            <div class="icon icon-sm icomoon {{ $item_icon }}"></div>
            <h4>{{ $item_title }}</h4>
          </div>
          <div class="box-service-text">
            <p class="pe-xl-4">{{ $item_text }}</p>
          </div>
        </div>
        @endif

        @endforeach

      </div>

      <div class="col-md-4 offset-lg-1">
      @foreach ($list as $index => $item)
        @php
          $item_icon = $item['list_icon'];
          $item_title = $item['list_title'];
          $item_text = $item['list_text'];
        @endphp

        @if ($index > 2)
        <div class="box-service">
          <div class="box-service-header d-flex align-items-baseline">
            <div class="icon icon-sm icomoon {{ $item_icon }}"></div>
            <h4>{{ $item_title }}</h4>
          </div>
          <div class="box-service-text">
            <p class="pe-xl-4">{{ $item_text }}</p>
          </div>
        </div>
        @endif

      @endforeach
      </div>

      @endif

    </div>

    <div class="row row-md">
      <div class="col offset-md-3">

        @if ($link)
        <a class="btn btn-icon-arrow btn-primary btn-icon-right" href="{{ $link }}">
          <svg class="icon-fill" width="37" height="10" viewBox="0 0 37 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.225 7.284L30.509 7.9821L31.9052 9.4141L32.6212 8.716L31.225 7.284ZM35 5L35.6981 5.716L36.4325 5L35.6981 4.284L35 5ZM32.6212 1.284L31.9052 0.5859L30.509 2.0179L31.225 2.716L32.6212 1.284ZM32.6212 8.716L35.6981 5.716L34.3019 4.284L31.225 7.284L32.6212 8.716ZM35.6981 4.284L32.6212 1.284L31.225 2.716L34.3019 5.716L35.6981 4.284ZM35 4H0V6H35V4ZM0 6H25V4H0V6Z"></path>
          </svg>{{ $link_text }}
        </a>
        @endif

      </div>
    </div>


  </div>
</section>
