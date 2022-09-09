@include('sections.header')

    @if (! is_front_page())
    <!-- Breadcrumbs-->
    <div class="section breadcrumbs-custom">
      <div class="container">
        @php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<div class="breadcrumbs-custom-path">','</div>' );
          }
        @endphp
      </div>
    </div>
    @endif


    @yield('content')

@include('sections.footer')
