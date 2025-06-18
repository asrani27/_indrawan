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
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Tambah</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/superadmin/peraturan/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="kategori" required>
                        <option value=""></option>
                        <option value="UNDANG-UNDANG">UNDANG-UNDANG</option>
                        <option value="PERATURAN PEMERINTAH">PERATURAN PEMERINTAH</option>
                        <option value="PERATURAN PRESIDEN">PERATURAN PRESIDEN</option>
                        <option value="PERATURAN MENTERI">PERATURAN MENTERI</option>
                        <option value="KEPUTUSAN MENTERI">KEPUTUSAN MENTERI</option>
                        <option value="SURAT EDARAN MENTERI">SURAT EDARAN MENTERI</option>
                        <option value="REFERENSI">REFERENSI</option>
                        <option value="PERATURAN DAERAH">PERATURAN DAERAH</option>
                        <option value="PERATURAN GUBERNUR">PERATURAN GUBERNUR</option>
                        <option value="PERATURAN WALIKOTA">PERATURAN WALIKOTA</option>
                        <option value="SURAT KEPUTUSAN">SURAT KEPUTUSAN</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nomor" placeholder="nomor peraturan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tahun" placeholder="tahun peraturan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judul" placeholder="judul peraturan" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File (PDF)</label>
                    <div class="col-sm-10">
                      <input type="file" name="file" class="form-control" required>
                    </div>
                  </div>
                  {{-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                      <select class="form-control" required>
                        <option value=""></option>
                        <option value="BERLAKU">BERLAKU</option>
                        <option value="TIDAK BERLAKU">TIDAK BERLAKU</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File (PDF)</label>
                    <div class="col-sm-10">
                      <input type="file" name="file" class="form-control" required>
                    </div>
                  </div> --}}
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

