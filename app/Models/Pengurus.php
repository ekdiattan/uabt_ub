<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = 'pengurus';
    protected $fillable = [
        'nama',
        'email',
        'nim',
        'fakultas',
        'prodi',
        'angkatan',
        'alamat',
        'nohp',
        'jeniskelamin',
        'divisi',
    ];
}
