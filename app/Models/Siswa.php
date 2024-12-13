<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = [
        'nis',
        'nisn',
        'nama_lengkap',
        'tmpt_lhr',
        'tgl_lhr',
        'jk',
        'email',
        'alamat',
        'no_telp',
        'foto'
    ];
    public $timestamps = false;
}
