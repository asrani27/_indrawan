<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BudayaController extends Controller
{

    public function index()
    {
        $data = Budaya::orderBy('id', 'DESC')->paginate(10);
        return view('admin.budaya.index', compact('data'));
    }

    public function create()
    {
        return view('admin.budaya.create');
    }
    public function edit($id)
    {
        $data = Budaya::find($id);
        return view('admin.budaya.edit', compact('data'));
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

        $n = new Budaya();
        $n->judul = $req->judul;
        $n->slug = Str::slug($req->judul);
        $n->isi = $req->isi;
        $n->gambar = $filename;
        $n->save();

        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/budaya');
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
            $filename = Budaya::find($id)->gambar;
        }

        $update = Budaya::find($id);
        $update->judul = $req->judul;
        $update->slug = Str::slug($req->judul);
        $update->isi = $req->isi;
        $update->gambar = $filename;
        $update->save();

        Session::flash('success', 'Di Update');
        return redirect('/superadmin/budaya');
    }
    public function delete($id)
    {
        $data = Budaya::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/budaya');
    }
}
