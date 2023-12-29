<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table="product_categories";

    protected $fillable=['category'];

    public function catproduct(){
    	return $this->hasMany(Product::class,'product_category_id','id');
    }

    public function sub_cat(){
    	return $this->hasMany(SubCategories::class,'product_category_id','id');
    }
}
