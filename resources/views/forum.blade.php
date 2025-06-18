@extends('frontend.app3')
@section('content')
<h2>Forum</h2>

<div class="row">
    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Topik</th>
                <th>Di posting pada</th>
                <th>Komentar</th>
                <th>Dilihat</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->topik}} </td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y H:i:s')}}</td>
                    <td><i class="fa fa-comments"></i><b> <a href="/forum/{{$item->id}}/{{$item->slug}}#disqus_thread"></a> </b></td>
                    <td><a href="/forum/{{$item->id}}/{{$item->slug}}" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-reply"> Reply </i></td>       
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
<script id="dsq-count-scr" src="//sipjaki-1.disqus.com/count.js" async></script>
@endsection

