<?php

namespace App\Http\Controllers;

use App\Models\PJT;
use App\Models\IUJK;
use App\Models\Forum;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Budaya;
use App\Models\Wisata;
use App\Models\Halaman;
use App\Models\Kuliner;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function beranda()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('superadmin')) {
                return redirect('superadmin/beranda');
            } elseif (Auth::user()->hasRole('pemohon')) {
                return redirect('pemohon');
            }
        }
        $wisata = Wisata::orderBy('id', 'DESC')->limit(3)->get();
        $budaya = Budaya::orderBy('id', 'DESC')->limit(3)->get();
        $kuliner = Kuliner::orderBy('id', 'DESC')->limit(3)->get();

        return view('home', compact('wisata', 'budaya', 'kuliner'));
    }
    public function tentangkami()
    {
        $data = Halaman::where('nama', 'tentang kami')->first();
        return view('struktur', compact('data'));
    }
    public function renstra()
    {
        $data = Halaman::where('nama', 'renstra')->first();
        return view('renstra', compact('data'));
    }
    public function tupoksi()
    {
        $data = Halaman::where('nama', 'tupoksi')->first();
        return view('tupoksi', compact('data'));
    }
    public function wisata()
    {
        $wisata = Wisata::orderBy('id', 'DESC')->get();

        return view('wisata', compact('wisata'));
    }
    public function budaya()
    {
        $budaya = Budaya::orderBy('id', 'DESC')->get();

        return view('budaya', compact('budaya'));
    }
    public function kuliner()
    {
        $kuliner = Kuliner::orderBy('id', 'DESC')->get();

        return view('kuliner', compact('kuliner'));
    }
    public function detailwisata($id, $slug)
    {
        $data = Wisata::find($id);
        return view('detail_wisata', compact('data'));
    }
    public function detailbudaya($id, $slug)
    {
        $data = Budaya::find($id);
        return view('detail_budaya', compact('data'));
    }
    public function detailkuliner($id, $slug)
    {
        $data = Kuliner::find($id);
        return view('detail_kuliner', compact('data'));
    }
    public function detailBerita($id, $slug)
    {
        $data = Berita::find($id);
        return view('detail_berita', compact('data'));
    }
    public function agenda()
    {
        $agenda = Agenda::orderBy('id', 'DESC')->get();
        return view('agenda', compact('agenda'));
    }
    public function pelatihan()
    {
        return view('pelatihan');
    }
    public function sertifikasi()
    {
        return view('sertifikasi');
    }
    public function bimtek()
    {
        return view('bimtek');
    }
    public function usaha()
    {
        return view('usaha');
    }
    public function penyelenggaraan()
    {
        return view('penyelenggaraan');
    }
    public function pemanfaatan()
    {
        return view('pemanfaatan');
    }
    public function iujk()
    {
        $data = IUJK::orderBy('id', 'DESC')->get();
        return view('iujk', compact('data'));
    }
    public function tdup()
    {
        return view('tdup');
    }
    public function bu()
    {
        return view('bu');
    }
    public function timpembina()
    {
        return view('timpembina');
    }
    public function standarbiaya()
    {
        return view('standarbiaya');
    }
    public function progresspaket()
    {
        return view('progresspaket');
    }
    public function skaskt()
    {
        return view('skaskt');
    }
    public function pjt()
    {
        $data = PJT::orderBy('id', 'DESC')->get();
        return view('pjt', compact('data'));
    }
    public function informasi()
    {
        return view('informasi');
    }
    public function laporan()
    {
        return view('laporan');
    }
    public function undangundang()
    {
        return view('undangundang');
    }
    public function pp()
    {
        return view('pp');
    }
    public function perpres()
    {
        return view('perpres');
    }
    public function permen()
    {
        return view('permen');
    }
    public function kepmen()
    {
        return view('kepmen');
    }
    public function edaran()
    {
        return view('edaran');
    }

    public function referensi()
    {
        return view('referensi');
    }

    public function perda()
    {
        return view('perda');
    }
    public function pergub()
    {
        return view('pergub');
    }
    public function perwali()
    {
        return view('perwali');
    }
    public function sk()
    {
        return view('sk');
    }
    public function forum()
    {
        $data = Forum::orderBy('id', 'DESC')->get();
        return view('forum', compact('data'));
    }
    public function detailForum($id, $slug)
    {
        $data = Forum::find($id);
        return view('detail_forum', compact('data'));
    }
}
