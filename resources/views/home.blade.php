@extends('frontend.app3')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- /.box-header -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/logo/wisata1.jpeg" alt="First slide"
                        style="max-height:400px; min-height:400px; width:100%">

                    <div class="carousel-caption">
                        First Slide
                    </div>
                </div>
                <div class="item">
                    <img src="/logo/wisata2.webp" alt="Second slide"
                        style="max-height:400px; min-height:400px; width:100%">

                    <div class="carousel-caption">
                        Second Slide
                    </div>
                </div>
                <div class="item">
                    <img src="/logo/wisata3.webp" alt="Third slide"
                        style="max-height:400px; min-height:400px; width:100%">

                    <div class="carousel-caption">
                        Third Slide
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
            </a>
        </div>

        <!-- /.box-body -->
        <!-- /.box -->
    </div>
</div>
<br />
<h3>WISATA</h3>
<div class="row">
    @foreach ($wisata as $item)
    <div class="col-md-4">
        <div class="box box-widget widget-user">

            <div class="box-header with-border">
                <div class="user-block">
                    <img class="img-circle" src="/assets/dist/img/user1-128x128.jpg" alt="User Image">
                    <span class="username"><a href="#" style="color: rgb(125, 123, 123)">Di Posting Oleh
                            Admin</a></span>
                    <span class="description">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i:s')}}
                    </span>
                </div>

            </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            @if ($item->gambar == null)
            <div class="widget-user-header bg-black"
                style="background: url('https://system.mas-kargo.co.id/upload/foto_penerima/no.jpg') center center; height:200px; background-size:100% 100%;">
            </div>
            @else
            <div class="widget-user-header bg-black"
                style="background: url('/storage/gambar/{{$item->gambar}}') center center; height:200px; background-size:100% 100%;">

            </div>
            @endif
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="text-secondary text-bold"
                            style="font-size: 18px;font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif"><a
                                href="/berita/{{$item->id}}/{{$item->slug}}"
                                class="text-muted">{{$item->judul}}</a></span><br />
                        <span>

                        </span>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    @endforeach
</div>
<h3>BUDAYA</h3>

<div class="row">
    @foreach ($budaya as $item)
    <div class="col-md-4">
        <div class="box box-widget widget-user">

            <div class="box-header with-border">
                <div class="user-block">
                    <img class="img-circle" src="/assets/dist/img/user1-128x128.jpg" alt="User Image">
                    <span class="username"><a href="#" style="color: rgb(125, 123, 123)">Di Posting Oleh
                            Admin</a></span>
                    <span class="description">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i:s')}}
                    </span>
                </div>

            </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            @if ($item->gambar == null)
            <div class="widget-user-header bg-black"
                style="background: url('https://system.mas-kargo.co.id/upload/foto_penerima/no.jpg') center center; height:200px; background-size:100% 100%;">
            </div>
            @else
            <div class="widget-user-header bg-black"
                style="background: url('/storage/gambar/{{$item->gambar}}') center center; height:200px; background-size:100% 100%;">

            </div>
            @endif
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="text-secondary text-bold"
                            style="font-size: 18px;font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif"><a
                                href="/berita/{{$item->id}}/{{$item->slug}}"
                                class="text-muted">{{$item->judul}}</a></span><br />
                        <span>

                        </span>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    @endforeach
</div>

<h3>KULINER</h3>

<div class="row">
    @foreach ($kuliner as $item)
    <div class="col-md-4">
        <div class="box box-widget widget-user">

            <div class="box-header with-border">
                <div class="user-block">
                    <img class="img-circle" src="/assets/dist/img/user1-128x128.jpg" alt="User Image">
                    <span class="username"><a href="#" style="color: rgb(125, 123, 123)">Di Posting Oleh
                            Admin</a></span>
                    <span class="description">{{\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i:s')}}
                    </span>
                </div>

            </div>
            <!-- Add the bg color to the header using any of the bg-* classes -->
            @if ($item->gambar == null)
            <div class="widget-user-header bg-black"
                style="background: url('https://system.mas-kargo.co.id/upload/foto_penerima/no.jpg') center center; height:200px; background-size:100% 100%;">
            </div>
            @else
            <div class="widget-user-header bg-black"
                style="background: url('/storage/gambar/{{$item->gambar}}') center center; height:200px; background-size:100% 100%;">

            </div>
            @endif
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="text-secondary text-bold"
                            style="font-size: 18px;font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif"><a
                                href="/berita/{{$item->id}}/{{$item->slug}}"
                                class="text-muted">{{$item->judul}}</a></span><br />
                        <span>

                        </span>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
@push('js')

@endpush