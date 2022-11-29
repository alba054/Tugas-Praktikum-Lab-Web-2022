<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function permission(){
        return $this->belongsToMany(Permission::class, 'seller_permissions', 'seller_id', 'permission_id');
    }
    
}
