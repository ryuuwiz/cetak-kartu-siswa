<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesainKartu extends Model
{
    use HasFactory;

    protected $table = 'desain_kartu';
    protected $fillable = [
        'gambar',
    ];
}
