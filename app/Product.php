<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product_details';

    protected $fillable =[
    						'product_name',
    						'product_description',
    						'product_inshort',
    						'product_price',
    						'product_category_id',
    						'product_sub_category_id',
    						'photo1',
    						'photo2',
    						'photo3',
    						'photo4',
    						'in_stock',
                            'video'
    					];

    public function productcols(){
        return $this->belongsto(Categories::class,'product_category_id','id');
    }
}
