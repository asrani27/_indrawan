<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IUJK extends Model
{
    use HasFactory;
    protected $table = 'data_iujk';
    protected $guarded = ['id'];
    public $timestamps = false;
}
