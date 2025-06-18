@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Agenda</h3>
    
              <div class="box-tools">
                <a href="/superadmin/agenda/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Hari, Tanggal</th>
                  <th>Waktu</th>
                  <th>Tempat</th>
                  <th>Acara</th>
                  <th>Penanggung Jawab</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{$data->firstItem() + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->translatedFormat('l')}}, {{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                    <td>{{$item->waktu}} WITA</td>
                    <td>{{$item->tempat}} </td>
                    <td>{{$item->acara}} </td>
                    <td>{{$item->pj_agenda}} </td>
                    <td>{{$item->keterangan}} </td>
                    <td>
                        <a href="/superadmin/agenda/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/agenda/delete/{{$item->id}}"
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

