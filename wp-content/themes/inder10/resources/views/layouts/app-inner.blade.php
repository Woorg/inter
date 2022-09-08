@include('sections.header-inner')

  {{-- <main id="main" class="main"> --}}

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


    @yield('content')

  {{-- </main> --}}

  @include('sections.footer')
