@extends('frontend.app3')
@section('content')
<h2>Agenda</h2>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-warning">
            <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Hari, Tanggal</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>Acara</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>

                @foreach ($agenda as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->translatedFormat('l')}}, {{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                    <td>{{$item->waktu}} WITA</td>
                    <td>{{$item->tempat}} </td>
                    <td>{{$item->acara}} </td>
                    <td>{{$item->pj_agenda}} </td>
                    <td>{{$item->keterangan}} </td>
                    
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection

