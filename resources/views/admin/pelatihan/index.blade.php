@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Pengumuman</h3>
    
              <div class="box-tools">
                <a href="/superadmin/pelatihan/pelatihan/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
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
                  <th>Aksi</th>
                </tr>
                
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
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
                    <td>
                        <a href="/superadmin/pelatihan/pelatihan/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/pelatihan/pelatihan/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          {{$data->links()}}
        </div>
    </div>
</section>


@endsection
@push('js')

@endpush

