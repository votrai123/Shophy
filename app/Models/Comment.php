<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "comment_product";
    public function product() {
        return $this->belongsTo('App\Models\Products','idproduct','id');
    }
    public function users() {
        return $this->belongsTo('App\Models\User','iduser','id');
    }  
}
