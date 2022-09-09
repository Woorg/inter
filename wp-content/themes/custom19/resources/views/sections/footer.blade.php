@php
  $phone           = get_field('phone', 'option');
  $copyright       = get_field('copyright', 'option');
  $privacy_link    = get_field('privacy_link', 'option');
  $lets_work_group = get_field('lets_work_group', 'option');
  $email_group     = get_field('email_group', 'option');
  $social_group    = get_field('social_group', 'option')
@endphp

<footer class="section footer-classic">
  <div class="container">

    <div class="row row-50">

      @if ($lets_work_group)

        @php
          $lets_work_title = $lets_work_group['lets_work_title'];
          $lets_work_text  = $lets_work_group['lets_work_text'];
          $lets_work_button = $lets_work_group['lets_work_button'];
        @endphp

      <div class="col-lg-6">
        @if ($lets_work_title)
        <h6 class="footer-title">{{ $lets_work_title }}</h6>
        @endif

        @if ($lets_work_text)
        <h2 class="h2-offset-narrow pe-xl-5">{{ $lets_work_text }}</h2>
        @endif

        @if ($lets_work_button)
        <a class="btn btn-icon-arrow btn-primary btn-icon-right footer-btn" href="#">
          <svg class="icon-fill" width="37" height="10" viewBox="0 0 37 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.225 7.284L30.509 7.9821L31.9052 9.4141L32.6212 8.716L31.225 7.284ZM35 5L35.6981 5.716L36.4325 5L35.6981 4.284L35 5ZM32.6212 1.284L31.9052 0.5859L30.509 2.0179L31.225 2.716L32.6212 1.284ZM32.6212 8.716L35.6981 5.716L34.3019 4.284L31.225 7.284L32.6212 8.716ZM35.6981 4.284L32.6212 1.284L31.225 2.716L34.3019 5.716L35.6981 4.284ZM35 4H0V6H35V4ZM0 6H25V4H0V6Z"></path>
          </svg>{{ $lets_work_button }}</a>
        @endif
      </div>

      @endif

      @if ( $email_group )
        {{-- @dump($email_group) --}}
        @php
          $email_title = $email_group['email_title'];
          $email_link = $email_group['email_link'];
        @endphp

        <div class="col-md-6 col-xl-3">
          @if ($email_title)
          <h6 class="footer-title">{{ $email_title }}</h6>
          @endif
          @if ($email_title)
          <ul class="footer-info">
            <li><a class="footer-link" href="mailto:{{ $email_link }}">{{ $email_link }}</a></li>
          </ul>
          @endif
        </div>

      @endif

      @if ($social_group)

      @php
        $social_title = $social_group['social_title'];
        $social_list = $social_group['social_list'];
      @endphp
      <div class="col-md-6 col-xl-3">
        @if ($social_title)
        <h6 class="footer-title">{{ $social_title }}</h6>
        @endif

        @if ($social_list)
        <ul class="footer-social list-social">
          @foreach ($social_list as $social_item)
          {{-- @dump($social_item) --}}
          @php
            $social_icon = $social_item['social_icon'];
            $social_link = $social_item['social_link'];
          @endphp
          <li><a class="icon icon-md icomoon {{ $social_icon }}" href="{{ $social_link }}"></a></li>
          @endforeach
        </ul>
        @endif

      </div>
      @endif

    </div>
    <div class="footer-divider"><hr></div>

    <p class="rights text-primary">
      <span>&copy;&nbsp;</span>
      <span class="copyright-year">{{ date('Y') }}</span><span>.&nbsp;</span><span>{{ get_bloginfo('name') }}</span><span>.&nbsp;</span><span>{!! $copyright !!}</span><span>.&nbsp;</span><a href="{{ $privacy_link }}">Privacy Policy</a></p>
  </div>
</footer
