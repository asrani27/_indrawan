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
      <form action="/superadmin/pelatihan/pelatihan/create" method="post">
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
                <label>Nama</label>
                <input type="text" class="form-control" name='nama' placeholder="nama">
              </div>
              <div class="form-group">
                <label>Kualifikasi</label>
                <select class="form-control select2" name="kualifikasi" required>
                  <option value="" selected>-</option>
                  @foreach (kualifikasi() as $item)
                  <option value="{{$item->nama}}">{{$item->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Klasifikasi</label>
                <select class="form-control select2" name="klasifikasi" required>
                  <option value="" selected>-</option>
                  @foreach (klasifikasi() as $item)
                  <option value="{{$item->nama}}">{{$item->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Waktu Pelaksanaan</label>
                <input type="date" class="form-control" name='waktu' required>
              </div>
              <div class="form-group">
                <label>Metode Pelatihan</label>
                <select class="form-control select2" name="metode" style="width: 100%;">
                  <option value="REGULER" selected>REGULER</option>
                  <option value="NONREGULER">NON REGULER</option>
                </select>
              </div>
              <div class="form-group">
                <label>Lokasi Pelatihan</label>
                <input type="text" class="form-control" name='lokasi' placeholder="lokasi">
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
                <label>Jenjang KKNI </label>
            
                <select class="form-control select2" name="sumber_dana" style="width: 100%;">
                  <option value="" selected></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  
                </select>
              </div>

              <div class="form-group">
                <label>Sub Klasifikasi</label>
                <select class="form-control select2" name="sub_klasifikasi" required>
                  <option value="" selected>-</option>
                  @foreach (subklasifikasi() as $item)
                  <option value="{{$item->nama}}">{{$item->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Selesai Pelaksanaan</label>
                <input type="date" class="form-control" name='selesai' required>
              </div>
              <div class="form-group">
                <label>Jam Pelajaran</label>
                <input type="text" class="form-control" name='jam' required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name='keterangan' required>
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

