<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;

    // public function seller_permissions()
    // {
    //     return $this->hasMany(seller_permission::class);
    // }
    public function sellers()
    {
        return $this->belongsToMany(seller::class);
    }

}
