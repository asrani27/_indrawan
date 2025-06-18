<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKlasifikasi extends Model
{
    use HasFactory;
    protected $table = 'subklasifikasi';
    protected $guarded = ['id'];
    public $timestamps = false;
}
