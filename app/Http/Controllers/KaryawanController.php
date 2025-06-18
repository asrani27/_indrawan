<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.karyawan.index', compact('data'));
    }

    public function create()
    {
        $jabatan = Jabatan::get();
        return view('admin.karyawan.create', compact('jabatan'));
    }
    public function edit($id)
    {
        $data = Karyawan::find($id);
        $jabatan = Jabatan::get();
        return view('admin.karyawan.edit', compact('data', 'jabatan'));
    }
    public function store(Request $req)
    {
        $check = Karyawan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama karyawan Sudah Ada');
            return back();
        } else {
            Karyawan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/karyawan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Karyawan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/karyawan');
    }
    public function delete($id)
    {
        $data = Karyawan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/karyawan');
    }
}
