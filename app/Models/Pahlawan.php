<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pahlawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pahlawan',
        'daerah',
        'jasa',
        'gambar'
    ];
}
