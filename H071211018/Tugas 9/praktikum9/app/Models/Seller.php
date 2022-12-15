<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable=["name", "address", "gender", "no_hp", "status"];
    use HasFactory;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, "seller_permissions");
    }
}
