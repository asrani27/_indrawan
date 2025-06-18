<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SparepartController extends Controller
{
    public function index()
    {
        $data = Sparepart::orderBy('id', 'DESC')->paginate(15);
        return view('admin.sparepart.index', compact('data'));
    }

    public function create()
    {
        return view('admin.sparepart.create');
    }
    public function edit($id)
    {
        $data = Sparepart::find($id);
        return view('admin.sparepart.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Sparepart::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama Sparepart Sudah Ada');
            return back();
        } else {
            Sparepart::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/sparepart');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Sparepart::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sparepart');
    }
    public function delete($id)
    {
        $data = Sparepart::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/sparepart');
    }
}
