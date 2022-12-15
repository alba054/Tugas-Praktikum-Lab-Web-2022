<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(product::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(permission::class, 'seller_permissions', 'seller_id', 'permission_id');
    }
}
