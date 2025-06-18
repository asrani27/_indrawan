<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.jabatan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jabatan.create');
    }
    public function edit($id)
    {
        $data = Jabatan::find($id);
        return view('admin.jabatan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Jabatan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama jabatan Sudah Ada');
            return back();
        } else {
            Jabatan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/jabatan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Jabatan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jabatan');
    }
    public function delete($id)
    {
        $data = Jabatan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jabatan');
    }
}
