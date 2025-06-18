@extends('layouts.app')
@push('css')
    
<link rel="stylesheet" href="/assets/bower_components/select2/dist/css/select2.min.css">
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/peraturan/edit/{{$data->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="kategori" required>
                        <option value=""></option>
                        <option value="UNDANG-UNDANG" {{$data->kategori == "UNDANG-UNDANG" ? 'selected':''}}>UNDANG-UNDANG</option>
                        <option value="PERATURAN PEMERINTAH" {{$data->kategori == "PERATURAN PEMERINTAH" ? 'selected':''}}>PERATURAN PEMERINTAH</option>
                        <option value="PERATURAN PRESIDEN" {{$data->kategori == "PERATURAN PRESIDEN" ? 'selected':''}}>PERATURAN PRESIDEN</option>
                        <option value="PERATURAN MENTERI" {{$data->kategori == "PERATURAN MENTERI" ? 'selected':''}}>PERATURAN MENTERI</option>
                        <option value="KEPUTUSAN MENTERI" {{$data->kategori == "KEPUTUSAN MENTERI" ? 'selected':''}}>KEPUTUSAN MENTERI</option>
                        <option value="SURAT EDARAN MENTERI" {{$data->kategori == "SURAT EDARAN MENTERI" ? 'selected':''}}>SURAT EDARAN MENTERI</option>
                        <option value="REFERENSI" {{$data->kategori == "REFERENSI" ? 'selected':''}}>REFERENSI</option>
                        <option value="PERATURAN DAERAH" {{$data->kategori == "PERATURAN DAERAH" ? 'selected':''}}>PERATURAN DAERAH</option>
                        <option value="PERATURAN GUBERNUR" {{$data->kategori == "PERATURAN GUBERNUR" ? 'selected':''}}>PERATURAN GUBERNUR</option>
                        <option value="PERATURAN WALIKOTA" {{$data->kategori == "PERATURAN WALIKOTA" ? 'selected':''}}>PERATURAN WALIKOTA</option>
                        <option value="SURAT KEPUTUSAN" {{$data->kategori == "SURAT KEPUTUSAN" ? 'selected':''}}>SURAT KEPUTUSAN</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nomor" value="{{$data->nomor}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tahun" value="{{$data->tahun}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" value="{{$data->judul}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File (PDF)</label>
                    <div class="col-sm-10">
                      <input type="file" name="file" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                  </div>
                </div>
            </form>
          </div>
    </div>
   </div>
    
</section>


@endsection
@push('js')

<script src="/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
@endpush

