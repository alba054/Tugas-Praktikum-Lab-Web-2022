<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['name', 'price', 'status', 'categories_id', 'sellers_id'];

    public function category()
    {
        return $this->belongsTo(category::class, 'categories_id');
    }

    public function seller()
    {
        return $this->belongsTo(seller::class, 'sellers_id');
    }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = ucfirst($value);
    // }
    protected function name() : Attribute
    {
        return new Attribute(
            fn ($value) => strtolower($value)
        );
    }

    // protected function created_at() : Attribute
    // {
    //     return new Attribute(

    //     );
    // }

    // public function getFullNameAttribute()
    // {
    //     return
    // }
}
