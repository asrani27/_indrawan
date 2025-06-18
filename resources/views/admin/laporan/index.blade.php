@extends('layouts.app')
@push('css')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
@endpush
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-clipboard"></i> Tentang Kami</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form class="form-horizontal" action="/superadmin/profil/tentang-kami" method="post">
          @csrf
          <div class="box-body">
            <a href="/superadmin/laporan/admin" class="btn btn-primary">Laporan Data Admin</a>

            <a href="/superadmin/laporan/wisata" class="btn btn-primary">Laporan Data Wisata</a>

            <a href="/superadmin/laporan/budaya" class="btn btn-primary">Laporan Data Budaya</a>

            <a href="/superadmin/laporan/kuliner" class="btn btn-primary">Laporan Data Kuliner</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>


@endsection
@push('js')
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
  $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endpush