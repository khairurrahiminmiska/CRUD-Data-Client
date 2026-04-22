<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = [
    'nama_client',
    'kampus',
    'tanggal',
    'paket',
    'no_hp',
    'lokasi_foto'
];
}