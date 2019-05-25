<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     use SoftDeletes;
    //
    protected $fillable = ['price', 'units', 
    'name','description','image'];

    public function orders()
        {
            return $this->hasMany(Order::class);
        }
}
