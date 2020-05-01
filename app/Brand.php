<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'name',
        'description'


    ];
    public function product(){
        return $this->hasMany(Product::class);
    }
}
