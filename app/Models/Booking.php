<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama',
        'whatsapp',
        'kota',
        'mobil',
        'tanggal',
        'jam',
        'catatan',
        'status',
    ];
}
