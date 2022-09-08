<!--Portfolio-->
<section class="section section-xl bg-default section-bottom-0">
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

    @php
      $collection = collect($cases);
      $chunks = $collection->chunk(2);
    @endphp

      {{-- first --}}

      @foreach ($chunks as $group)

        @if ($loop->first)
          <div class="row row-30 row-md">
        @else
          <div class="row row-30 row-lg">
        @endif

        @foreach ($group as $post)
          @php
            $open_div = $loop->index % 2 === 0 ? '<div class="col-md-5 col-xl-4 offset-xl-2">' : '<div class="col-md-6 col-xl-4 offset-md-1 offset-xl-1">';
            // setup_postdata( $post );
            $inner_div = '<article class="thumbnail-modern">';
            $thumb_id = get_field('case_thumb', $post->ID);
          @endphp

          @if ($loop->parent->even)
            @php
              $open_div = $loop->index % 2 === 0 ? '<div class="col-md-7 col-xl-5 offset-xl-2 order-1 order-md-0">' : '<div class="col-md-4 col-xl-3 offset-md-1 order-0 order-md-1">';
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
                @if ($thumb_id)
                  {!! wp_get_attachment_image( $thumb_id, 'full' ) !!}
                @endif
            </a>
              <h4 class="thumbnail-title"><a href="#">{!! get_the_title($post->ID) !!}</a></h4>
            </article>
          </div>

         {{--  @php
            wp_reset_postdata();
          @endphp --}}

        @endforeach

        </div>

        @if ($loop->index >= 1)
          @break
        @endif
      @endforeach

      {{-- second --}}

      @foreach ($collection->chunk(1) as $group)

        @if ($loop->index % 4 === 0)
          @if ($loop->index === 0)
          @else
            <div class="row row-30 row-lg">
              @foreach ($group as $post)
                @php
                  // setup_postdata( $post );
                  $thumb_id = get_field('case_thumb', $post->ID);
                @endphp
                <div class="col-md-10 col-xl-7 offset-md-2 offset-xl-4">
                  <article class="thumbnail-modern">
                    <a class="thumbnail-img" data-lightgallery="item" href="{{ get_the_post_thumbnail_url( $post->ID, 'full' ) }}">
                    @if ($thumb_id)
                    {!! wp_get_attachment_image( $thumb_id, 'full' ) !!}
                    @endif
                    </a>
                    <h4 class="thumbnail-title"><a href="#">{!! get_the_title($post->ID) !!}</a></h4>
                  </article>
                </div>

                {{-- @php
                  wp_reset_postdata()
                @endphp --}}

              @endforeach
            </div>
          @endif
        @endif

      @endforeach

      {{-- third --}}

      @foreach ($collection->forget(4)->chunk(2) as $group)

        @if ($loop->index >= 2 )

        <div class="row row-30 row-lg">

          @foreach ($group as $post)
            @php
              $open_div = $loop->index % 2 === 0 ? '<div class="col-md-5 col-xl-4 offset-xl-2">' : '<div class="col-md-5 col-xl-4 offset-md-1">';
              $inner_div = $loop->index % 2 === 0 ? '<article class="thumbnail-modern">' : '<article class="thumbnail-modern thumbnail-modern-offset-2">';
              // setup_postdata( $post );
              $thumb_id = get_field('case_thumb', $post->ID);
            @endphp

            {!! $open_div !!}
              {!! $inner_div !!}
              <article class="thumbnail-modern">
                <a class="thumbnail-img" data-lightgallery="item" href="{{ get_the_post_thumbnail_url( $post->ID, 'full' ) }}">
                @if ($thumb_id )
                {!! wp_get_attachment_image( $thumb_id, 'full' ) !!}
                @endif
              </a>
                <h4 class="thumbnail-title"><a href="#">{!! get_the_title($post->ID) !!}</a></h4>
              </article>
            </div>


          @endforeach
          {{-- @php(wp_reset_postdata()) --}}

        </div>
        @endif

      @endforeach


    @endif


  </div>
</section>
