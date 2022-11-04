<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_obat',
        'id_jenis_obat',
        'stok',
        'tanggal_diperbarui'
    ];
}
