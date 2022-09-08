<!--Privacy Policy-->
<section class="section section-md bg-default section-bottom-0">
  <div class="container">
    @if ($title)
    <h2>{{ $title }}</h2>
    @endif

    <!--Terms list-->
    @if ($list)
    <dl class="list-terms">
      @foreach ($list as $item)

      @if ($item['list_title'])
      <dt class="h4">{{ $item['list_title'] }}</dt>
      @endif
      @if ($item['list_text'])
      <dd>{{ $item['list_text'] }}</dd>
      @endif

      @endforeach

    </dl>
    @endif

    @if ($email)
    <p><a href="mailto:{{ $email }}">{{ $email }}</a></p>
    @endif
  </div>
</section>
