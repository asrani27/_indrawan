<?php

namespace App\Http\Controllers;

use App\Models\JenisOli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JenisOliController extends Controller
{
    public function index()
    {
        $data = JenisOli::orderBy('id', 'DESC')->paginate(15);
        return view('admin.jenisoli.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jenisoli.create');
    }
    public function edit($id)
    {
        $data = JenisOli::find($id);
        return view('admin.jenisoli.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = JenisOli::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama jenisoli Sudah Ada');
            return back();
        } else {
            JenisOli::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/jenisoli');
        }
    }
    public function update(Request $req, $id)
    {
        $data = JenisOli::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jenisoli');
    }
    public function delete($id)
    {
        $data = JenisOli::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/jenisoli');
    }
}
