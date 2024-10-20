<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuSiswa extends Model
{
    use HasFactory;

    protected $table = 'kartu_siswa';
    protected $primaryKey = 'id_kartu_siswa';

    protected $fillable = [
        'image',
    ];
}
