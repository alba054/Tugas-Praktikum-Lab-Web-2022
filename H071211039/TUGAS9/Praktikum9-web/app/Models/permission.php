<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    protected $fillable=['name','descriptions','status'];
    protected $table = "permission";
    use HasFactory;
}
