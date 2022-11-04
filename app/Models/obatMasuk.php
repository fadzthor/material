<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_obat',
        'distributor',        
        'tanggal_masuk',
        'jumlah'
    ];
}
