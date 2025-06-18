@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Potensi Pasar</h3>
    
              <div class="box-tools">
                <a href="/superadmin/potensipasar/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah </a>
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
                  <th>Besar Anggaran</th>
                  <th>Penanggung Jawab</th>
                  <th>Jenis Infrastruktur</th>
                  <th>Layanan</th>
                  <th>Aksi</th>
                </tr>
                
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{$item->tahun}}</td>
                    <td>{{$item->sumber_dana}}</td>
                    <td>{{$item->besar_anggaran}}</td>
                    <td>{{$item->penanggung_jawab}}</td>
                    <td>{{$item->infrastruktur}}</td>
                    <td>{{$item->layanan}}</td>
                    <td>
                        <a href="/superadmin/potensipasar/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/potensipasar/delete/{{$item->id}}"
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

