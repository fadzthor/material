<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatJenis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal_dibuat',
        'tanggal_diperbarui',
    ];
}
