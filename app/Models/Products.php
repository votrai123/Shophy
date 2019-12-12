<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = "products";
    public function product_type() {
        return $this->belongsTo('App\Models\ProductType','id_type','id');
    }
    public function images_product() {
        return $this->hasMany('App\Models\ImagesProduct','id_image','id');
    }  
    public function comment_product() {
        return $this->hasMany('App\Models\Comment','idproduct','id');
    }  
    public function bill_detail() {
        return $this->hasMany('App\Models\BillDetail','id_product','id');
    }
    protected $fillable = [
        'ProName'
    ];
}
