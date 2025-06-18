<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgendaController extends Controller
{

    public function index()
    {
        $data = Agenda::orderBy('id', 'DESC')->paginate(10);
        return view('admin.agenda.index', compact('data'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }
    public function edit($id)
    {
        $data = Agenda::find($id);
        return view('admin.agenda.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $n = new agenda();
        $n->tanggal = $req->tanggal;
        $n->waktu = $req->waktu . ':00';
        $n->acara = $req->acara;
        $n->tempat = $req->tempat;
        $n->pj_agenda = $req->pj_agenda;
        $n->keterangan = $req->keterangan;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/agenda');
    }
    public function update(Request $req, $id)
    {


        $update = Agenda::find($id);
        $update->tanggal = $req->tanggal;
        $update->waktu = $req->waktu . ':00';
        $update->acara = $req->acara;
        $update->tempat = $req->tempat;
        $update->pj_agenda = $req->pj_agenda;
        $update->keterangan = $req->keterangan;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/agenda');
    }
    public function delete($id)
    {
        $data = Agenda::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/agenda');
    }
}
