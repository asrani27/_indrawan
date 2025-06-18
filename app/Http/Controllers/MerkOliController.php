<?php

namespace App\Http\Controllers;

use App\Models\MerkOli;
use App\Models\JenisOli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MerkOliController extends Controller
{
    public function index()
    {
        $data = MerkOli::orderBy('id', 'DESC')->paginate(15);
        return view('admin.merkoli.index', compact('data'));
    }

    public function create()
    {
        $jenis = JenisOli::get();
        return view('admin.merkoli.create', compact('jenis'));
    }
    public function edit($id)
    {
        $data = MerkOli::find($id);
        $jenis = JenisOli::get();
        return view('admin.merkoli.edit', compact('data', 'jenis'));
    }
    public function store(Request $req)
    {
        $check = MerkOli::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama merkoli Sudah Ada');
            return back();
        } else {
            MerkOli::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/merkoli');
        }
    }
    public function update(Request $req, $id)
    {
        $data = MerkOli::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/merkoli');
    }
    public function delete($id)
    {
        $data = MerkOli::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/merkoli');
    }
}
