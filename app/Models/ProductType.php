<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $table = "type_products";
    public function product() {
        return $this->hasMany('App\Models\Products','id_type','id');
    }
}
