@extends('layouts.app')
@push('css')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit wisata</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form class="form-horizontal" action="/superadmin/wisata/edit/{{$data->id}}" method="post"
          enctype="multipart/form-data">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
              <div class="col-sm-10">
                <input type="text" name="judul" class="form-control" value="{{$data->judul}}" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Isi</label>
              <div class="col-sm-10">
                <textarea id="summernote" name="isi">{!!$data->isi!!}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" name="gambar" class="form-control">
                <img src="/storage/gambar/{{$data->gambar}}" width="100px">
                Maks 2MB
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Update</button>
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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
  $(document).ready(function() {
  $('#summernote').summernote().on("summernote.enter", function(we, e) {
  $(this).summernote('pasteHTML', '<br>&VeryThinSpace;');
  e.preventDefault();
});
});
</script>
@endpush