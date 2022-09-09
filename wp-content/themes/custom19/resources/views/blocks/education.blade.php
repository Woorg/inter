<!-- Education-->
<section class="section section-xl bg-default">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-3 col-lg-2">
        @if ($title)
        <h6>{{ $title }}</h6>
        @endif

      </div>

      @if ($list)
      <div class="col-md-9 col-lg-7 offset-lg-1">
        @foreach ($list as $item)
        <div class="box-skill">
          <div class="box-skill-header">
            <h4>{{ $item['list_title'] }}</h4>
          </div>
          <div class="box-skill-text">
            <p>{{ $item['list_text'] }}</p>
          </div>
        </div>
        @endforeach

      </div>
      @endif
    </div>
  </div>
</section>


<!-- Divider-->
<div class="container mt-0">
  <hr>
</div>
