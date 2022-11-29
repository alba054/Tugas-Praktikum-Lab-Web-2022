<?php

namespace App\Models;

use App\Models\Seller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function seller(){
        return $this->belongsToMany(Seller::class, 'seller_permissions', 'permission_id', 'seller_id');
    }
}