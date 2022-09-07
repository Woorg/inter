<!--Portfolio-->
<section class="section section-xl bg-gray">
  <div class="container" data-lightgallery="group">
    <div class="row">
      <div class="col-xl-10">
        @if ($title)
        <h6>{{ $title }}</h6>
        @endif

        @if ($subtitle)
        <h2>{{ $subtitle }}</h2>
        @endif

      </div>
    </div>

    @if ($cases)

    @foreach (collect( $cases )->chunk(2) as $group)
      @php
        $open_div = $loop->index % 2 === 0 ? '<div class="row row-30 row-sm">' : '<div class="row row-30 row-lg">';
      @endphp

      {!! $open_div !!}

      @foreach ($group as $post)
        @php
          $open_div = $loop->index % 2 === 0 ? '<div class="col-md-5 col-xl-4 offset-xl-3">' : '<div class="col-md-6 col-xl-4 offset-md-1 offset-xl-1">';
          setup_postdata( $post );
          $inner_div = '<article class="thumbnail-modern">';
          $thumb_id = get_field('case_thumb', $post->ID);
        @endphp

        {{-- @dump($loop->iteration) --}}

        @if ($loop->parent->even)
          @php
            $open_div = $loop->index % 2 === 0 ? '<div class="col-md-7 col-xl-5 offset-xl-3 order-1 order-md-0">' : '<div class="col-md-4 col-xl-3 offset-md-1 order-0 order-md-1">';
          @endphp
          @if ($loop->even)
            @php
              $inner_div = '<article class="thumbnail-modern thumbnail-modern-offset-1">';
            @endphp
          @endif
        @endif

        {!! $open_div !!}
          {!! $inner_div !!}
            <a class="thumbnail-img" data-lightgallery="item" href="{{ get_the_post_thumbnail_url( $post->ID, 'full' ) }}">
            {!! wp_get_attachment_image($thumb_id, 'full') !!}
          </a>
            <h4 class="thumbnail-title"><a href="#">{!! get_the_title($post->ID) !!}</a></h4>
          </article>

        </div>

      @endforeach

      </div>
    @endforeach

    @php(wp_reset_postdata())

    @endif

    <div class="row row-md">

      @if ($link)
      <div class="col offset-xl-3"><a class="btn btn-icon-arrow btn-primary btn-icon-right" href="{{ $link }}">
          <svg class="icon-fill" width="37" height="10" viewBox="0 0 37 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.225 7.284L30.509 7.9821L31.9052 9.4141L32.6212 8.716L31.225 7.284ZM35 5L35.6981 5.716L36.4325 5L35.6981 4.284L35 5ZM32.6212 1.284L31.9052 0.5859L30.509 2.0179L31.225 2.716L32.6212 1.284ZM32.6212 8.716L35.6981 5.716L34.3019 4.284L31.225 7.284L32.6212 8.716ZM35.6981 4.284L32.6212 1.284L31.225 2.716L34.3019 5.716L35.6981 4.284ZM35 4H0V6H35V4ZM0 6H25V4H0V6Z"></path>
          </svg>{{ $link_text }}</a></div>
      @endif

    </div>



  </div>
</section>
