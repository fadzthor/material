<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_obat',
        'nama_pasien',                
        'jumlah'
    ];
}
