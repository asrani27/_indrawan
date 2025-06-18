<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function header()
    {
        $data = Setting::where('nama', 'header')->first();
        return view('admin.setting.header', compact('data'));
    }
    public function updateHeader(Request $req)
    {

        if ($req->gambar != null) {
            $validator = Validator::make($req->all(), [
                'gambar'  => 'mimes:jpg,jpeg,png|max:1024'
            ]);

            if ($validator->fails()) {
                $req->flash();
                Session::flash('error', 'File harus gambar dan Maks 1MB');
                return back();
            }

            $path = public_path('storage') . '/header';

            $gambar = $req->file('gambar');
            $ext = $req->gambar->getClientOriginalExtension();
            $filename = 'gambar' . uniqid() . '.' . $ext;
            $gambar->move($path, $filename);
        } else {
            $filename = Setting::where('nama', 'header')->first()->file;
        }

        $update = Setting::where('nama', 'header')->first();
        $update->file = $filename;
        $update->save();

        Session::flash('success', 'Di Update');
        return back();
    }
}
