<?php

use App\Models\Infrastruktur;
use App\Models\Setting;
use App\Models\Klasifikasi;
use App\Models\Kualifikasi;
use App\Models\Layanan;
use App\Models\Pelatihan;
use App\Models\Peraturan;
use App\Models\SubKlasifikasi;

function logoHeader()
{
    return Setting::where('nama', 'header')->first()->file;
}

function peraturan()
{
    return Peraturan::get();
}

function infrastruktur()
{
    return Infrastruktur::get();
}
function layanan()
{
    return Layanan::get();
}
function pelatihan()
{
    return Pelatihan::orderBy('id', 'DESC')->get();
}
function kualifikasi()
{
    return Kualifikasi::get();
}

function klasifikasi()
{
    return Klasifikasi::get();
}

function subklasifikasi()
{
    return SubKlasifikasi::get();
}
function tenor($bulan)
{
    if ($bulan == 1) {
        return 30;
    } elseif ($bulan == 3) {
        return 90;
    } elseif ($bulan == 6) {
        return 180;
    } elseif ($bulan == 9) {
        return 270;
    } elseif ($bulan == 12) {
        return 365;
    }
}
