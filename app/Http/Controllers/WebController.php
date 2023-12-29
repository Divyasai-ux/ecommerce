<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\SubCategories;
use App\Product;
use Response, DB;
use Session,Validator;
use Auth;
class WebController extends Controller
{
    // public function __construct(){
    //     $categories = Categories::all();
    //     $sub_categories= SubCategories::all();
    //     $catslist= Categories::with('sub_cat')->get();
    //     $user_id= session()->get('user_id');

    //     view()->share(['categories'=>$categories, 'sub_categories'=>$sub_categories,'catslist'=>$catslist,'user_id'=>$user_id]);
    // }

    protected $user;

    public function __construct(){

        // $user_id= session()->get('user_id');
        $this->middleware(function ($request, $next) {
            $this->user= \Auth::user();
            $categories = Categories::all();
            $sub_categories= SubCategories::all();
            $catslist= Categories::with('sub_cat')->get();
            if(empty($this->user)){
                $user_id='';
                view()->share(['categories'=>$categories, 'sub_categories'=>$sub_categories,'catslist'=>$catslist,'user_id'=>$user_id]);
                return $next($request);
            }else{
                $cartproducts= DB::table('cart')
                ->join('product_details','product_details.id','cart.product_id')
                ->select('product_details.id as product_id','cart.id as cart_id','product_details.product_name','product_details.photo1','cart.quantity','cart.total','product_details.product_price')
                ->where('user_id',$this->user['id'])->get();
                // dd($cartproducts);
                $product_count= DB::table('cart')->where('user_id',$this->user['id'])->count();
        // dd($product_count);

                view()->share(['categories'=>$categories, 'sub_categories'=>$sub_categories,'catslist'=>$catslist,'user_id'=>$this->user,'cartproducts'=>$cartproducts,'product_count'=>$product_count]);
                return $next($request);
            }

        });
    }



    public function index(){
        $categories=Categories::all();
        $types= SubCategories::all();
        $products=Product::all();
        $cats= Categories::with('catproduct')->get();

        $skincare= DB::table('product_categories')
        ->where('category','like','%skin%')->get();
        $skinid=$skincare[0]->id;

        $facecare= DB::table('product_categories')
        ->where('category','like','%face%')->get();
        $faceid=$facecare[0]->id;

        $haircare= DB::table('product_categories')
        ->where('category','like','%hair%')->get();
        $hairid=$haircare[0]->id;

        $bodycare= DB::table('product_categories')
        ->where('category','like','%body%')->get();
        $bodyid=$bodycare[0]->id;

        $skinproducts= DB::table('product_details')
        ->select('id','product_name','product_price','photo1')
        ->where('product_category_id',$skinid)->get();;

        $hairproducts= DB::table('product_details')
        ->select('id','product_name','product_price','photo1')
        ->where('product_category_id',$hairid)->get();;

        $bodyproducts= DB::table('product_details')
        ->select('id','product_name','product_price','photo1')
        ->where('product_category_id',$bodyid)->get();

        $faceproducts= DB::table('product_details')
        ->select('id','product_name','product_price','photo1')
        ->where('product_category_id',$faceid)->get();;
        // dd($bodyproducts);
        return view('welcome',compact('products','cats','skinproducts','hairproducts','bodyproducts','faceproducts'));
    }

    

    public function login(){
        return view('login');
    }

    public function loginpost(){
        $input = \Request::all();
        $rules = ['contact'=>'required', 'password'=>'required'];
        $friendly=['contact'=>'Contact','password'=>'Password'];
        $validation= validator::make($input,$rules,$friendly);
        if($validation->fails()){
            // return redirect()->back()->withInput($input)->withErrors($validation);
            return redirect()->back()->with('yotest','Error');
        }
        else{
            if(Auth::attempt(['contact'=>$input['contact'],'password'=>$input['password']])){

                session()->put('user_id', Auth::user()->id);
                // $user_id= session()->get('user_id');
               // dd($user_id);
                return redirect()->intended('profile');
                // return "Hello";
            }
            else{
                return redirect()->back()->with('error','Invalid Credientials');
            }
        }
    }
    
    public function signup(){
        return view('signup');
    }
    public function SignupPost(Request $request){
        $input=[
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        $rules=[
            'name'=> 'required',
            'contact'=>'required|max:10',
            'email'=>'required|email',
            'password'=>'required'
        ];

        $validator= Validator::make($input, $rules);
        if($validator->fails())
            return redirect()->back()->withInput($request->all)->withErrors($validator);
        DB::table('users')->insert([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'contact'=>$input['contact'],
            'password'=>bcrypt($input['password']),
            'hint'=>$input['password']
        ]);
        return redirect()->intended('profile');
    }

    public function aboutus(){
    	return view('aboutus');
    }

    public function faqshow(){
        // dd($this->user);
        $faqs= DB::table('faqs')->get();
        $user_id= session()->get('user_id');
        if(empty(session())){
            dd('no session');
        }
        return view('faqs',compact('faqs','user_id'));
    }

    public function contactus(){
        // $details= DB::table('company_information')->get();
    	// return view('contactus',compact('details'));
        return view('contactus');
    }

    public function postcontactus(Request $request){
        $input=[
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'message'=>$request->message
        ];
        // dd($input);
        $rules=[
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required|',
            'message'=>'required|max:254'
        ];

        $validator=\Validator::make($input,$rules);
        if($validator->fails())
            return redirect()->back()->withInput($request->all)->withErrors($validator);

        DB::table('contactus')->insert([
            'name'=>$input['name'],
            'email'=>$input['email'],
            'contact'=>$input['contact'],
            'message'=>$input['message']
        ]);
        return redirect()->back()->with('message','Form Submitted Successfully!');
    }

    public function product($id){
        // dd($id);
        // return view('product');
        $product=Product::find($id);
        $allproducts=Product::all();
        
        return view('product',compact('product','allproducts'));
    }

    public function ProductByCategory($id){
        $products= Product::where('product_category_id', $id)->get();
        return view('product_by_categories', compact('products'));
    }
    public function ProductByType($id){
        $products= Product::where('product_sub_category_id', $id)->get();
        $category= Categories::where('id',$id)
        ->select('category')->get();
        return view('product_by_types', compact('products','category'));
    }

    public function cart(){
        if(Auth::user()){
                // dd('User Logged In!');
            $productsincart= DB::table('cart')
            ->join('product_details','product_details.id','cart.product_id')
            ->select('product_details.id','product_details.product_name','product_details.photo1','cart.quantity','cart.total','product_details.product_price')
            ->where('user_id',Auth::user()->id)->get();
                // dd($cartproducts);
            return view('cart',compact('productsincart'));
        }
        else{
                // dd('User Not Logged In!');
                // return view('login');
            return redirect()->route('login');
        }
        // return view('cart');
    }

    public function addProductToCart($id){
        $product_price= DB::table('product_details')
        ->select('product_price')
        ->where('id',$id)->get();
        $price=$product_price[0]->product_price;
        // dd($price);
        if(Auth::user()){
            $cartproduct= DB::table('cart')
            ->select('quantity')->where([['user_id',Auth::user()->id],['product_id',$id]])->get();
            // if(empty($cartproduct)){
            //     $product= DB::table('cart')->insert([
            //         'user_id'=>Auth::user()->id,
            //         'product_id'=>$id,
            //         'quantity'=>1,
            //         'total'=>$price
            //     ]);
            //     return redirect()->back()->with('success','Product Added to Cart!');
            // }
            // else{
            //     $quantity= $cartproduct[0]->quantity;
            //     $newquantity= $quantity+1;
            //     $newtotal= $price * $newquantity;
            //     // dd($newtotal);
            //     DB::table('cart')
            //     ->where([['user_id',Auth::user()->id],['product_id',$id]])
            //     ->update(['quantity'=>$newquantity,'total'=>$newtotal]);
            //     return redirect()->back()->with('success','Product Added Successfully!');
            // }
            if(sizeof($cartproduct)){
                $quantity= $cartproduct[0]->quantity;
                $newquantity= $quantity+1;
                $newtotal= $price * $newquantity;
                DB::table('cart')
                ->where([['user_id',Auth::user()->id],['product_id',$id]])
                ->update(['quantity'=>$newquantity,'total'=>$newtotal]);
                return redirect()->back()->with('success','Product Added Successfully!');
            }else{
                $product= DB::table('cart')->insert([
                    'user_id'=>Auth::user()->id,
                    'product_id'=>$id,
                    'quantity'=>1,
                    'total'=>$price
                ]);
                return redirect()->back()->with('success','Product Added to Cart!');
            }
        }
        else{
            return redirect()->back()->with('error','You are Not Logged In!');
        }
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if(!$cart) {
            $cart = [
                $id => [
                    "id"=>$product->id,
                    "name" => $product->product_name,
                    "quantity" => 1,
                    "price" => $product->product_price,
                    "photo" => $product->photo1
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect('cart')->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id"=>$product->id,
            "name" => $product->product_name,
            "quantity" => 1,
            "price" => $product->product_price,
            "photo" => $product->photo1
        ];
        session()->put('cart', $cart);
        return redirect('cart')->with('success', 'Product added to cart successfully!');
    }



    public function update(Request $request)
    {
        $quantity= $request->quantity;
        if($quantity >0 && !is_int($quantity)){
            if($request->id and $request->quantity)
            {
                $cart = session()->get('cart');

                $cart[$request->id]["quantity"] = $request->quantity;

                session()->put('cart', $cart);

                session()->flash('success', 'Cart updated successfully');
            }
        }else{
            session()->flash('error', 'Invalid Input!!');
        }
    }

    public function ProductDecrement(Request $request){
        // dd($request);
        // dd("hello");

        $user_id = Auth::user()->id;
        $product_id = $request->pro_id;
        $qty= $request->qty;
        $newqty= $qty-1;
        $product= DB::table('product_details')
        ->select('product_price')->where('id',$product_id)->get();
        $product_price= $product[0]->product_price;

        $total=  $newqty* $product_price;
        DB::table('cart')
        ->where([['user_id',$user_id],['product_id',$product_id]])
        ->update(['quantity'=>$newqty, 'total'=>$total]);
        // return $total;

        $cartdata= DB::table('cart')
        ->where('user_id',$user_id)->get();
        $finalamount= 0;

        foreach($cartdata as $data){
            $finalamount+=$data->total;
        }
        return $finalamount;

    }

     public function ProductIncrement(Request $request){
        // dd($request);
        // dd("hello");

        $user_id = Auth::user()->id;
        $product_id = $request->pro_id;
        $qty= $request->qty;
        $newqty= $qty+1;
        $product= DB::table('product_details')
        ->select('product_price')->where('id',$product_id)->get();
        $product_price= $product[0]->product_price;

        $total=  $newqty* $product_price;
        DB::table('cart')
        ->where([['user_id',$user_id],['product_id',$product_id]])
        ->update(['quantity'=>$newqty, 'total'=>$total]);
        $cartdata= DB::table('cart')
        ->where('user_id',$user_id)->get();
        $finalamount= 0;

        foreach($cartdata as $data){
            $finalamount+=$data->total;
        }
        return $finalamount;
    }

    // public function remove(Request $request)
    // {
    //     if($request->id) {

    //         $cart = session()->get('cart');

    //         if(isset($cart[$request->id])) {

    //             unset($cart[$request->id]);

    //             session()->put('cart', $cart);
    //         }

    //         session()->flash('success', 'Product removed successfully');
    //     }
    // }

    public function remove($cart_id){
        DB::table('cart')->where('id', '=', $cart_id)->delete();
        return redirect()->back()->with('message','Product Deleted');
    }

    public function checkout(){
        // $states=DB::table('states')->orderBy('state', 'asc')->get();
        // return view('checkout',compact('states'));
        // dd(Auth::user()->id);
        $delivery_address= DB::table('delivery_details')
        ->join('states','states.id','delivery_details.state')
        ->select('delivery_details.*','states.state')
        ->where('user_id',Auth::user()->id)->get();

        if($delivery_address[0]->type ==1){
            $type="Home";
        }else{
            $type="Work";
        }

        $cartproducts= DB::table('cart')
                ->join('product_details','product_details.id','cart.product_id')
                ->select('product_details.id','product_details.product_name','product_details.photo1','cart.quantity','cart.total','product_details.product_price')
                ->where('user_id',$this->user['id'])->get();
        

        return view('checkout',compact('delivery_address','type'));
    }

    public function search(Request $request){
        $search= $request->search;
        $products= DB::table('product_details')->where('product_name', 'like', '%'.$search.'%')->get();
        return view('searchproduct',compact('products'));
    }


    public function newslettersubscribe(Request $request){
        $input=['email'=>$request->email];
        $rules=['email'=>'required|email'];
        $validator = \Validator::make($input,$rules);
        if($validator->fails())
            return redirect()->back()->withInput($request->all)->withErrors($validator);
        DB::table('subscribers')->insert([
            'email'=>$input['email']
        ]);
        return redirect()->back()->with('message','You Subscribed Successfully!!');
    }

    public function submitState(Request $request){
        // dd($request->id);
        $data= DB::table('states')->where('id',$request->id)->get();
        // dd($data[0]->price);
        echo "<h4>Your Shiping Charge is {$data[0]->price} Rs.</h4>";
    }

    public function profile(){
        $user= Auth::user();
        $delivery_address= DB::table('delivery_details')
        ->where('user_id',Auth::user()->id)->get();
        $states= DB::table('states')->get();
        $types= DB::table('delivery_type')->get();
        return view('profile', compact('user','delivery_address','states','types'));
    }

    public function updateProfile(Request $request){
        $user= Auth::user();
        // dd($request);
        $input=[
            'name'=>$request->user_name,
            'contact'=>$request->contact,
            'email'=>$request->email
        ];
        // dd($input);
        $rules=[
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required|email'
        ];

        $validator= Validator::make($input, $rules);
        if($validator->fails()){
            return redirect()->back()->withInput($request->all)->withErrors($validator);
        }

        DB::table('users')
        ->where('id',$user->id)
        ->update(['name' => $input['name'], 'email'=>$input['email'],'contact'=>$input['contact']]);
        return redirect()->back()->with('message','Profile Updated Successfully');
    }

    public function addAddress(Request $request){
        $user_id= Auth::user()->id;
        $input=[
            'name'=>$request->name,
            'pincode'=>$request->pincode,
            'address'=>$request->address,
            'landmark'=>$request->landmark,
            'city'=>$request->city,
            'state'=>$request->state,
            'contact'=>$request->contact,
            'type'=>$request->type
        ];

        $rules=[
            'name'=>'required',
            'pincode'=>'required',
            'address'=>'required',
            'landmark'=>'required',
            'city'=>'required',
            'state'=>'required',
            'contact'=>'required',
            'type'=>'required'
        ];
        $validator = \Validator::make($input,$rules);
        if($validator->fails())
            return redirect()->back()->withInput($request->all)->withErrors($validator);
        DB::table('delivery_details')->insert([
            'name'=>$input['name'],
            'pincode'=>$input['pincode'],
            'address'=>$input['address'],
            'landmark'=>$input['landmark'],
            'city'=>$input['city'],
            'state'=>$input['state'],
            'contact'=>$input['contact'],
            'type'=>$input['type'],
            'user_id'=>$user_id
        ]);
        return redirect()->back()->with('message','You Subscribed Successfully!!');
    }

    public function DeleteAddress(){
        $user_id= Auth::user()->id;
        DB::table('delivery_details')->where('user_id','=',$user_id)->delete();
        return redirect()->back()->with('message','Address Removed');
    }

    public function logout(){
    Auth::logout();
    return redirect()->route('login');
}
}
