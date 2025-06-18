<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KulinerController extends Controller
{

    public function index()
    {
        $data = Kuliner::orderBy('id', 'DESC')->paginate(10);
        return view('admin.kuliner.index', compact('data'));
    }

    public function create()
    {
        return view('admin.kuliner.create');
    }
    public function edit($id)
    {
        $data = Kuliner::find($id);
        return view('admin.kuliner.edit', compact('data'));
    }
    public function store(Request $req)
    {

        $validator = Validator::make($req->all(), [
            'gambar'  => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($validator->fails()) {
            $req->flash();
            Session::flash('error', 'File harus gambar dan Maks 2MB');
            return back();
        }

        $path = public_path('storage') . '/gambar';

        $gambar = $req->file('gambar');
        $ext = $req->gambar->getClientOriginalExtension();
        $filename = 'gambar' . uniqid() . '.' . $ext;
        $gambar->move($path, $filename);

        $n = new Kuliner();
        $n->judul = $req->judul;
        $n->slug = Str::slug($req->judul);
        $n->isi = $req->isi;
        $n->gambar = $filename;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kuliner');
    }
    public function update(Request $req, $id)
    {
        if ($req->gambar != null) {
            $validator = Validator::make($req->all(), [
                'gambar'  => 'mimes:jpg,jpeg,png|max:2048'
            ]);

            if ($validator->fails()) {
                $req->flash();
                Session::flash('error', 'File harus gambar dan Maks 2MB');
                return back();
            }

            $path = public_path('storage') . '/gambar';

            $gambar = $req->file('gambar');
            $ext = $req->gambar->getClientOriginalExtension();
            $filename = 'gambar' . uniqid() . '.' . $ext;
            $gambar->move($path, $filename);
        } else {
            $filename = Kuliner::find($id)->gambar;
        }

        $update = Kuliner::find($id);
        $update->judul = $req->judul;
        $update->slug = Str::slug($req->judul);
        $update->isi = $req->isi;
        $update->gambar = $filename;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/kuliner');
    }
    public function delete($id)
    {
        $data = Kuliner::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/kuliner');
    }
}
