<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $table = 'lagu';
    protected $fillable = ['judul', 'artis', 'album', 'tahun','genre','durasi','tahun_rilis'];
    protected $guarded = ['id'];
}