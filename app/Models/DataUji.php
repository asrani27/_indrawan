<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUji extends Model
{
    use HasFactory;
    protected $table = 'data_uji';
    protected $guarded = ['id'];
    public $timestamps = false;
}
