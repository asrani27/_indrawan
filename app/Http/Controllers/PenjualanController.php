<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use App\Models\Karyawan;
use App\Models\MerkOli;
use App\Models\Penjualan;
use App\Models\PenjualanDetail;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenjualanController extends Controller
{
    public function index()
    {
        $data = Penjualan::orderBy('id', 'DESC')->paginate(15);
        return view('admin.penjualan.index', compact('data'));
    }

    public function create()
    {
        $karyawan = Karyawan::get();
        return view('admin.penjualan.create', compact('karyawan'));
    }
    public function edit($id)
    {
        $data = Penjualan::find($id);
        $karyawan = Karyawan::get();
        return view('admin.penjualan.edit', compact('data', 'karyawan'));
    }
    public function transaksi($id)
    {
        $data = Penjualan::find($id);
        $layanan = JenisLayanan::get();
        $oli = MerkOli::get();
        $sparepart = Sparepart::get();
        return view('admin.penjualan.transaksi', compact('data', 'layanan', 'oli', 'sparepart'));
    }
    public function transaksiStore(Request $req, $id)
    {

        if ($req->morp == 'jenis_layanan') {
            $data = JenisLayanan::find($req->jenis_layanan_id);
        }

        if ($req->morp == 'merk_oli') {
            $data = MerkOli::find($req->merk_oli_id);
        }

        if ($req->morp == 'sparepart') {
            $data = Sparepart::find($req->sparepart_id);
        }

        $param = $req->all();

        $param['penjualan_id'] = $id;
        $param['nama'] = $data->nama;
        $param['morp_id'] = $data->id;
        $param['harga'] = $data->harga;
        $param['total'] = $data->harga * $req->jumlah;

        $check = PenjualanDetail::where('morp', $req->morp)->where('morp_id', $data->id)->first();
        if ($check == null) {
            PenjualanDetail::create($param);
        } else {
            $check->update($param);
        }

        Session::flash('success', 'Transaksi Berhasil Di simpan');
        return back();
    }
    public function store(Request $req)
    {
        $check = Penjualan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'Nama penjualan Sudah Ada');
            return back();
        } else {
            Penjualan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/penjualan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Penjualan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penjualan');
    }
    public function delete($id)
    {
        $data = Penjualan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/penjualan');
    }
    public function transaksiDelete($id)
    {
        $data = PenjualanDetail::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return back();
        
    }
}
