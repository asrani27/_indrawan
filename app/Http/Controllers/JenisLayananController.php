<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JenisLayananController extends Controller
{
    public function index()
    {
        $data = JenisLayanan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.jenislayanan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jenislayanan.create');
    }
    public function edit($id)
    {
        $data = JenisLayanan::find($id);
        return view('admin.jenislayanan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = JenisLayanan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama layanan Sudah Ada');
            return back();
        } else {
            JenisLayanan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/jenislayanan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = JenisLayanan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jenislayanan');
    }
    public function delete($id)
    {
        $data = JenisLayanan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jenislayanan');
    }
}
