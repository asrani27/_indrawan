<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PeraturanController extends Controller
{

    public function index()
    {
        $data = Peraturan::orderBy('id', 'DESC')->paginate(10);
        return view('admin.peraturan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.peraturan.create');
    }
    public function edit($id)
    {
        $data = Peraturan::find($id);
        return view('admin.peraturan.edit', compact('data'));
    }
    public function store(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'file'  => 'mimes:pdf|max:10000'
        ]);

        if ($validator->fails()) {
            $req->flash();
            Session::flash('error', 'File harus PDF dan Maks 10MB');
            return back();
        }

        $path = public_path('storage') . '/peraturan';

        $file = $req->file('file');
        $ext = $req->file->getClientOriginalExtension();
        $filename = 'file' . uniqid() . '.' . $ext;
        $file->move($path, $filename);

        $n = new Peraturan();
        $n->judul = $req->judul;
        $n->nomor = $req->nomor;
        $n->tahun = $req->tahun;
        $n->kategori = $req->kategori;
        $n->file = $filename;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/peraturan');
    }
    public function update(Request $req, $id)
    {
        if ($req->file != null) {
            $validator = Validator::make($req->all(), [
                'file'  => 'mimes:pdf|max:20000'
            ]);

            if ($validator->fails()) {
                $req->flash();
                Session::flash('error', 'File harus pdf dan Maks 2MB');
                return back();
            }

            $path = public_path('storage') . '/peraturan';

            $file = $req->file('file');
            $ext = $req->file->getClientOriginalExtension();
            $filename = 'file' . uniqid() . '.' . $ext;
            $file->move($path, $filename);
        } else {
            $filename = Peraturan::find($id)->file;
        }

        $update = Peraturan::find($id);
        $update->judul = $req->judul;
        $update->nomor = $req->nomor;
        $update->tahun = $req->tahun;
        $update->kategori = $req->kategori;
        $update->file = $filename;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/peraturan');
    }
    public function delete($id)
    {
        $data = Peraturan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/peraturan');
    }
}
