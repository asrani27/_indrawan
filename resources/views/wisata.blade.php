@extends('frontend.app3')
@section('content')
<h2>Wisata</h2>
<div class="box box-primary">
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box">

      @foreach ($wisata as $item)

      <li class="item">
        <div class="product-img">
          @if ($item->gambar == null)
          <img src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg"
            alt="Product Image">

          @else
          <img src="/storage/gambar/{{$item->gambar}}" alt="Product Image">
          @endif

        </div>
        <div class="product-info">
          <a href="/wisata/{{$item->id}}/{{$item->slug}}" class="product-title">{{$item->judul}}
            <span class="label label-warning pull-right"></span></a>
          <span class="product-description">


          </span>
        </div>
      </li>
      @endforeach

    </ul>
  </div>
  <!-- /.box-body -->
  <!-- /.box-footer -->
</div>
@endsection