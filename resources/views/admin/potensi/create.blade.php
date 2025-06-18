@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="/assets/bower_components/select2/dist/css/select2.min.css">
@endpush
@section('content')
<section class="content">
  <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-clipboard"></i> Tambah</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form action="/superadmin/potensipasar/create" method="post">
          @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tahun Anggaran</label>
                <select class="form-control select2" name="tahun" style="width: 100%;">
                  <option value="2024" selected>2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                </select>
              </div>
              <div class="form-group">
                <label>Besar Anggaran</label>
                <input type="text" class="form-control" name='besar_anggaran' placeholder="1000000">
              </div>
              <div class="form-group">
                <label>Jenis Infrastruktur </label><br/>
                @foreach (infrastruktur() as $item)
                    <input type="checkbox" name="infrastruktur[]" value="{{$item->nama}}"> {{$item->nama}} <br/>
                @endforeach
              </div>
              
              
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Sumber Dana</label>
            
                <select class="form-control select2" name="sumber_dana" style="width: 100%;">
                  <option value="APBD Kota Banjarmasin" selected>APBD Kota Banjarmasin</option>
                  <option value="APBD Provinsi Kalimantan Selatan">APBD Provinsi Kalimantan Selatan</option>
                  <option value="APBN">APBN</option>
                </select>
              </div>
              <div class="form-group">
                <label>Penanggung Jawab</label>
                <input type="text" class="form-control" name='penanggung_jawab' required>
              </div>
              <div class="form-group">
                <label>Layanan</label><br/>
                
                @foreach (layanan() as $item)
                    <input type="checkbox" name="layanan[]" value="{{$item->nama}}"> {{$item->nama}} <br/>
                @endforeach
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-12">
              <button type="submit" class="btn btn-block btn-primary">SIMPAN</button>
            </div>
          </div>
          
        </div>
      </form>
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

