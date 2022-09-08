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
        {{-- <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
          <div class="form-wrap">
            <label class="form-label" for="contact-name">Your name</label>
            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="contact-email">E-Mail</label>
            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="contact-phone">Phone</label>
            <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @Numeric">
          </div>
          <div class="form-wrap">
            <label class="form-label" for="contact-message">Message</label>
            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
          </div>
          <div class="form-button group-sm">
            <button class="btn btn-primary btn-icon-arrow btn-icon-right" type="submit">
              <svg class="icon-fill" width="37" height="10" viewBox="0 0 37 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.225 7.284L30.509 7.9821L31.9052 9.4141L32.6212 8.716L31.225 7.284ZM35 5L35.6981 5.716L36.4325 5L35.6981 4.284L35 5ZM32.6212 1.284L31.9052 0.5859L30.509 2.0179L31.225 2.716L32.6212 1.284ZM32.6212 8.716L35.6981 5.716L34.3019 4.284L31.225 7.284L32.6212 8.716ZM35.6981 4.284L32.6212 1.284L31.225 2.716L34.3019 5.716L35.6981 4.284ZM35 4H0V6H35V4ZM0 6H25V4H0V6Z"></path>
              </svg>send
            </button>
          </div>
        </form> --}}
        @if ($form)
        {!! $form !!}
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
