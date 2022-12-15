<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class seller extends Model
{
    protected $fillable=["name","address","gender","no_hp","status"];
    protected $table = "seller";
 
    public function products()
    {
    	return $this->hasMany(product::class);
    }

    public function permissions()
    {
    	return $this->belongsToMany(permission::class, "seller_permission", "permission_id", "seller_id");
    }

}
