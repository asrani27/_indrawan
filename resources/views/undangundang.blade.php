@extends('frontend.app3')
@section('content')
<h2>Undang-Undang</h2>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Nomor</th>
                <th>Tahun</th>
                <th>Judul</th>
                <th>File</th>
            </tr>
            </thead>
            <tbody>

                @foreach (peraturan()->where('kategori', 'UNDANG-UNDANG') as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->nomor}}</td>
                    <td>{{$item->tahun}} </td>
                    <td>{{$item->judul}} </td>
                    <td><a href="/storage/peraturan/{{$item->file}}" target="_blank"><i class="fa fa-download"></i></a> </td>
                    
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

