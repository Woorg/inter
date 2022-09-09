<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-30 align-items-md-center">

      @if ($image)
      <div class="col-md-5 text-center text-md-start">
        {!! wp_get_attachment_image($image, 'full') !!}
      </div>
      @endif

      @if ($title)
      <div class="col-md-6 offset-md-1">
        <div class="box-aside-1">
          @if ($title)
          <h6>{{ $title }}</h6>
          @endif
          @if ($subtitle)
          <h2>{{ $subtitle }}</h2>
          @endif

        </div>

      </div>
      @endif

    </div>
    <div class="row row-xl justify-content-center">
      @if ($list)

      @php
        $i = 0;
        $c = 2;
      @endphp
      <div class="col-xl-8">

        <div class="accordion accordion-classic" id="accordion-1">
          @foreach ($list as $item)
            @php
              $i++;
              $c++;
            @endphp

          <div class="accordion-item">
            <div
              class="accordion-header"
              id="card-head-{{ $loop->iteration }}">

              <button
                class="accordion-button {{ $button_collapsed = !$loop->first ? 'collapsed' : '' }}"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#card-body-{{ $c }}"
                aria-expanded="{{ $expanded = !$loop->first ? 'false' : 'true' }}"
                aria-controls="card-body-{{ $c }}">
                @if ($item['list_icon'])
                  <span class="icon icon-sm icomoon {{ $item['list_icon'] }}"></span>
                @endif

                @if ($item['list_title'])
                  <span class="h4">{{ $item['list_title'] }}</span>
                @endif
              </button>

            </div>

            <div
              class="accordion-collapse
              {{ $collapse = !$loop->first ? 'collapse' : '' }}
              {{ $show = $loop->first ? 'show' : '' }} "
              id="card-body-{{ $c }}"
              aria-labelledby="card-head-{{ $loop->iteration }}"
              data-bs-parent="#accordion-1">

              <div class="accordion-body">
                @if ($item['list_text'])
                <p>{{ $item['list_text'] }}</p>
                @endif

                @if ($item['list_inner'])
                <ul class="list-marked">
                  @php
                    $list_inner = $item['list_inner'];
                  @endphp
                  @foreach ($list_inner as $list_item)
                    <li>{!! $list_item['list_item'] !!}</li>
                  @endforeach
                </ul>
                @endif

                @if ($item['list_text_second'])
                <p>{{ $item['list_text_second'] }}</p>
                @endif
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
      @endif
    </div>
  </div>
</section>
