@extends('frontend.app3')
@section('content')
<div class="box box-widget">
  <div class="box-header with-border">
    <div class="user-block">
      <img class="img-circle" src="/assets/dist/img/user1-128x128.jpg" alt="User Image">
      <span class="username">{{$data->judul}}</span>
      <span class="description">{{\Carbon\Carbon::parse($data->created_at)->format('d M Y H:i:s')}}</span>
    </div>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
  {!!$data->isi!!}
  </div>
</div>

<div id="disqus_thread"></div>
<script>
  /**
   *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
   *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
  /*
  var disqus_config = function () {
  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
  };
  */
  (function() { // DON'T EDIT BELOW THIS LINE
    var d = document,
      s = d.createElement('script');
    s.src = 'https://sipjaki-1.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection