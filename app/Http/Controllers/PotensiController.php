<?php

namespace App\Http\Controllers;

use App\Models\Potensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PotensiController extends Controller
{
    public function index()
    {
        $data = Potensi::orderBy('id', 'DESC')->paginate(15);
        return view('admin.potensi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.potensi.create');
    }
    public function edit($id)
    {
        $data = Potensi::find($id);
        return view('admin.potensi.edit', compact('data'));
    }
    public function store(Request $req)
    {

        $param = $req->all();
        $param['infrastruktur'] = json_encode($req->infrastruktur);
        $param['layanan'] = json_encode($req->layanan);

        Potensi::create($param);
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/potensipasar');
    }
    public function update(Request $req, $id)
    {
        $param = $req->all();
        $param['infrastruktur'] = json_encode($req->infrastruktur);
        $param['layanan'] = json_encode($req->layanan);

        $data = Potensi::find($id)->update($param);
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/potensipasar');
    }
    public function delete($id)
    {
        $data = Potensi::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/potensipasar');
    }
}
