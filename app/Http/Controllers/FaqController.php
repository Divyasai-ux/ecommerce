<?php

namespace App\Http\Controllers;
// namespace App\Helpers;

use Illuminate\Http\Request;
use DB;
use App\Categories;
use App\SubCategories;
use App\Product;
use Auth;
// use App\Helpers\Helper;
class FaqController extends Controller
{
    protected $user;

	public function __construct(){
        
        // $user_id= session()->get('user_id');
        $this->middleware(function ($request, $next) {
        $this->user= \Auth::user();
        $categories = Categories::all();
        $sub_categories= SubCategories::all();
        $catslist= Categories::with('sub_cat')->get();
        $cartproducts= DB::table('cart')
                ->join('product_details','product_details.id','cart.product_id')
                ->select('product_details.id','product_details.product_name','product_details.photo1','cart.quantity','cart.total','product_details.product_price')
                ->where('user_id',$this->user['id'])->get();
        
        view()->share(['categories'=>$categories, 'sub_categories'=>$sub_categories,'catslist'=>$catslist,'user_id'=>$this->user,'cartproducts'=>$cartproducts]);
        return $next($request);
    });
        // dd($this->user);
        // view()->share(['categories'=>$categories, 'sub_categories'=>$sub_categories,'catslist'=>$catslist]);
    } 



    
}
