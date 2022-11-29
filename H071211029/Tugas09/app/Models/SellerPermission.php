<?php

namespace App\Models;

use App\Models\Seller;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SellerPermission extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // public function seller(){
    //     return $this->belongsTo(Seller::class, 'seller_permissions', 'permission_id', 'seller_id');
    // }

    // public function permission(){
    //     return $this->belongsTo(Permission::class, 'seller_permissions', 'seller_id', 'permission_id');
    // }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function permission(){
        return $this->belongsTo(Permission::class);
    }

}
