@extends('layouts.app')
@push('css')

@endpush
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-clipboard"></i> budaya</h3>

          <div class="box-tools">
            <a href="/superadmin/budaya/create" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i>
              Tambah</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
              <tr>
                <th class="text-center">No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Tgl</th>
                <th>Aksi</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                <td class="text-center">{{$data->firstItem() + $key}}</td>
                <td>
                  <img src="/storage/gambar/{{$item->gambar}}" width="50px">
                </td>
                <td>{{$item->judul}}</td>
                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d M Y H:i:s')}}</td>
                <td>
                  <a href="/superadmin/budaya/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i
                      class="fa fa-edit"></i> Edit</a>
                  <a href="/superadmin/budaya/delete/{{$item->id}}" onclick="return confirm('Yakin ingin di hapus');"
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