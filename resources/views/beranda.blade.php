@extends('frontend.app')
@section('header')

@endsection
@section('content')
<div class="wrapper row2">
    <section id="latest" class="hoc container clear"> 
      <div class="sectiontitle">
        <h6 class="heading">ARTIKEL TERBARU</h6>
        <p>Informasi Terkait Sipjaki</p>
      </div>
      <ul class="nospace group">
        @foreach ($berita as $key => $item)
        @if ($key == 0 || $key == 3 || $key == 6 || $key ==9)
        <li class="one_third first">
        @else
        <li class="one_third">
        @endif
            <article>
              <figure><a href="#"><img src="/surogou-main/images/demo/348x261.png" alt=""></a>
                <figcaption>
                  <time datetime="2045-04-06T08:15+00:00"><strong>{{$item->tgl}}</strong> <em>{{$item->bulan}}</em></time>
                </figcaption>
              </figure>
              <div class="excerpt">
                <h6 class="heading">{{\Str::limit($item->judul_berita,20)}}</h6>
                <ul class="nospace meta">
                  <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                  <li><i class="fas fa-tags"></i> <a href="#">Tag 1</a>, <a href="#">Tag 2</a></li>
                </ul>
                <p>{!!\Str::limit($item->isi_berita,200)!!}[<a href="#">&hellip;</a>]</p>
                <footer><a class="btn" href="#">Read More</a></footer>
              </div>
            </article>
          </li>   
        @endforeach
      </ul>
    
    </section>
  </div>
@endsection