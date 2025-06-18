@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Latih</h3>
    
              <div class="box-tools">
                <a href="/superadmin/perhitungan/datalatih/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th class="text-center">No</th>
                  <th>Nama</th>
                  <th>Jan</th>
                  <th>Feb</th>
                  <th>Maret</th>
                  <th>Class</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($datalatih as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->januari}}</td>
                    <td>{{$item->februari}}</td>
                    <td>{{$item->maret}}</td>
                    <td>{{$item->class}}</td>
                    <td>
                        <a href="/superadmin/perhitungan/datalatih/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                        <a href="/superadmin/perhitungan/datalatih/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>


    <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
          <div class="box-header">
            <h3 class="box-title"><i class="fa fa-clipboard"></i> Data Yang Di Uji</h3>
  
            <div class="box-tools">
              <a href="/superadmin/perhitungan/datauji/create" class="btn btn-sm btn-danger "><i class="fa fa-plus-circle"></i> Tambah</a>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody>
              <tr>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Maret</th>
                <th>Class</th>
                <th>Aksi</th>
              </tr>
              @foreach ($datauji as $key => $item)
              <tr>
                  <td class="text-center">{{1 + $key}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->januari}}</td>
                  <td>{{$item->februari}}</td>
                  <td>{{$item->maret}}</td>
                  <td>?</td>
                  <td>
                      <a href="/superadmin/perhitungan/datauji/edit/{{$item->id}}" class="btn btn-xs  btn-success"><i class="fa fa-edit"></i> Edit</a>
                      <a href="/superadmin/perhitungan/datauji/delete/{{$item->id}}"
                          onclick="return confirm('Yakin ingin di hapus');"
                          class="btn btn-xs  btn-danger"><i class="fa fa-trash"></i> Delete</a>
                  </td>
              </tr>
              @endforeach
              
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="box box-warning">
          <div class="box-header">
            <h3 class="box-title"><i class="fa fa-clipboard"></i> Hasil Perhitungan</h3>
  
            <div class="box-tools">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody>
              <tr>
                <th class="text-center">No</th>
                <th>Nama</th>
                <th>Jan</th>
                <th>Feb</th>
                <th>Maret</th>
                <th>Class</th>
                <th> Euclidean Distance</th>
                <th> Ranking</th>
              </tr>
              @foreach ($data as $key => $item)
              <tr>
                  <td class="text-center">{{1 + $key}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->januari}}</td>
                  <td>{{$item->februari}}</td>
                  <td>{{$item->maret}}</td>
                  <td>{{$item->class}}</td>
                  <td>{{$item->ed}}</td>
                  <td>{{$item->rank}}</td>
              </tr>
              @endforeach
              
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
</section>


@endsection
@push('js')

@endpush

