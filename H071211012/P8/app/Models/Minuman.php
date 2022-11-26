<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    use HasFactory;

    protected $table = 'minumen';
    protected $fillable = ['nama_minuman', 'jenis_minuman', 'deskripsi', 'harga'];

}
