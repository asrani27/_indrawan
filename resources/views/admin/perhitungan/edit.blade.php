@extends('layouts.app')
@push('css')
    
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
            
            <form class="form-horizontal" action="/superadmin/perhitungan/datalatih/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Januari</label>
                    <div class="col-sm-10">
                      <input type="text" name="januari" class="form-control" value="{{$data->januari}}" required onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Februari</label>
                    <div class="col-sm-10">
                      <input type="text" name="februari" class="form-control" value="{{$data->februari}}" required onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Maret</label>
                    <div class="col-sm-10">
                      <input type="text" name="maret" class="form-control" value="{{$data->maret}}" required onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Class</label>
                    <div class="col-sm-10">
                      <select name="class" class="form-control" required>
                        <option value="">-pilih-</option>
                        <option value="terlaris" {{$data->class == 'terlaris' ? 'selected':''}}>Terlaris</option>
                        <option value="tidak terlaris" {{$data->class == 'tidak terlaris' ? 'selected':''}}>Tidak Terlaris</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/perhitungan" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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

<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
  
      return false;
    return true;
  }
  </script>
@endpush

