<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table='sub_categories';

    protected $fillable=['sub_category','product_category_id'];


    public function catcols(){
        return $this->belongsto(Categories::class,'product_category_id','id');
    }
}
