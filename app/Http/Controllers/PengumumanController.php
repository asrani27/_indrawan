<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengumumanController extends Controller
{

    public function index()
    {
        $data = Pengumuman::orderBy('id', 'DESC')->paginate(10);
        return view('admin.pengumuman.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }
    public function edit($id)
    {
        $data = Pengumuman::find($id);
        return view('admin.pengumuman.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $n = new Pengumuman();
        $n->isi = $req->isi;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengumuman');
    }
    public function update(Request $req, $id)
    {


        $update = Pengumuman::find($id);
        $update->isi = $req->isi;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/pengumuman');
    }
    public function delete($id)
    {
        $data = Pengumuman::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengumuman');
    }
}
