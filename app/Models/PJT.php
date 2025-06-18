<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PJT extends Model
{
    use HasFactory;
    protected $table = 'pjt';
    protected $guarded = ['id'];
    public $timestamps = false;
}
