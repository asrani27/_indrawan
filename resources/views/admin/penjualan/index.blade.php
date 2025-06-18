@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Penjualan</h3>
    
              <div class="box-tools">
                <a href="/superadmin/penjualan/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>Nama Pembeli</th>
                  <th>Alamat</th>
                  <th>Telp</th>
                  <th>Jenis Mobil</th>
                  <th>NoPol</th>
                  <th>Karyawan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->telp}}</td>
                    <td>{{$item->jenis_mobil}}</td>
                    <td>{{$item->nopol}}</td>
                    <td>{{$item->karyawan == null ? '': $item->karyawan->nama}}</td>
                    <td>
                      <a href="/superadmin/penjualan/kwitansi/{{$item->id}}" class="btn btn-xs  btn-danger"><i class="fa fa-print"></i> Cetak Kwitansi</a>
                        <a href="/superadmin/penjualan/transaksi/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-gear"></i> Transaksi</a>
                        <a href="/superadmin/penjualan/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/penjualan/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody></table>
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

