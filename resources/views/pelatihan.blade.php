@extends('frontend.app3')
@section('content')
<h2>Pelatihan</h2>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tahun Anggaran</th>
                  <th>Sumber Dana</th>
                  <th>Nama</th>
                  <th>Penanggung Jawab</th>
                  <th>Jenis Keahlian</th>
                  <th>Tingkat Keahlian</th>
                  <th>Klasifikasi</th>
                  <th>Sub Klasifikasi</th>
                  <th>Metode Pelatihan</th>
                  <th>Waktu Pelaksanaan</th>
                  <th>Selesai Pelaksanaan</th>
                  <th>Lokasi</th>
                  <th>Jam</th>
                </tr>
            </thead>
                <tbody>
                
                @foreach (pelatihan() as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->tahun}}</td>
                    <td>{{$item->sumber_dana}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->penanggung_jawab}}</td>
                    <td>{{$item->kualifikasi}}</td>
                    <td>{{$item->jenjang}}</td>
                    <td>{{$item->klasifikasi}}</td>
                    <td>{{$item->sub_klasifikasi}}</td>
                    <td>{{$item->metode}}</td>
                    <td>{{$item->waktu}}</td>
                    <td>{{$item->selesai}}</td>
                    <td>{{$item->lokasi}}</td>
                    <td>{{$item->jam}}</td>
                </tr>
                @endforeach
                
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

