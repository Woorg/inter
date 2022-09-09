@php
  $email = get_field('email', 'option');
  $phone = get_field('phone', 'option');
@endphp

<!--Mailform-->
<section class="section section-md bg-default section-bottom-0">
  <div class="container">
    <div class="row row-40">
      <div class="col-md-6">

        @if ($title)
        <h2>{{ $title }}</h2>
        @endif

        <!--RD Mailform-->

        @if ($form)
        {!! do_shortcode($form) !!}
        @endif
      </div>

      @if ($image)
      <div class="col-md-6 col-lg-5 offset-lg-1">
        {!! wp_get_attachment_image($image, 'full') !!}
      </div>
      @endif
    </div>
    <div class="row row-30 row-lg">
      <div class="col-xl-4">
        <div class="box-contact">
          <h6 class="box-contact-title">contacts</h6>
          <ul class="box-contact-body list-contact">
            <li class="h4">
              <a href="mailto:{{ $email }}">{{ $email }}</a>
            </li>
            <li class="h4">
              <a href="{{'tel:' . str_replace( [
                  ")",
                  "(",
                  " ",
                  "-",
                ], "", $phone )}}" >{{ $phone }}</a>
            </li>
          </ul>
        </div>
      </div>

      @if ($address)
      <div class="col-xl-6 offset-xl-1">
        <div class="box-contact">
          <h6 class="box-contact-title">address</h6>
          <h4 class="box-contact-body">
            {!! $address !!}
          </h4>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
