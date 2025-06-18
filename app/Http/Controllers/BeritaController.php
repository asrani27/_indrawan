<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{

    public function index()
    {
        $data = Berita::orderBy('id', 'DESC')->paginate(10);
        return view('admin.berita.index', compact('data'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }
    public function edit($id)
    {
        $data = Berita::find($id);
        return view('admin.berita.edit', compact('data'));
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

        $n = new Berita();
        $n->judul = $req->judul;
        $n->slug = Str::slug($req->judul);
        $n->isi = $req->isi;
        $n->gambar = $filename;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/berita');
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
            $filename = Berita::find($id)->gambar;
        }

        $update = Berita::find($id);
        $update->judul = $req->judul;
        $update->slug = Str::slug($req->judul);
        $update->isi = $req->isi;
        $update->gambar = $filename;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/berita');
    }
    public function delete($id)
    {
        $data = Berita::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/berita');
    }
}
