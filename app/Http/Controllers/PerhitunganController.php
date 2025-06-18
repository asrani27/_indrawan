<?php

namespace App\Http\Controllers;

use App\Models\DataUji;
use App\Models\DataLatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerhitunganController extends Controller
{
    public function index()
    {
        $datalatih = DataLatih::get();
        $datauji = DataUji::get();

        //perhitungan

        $perhitungan = DataLatih::get();
        $data = $perhitungan->map(function ($item, $value) use ($datauji) {
            if ($datauji->first() == null) {
                $jan = 0;
                $feb = 0;
                $mar = 0;
            } else {
                $jan = $datauji->first()->januari;
                $feb = $datauji->first()->februari;
                $mar = $datauji->first()->maret;
            }
            $nilai1 = $item->januari - $jan;
            $nilai2 = $item->februari - $feb;
            $nilai3 = $item->maret - $mar;
            $kuadrat1 = pow($nilai1, 2);
            $kuadrat2 = pow($nilai2, 2);
            $kuadrat3 = pow($nilai3, 2);

            $jumlahKuadrat = $kuadrat1 + $kuadrat2 + $kuadrat3;
            $hasil = sqrt($jumlahKuadrat);
            $item->ed = number_format($hasil, 2);
            return $item;
        });


        $sorted = $data->sortBy('ed')->values()->map(function ($item, $key) {
            $item->values = $key;
            return $item;
        });

        $data->map(function ($item)  use ($sorted) {

            $item->rank = $sorted->where('ed', $item->ed)->first()->values + 1;
            return $item;
        });

        return view('admin.perhitungan.index', compact('datalatih', 'datauji', 'data'));
    }

    public function createDataLatih()
    {
        return view('admin.perhitungan.create');
    }

    public function editDataLatih($id)
    {
        $data = DataLatih::find($id);
        return view('admin.perhitungan.edit', compact('data'));
    }
    public function editDataUji($id)
    {
        $data = DataUji::find($id);
        return view('admin.perhitungan.edit2', compact('data'));
    }

    public function updateDataLatih(Request $req, $id)
    {
        DataLatih::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }

    public function updateDataUji(Request $req, $id)
    {
        DataUji::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }


    public function storeDataLatih(Request $req)
    {
        DataLatih::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/perhitungan');
    }
    public function createDataUji()
    {
        return view('admin.perhitungan.create2');
    }
    public function storeDataUji(Request $req)
    {
        if (DataUji::first() == null) {
            DataUji::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/perhitungan');
        } else {
            Session::flash('info', 'Data uji sudah ada, data uji hanya bisa 1, hapus yang sebelumnya');
            return back();
        }
    }

    public function deleteDataLatih($id)
    {
        DataLatih::find($id)->delete();
        Session::flash('success', 'Berhasil dihapus');
        return back();
    }
    public function deleteDataUji($id)
    {
        DataUji::find($id)->delete();
        Session::flash('success', 'Berhasil dihapus');
        return back();
    }
}
