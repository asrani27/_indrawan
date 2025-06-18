<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PelatihanController extends Controller
{
    public function index()
    {
        $data = Pelatihan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pelatihan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pelatihan.create');
    }
    public function edit($id)
    {
        $data = Pelatihan::find($id);
        return view('admin.pelatihan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        Pelatihan::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pelatihan/pelatihan');
    }
    public function update(Request $req, $id)
    {
        $data = Pelatihan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pelatihan/pelatihan');
    }
    public function delete($id)
    {
        $data = Pelatihan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pelatihan/pelatihan');
    }
}
