@php
  $logo_light_theme = get_field('logo_light', 'option');
  $logo_dark_theme  = get_field('logo_dark', 'option');

  $email            = get_field('email', 'option');
  $phone            = get_field('phone', 'option');
@endphp

<header class="section page-header">
  <!--RD Navbar-->
  <div class="rd-navbar-wrap rd-navbar-wrap-absolute">
    <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!--RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!--RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

            <!--RD Navbar Brand-->
            <div class="rd-navbar-brand">
              <!--Brand-->
              <a class="brand" href="{{ home_url('/') }}">
                {!! wp_get_attachment_image($logo_light_theme, 'full', null, ['class' => 'brand-logo-dark'])!!}
                {!! wp_get_attachment_image($logo_dark_theme, 'full', null, ['class' => 'brand-logo-light'])!!}
              </a>
            </div>

            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse">

              <div class="rd-navbar-aside">

                <ul class="rd-navbar-contact">
                  @if ($email)
                  <li class="rd-navbar-contact-item">
                    <a class="rd-navbar-contact-link" href="mailto:{{ $email }}">{{ $email }}</a>
                  </li>
                  @endif
                  @if ($phone)
                  <li class="rd-navbar-contact-item">
                    <a class="rd-navbar-contact-link" href="{{'tel:' . str_replace( [
                      ")",
                      "(",
                      " ",
                      "-",
                    ], "", $phone )}}">{{ $phone }}</a>
                  </li>
                  @endif
                </ul>

              </div>

            </div>
          </div>

          @if (has_nav_menu('primary_navigation'))
          <div class="rd-navbar-nav-toggle" data-multitoggle=".rd-navbar-nav-wrap">
            <svg class="icon-stroke" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.75" y="0.75" width="9.86364" height="9.86364" rx="1.25" stroke-width="1.5"></rect>
              <rect x="14.3864" y="0.75" width="9.86364" height="9.86364" rx="1.25" stroke-width="1.5"></rect>
              <rect x="14.3864" y="14.3864" width="9.86364" height="9.86364" rx="4.25" stroke-width="1.5"></rect>
              <rect x="0.75" y="14.3864" width="9.86364" height="9.86364" rx="1.25" stroke-width="1.5"></rect>
            </svg>
          </div>


          <div class="rd-navbar-nav-wrap">
            <div class="rd-navbar-close-toggle mdi mdi-close" data-multitoggle=".rd-navbar-nav-wrap"><span></span></div>
            <div class="rd-navbar-nav-wrapper">
              <div class="rd-navbar-nav-wrap-inner">
                {!! wp_nav_menu([
                  'theme_location' => 'primary_navigation',
                  'menu_class' => 'rd-navbar-nav',
                  'container' => false,
                  'echo' => false
                ]) !!}

              </div>
            </div>
          </div>

          @endif

        </div>
      </div>
    </nav>
  </div>
</header>
