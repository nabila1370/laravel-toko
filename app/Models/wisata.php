<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';
    protected $fillable = [
        'name_wisata',
        'lokasi',
        'deskripsi',
        'harga_tiket',
        'jam_buka',
    ];
}
