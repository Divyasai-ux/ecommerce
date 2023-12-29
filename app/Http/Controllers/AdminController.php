<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use App\Product;
use DB;
use \Validator;
use \Auth;
use Storage;

class AdminController extends Controller
{

    public function login(){
        return view('admin.login');
    }
    public function loginpost(){
        $input = \Request::all();
        $rules = ['username'=>'required', 'password'=>'required'];
        $friendly=['username'=>'Username','password'=>'Password'];
        $validation= validator::make($input,$rules,$friendly);
        if($validation->fails()){
            return Redirect::back()->withInput($input)->withErrors($validation);
        }
        else{
            if(Auth::attempt(['contact'=>$input['username'],'password'=>$input['password']])){
                return redirect()->intended('admin/home');
                // return "Hello";
            }
            else{
                return redirect()->back()->with('error','Invalid Credientials');
            }
        }
    }

    public function index(){
        $productcount= DB::table('product_details')->count();
        $categorycount=DB::table('product_categories')->count();
        $orderscount=DB::table('orders')->count();
        $userscount=DB::table('users')->count();
        $subscount=DB::table('subscribers')->count();
        $faqs= DB::table('faqs')->get();
        return view('admin.home',compact('productcount','categorycount','orderscount','userscount','subscount','faqs'));
    }
    public function categories(){
       $categories= Categories::all();
        	// dd($categories);
       return view('admin.categories',compact('categories'));
   }

   public function types(){
         // $sub_categories= SubCategories::all();
    $sub_categories=DB::table('sub_categories')
    ->join('product_categories','product_categories.id','=','sub_categories.product_category_id')->get();
         // dd($sub_categories);
    $categories= Categories::all();
    return view('admin.types',compact('sub_categories','categories'));
}

public function products(){
   $categories= Categories::all();
   $sub_categories= SubCategories::all();
   return view('admin.products', compact('categories','sub_categories'));
}
public function faqs(){
    $faqs= DB::table('faqs')->get();
    return view('admin.faqs',compact('faqs'));
}
public function postfaq(Request $request){
    $input=[
        'question'=>$request->question,
        'answer'=>$request->answer
    ];

    $rules=[
        'question'=>'required|max:254',
        'answer'=>'required|max:999'
    ];
    $validator=\Validator::make($input,$rules);
    if($validator->fails())
        return redirect()->back()->withInput($request->all)->withErrors($validator);
    DB::table('faqs')->insert([
        'question'=>$input['question'],
        'answer'=>$input['answer']
    ]);
    return redirect()->back()->with('success','FAQ Added Successfully!!');

}

public function deletefaq($id){
    DB::table('faqs')->where('id',$id)->delete();
    return redirect()->back()->with('message','FAQ Deleted Successfully!!');
}


public function storecategory(Request $request){
        	// dd($request);
   Categories::create(['category'=>$request->category]);
   return redirect()->back()->with('message','Category Entered Successfully!!');
}

public function deletecategory(Request $request){
   $id= $request->id;
            	// dd($id);
   Categories::destroy($id);
            	// dd($category);
   return redirect()->back()->with('message','Category Deleted Successfully!!');
}

public function storetype(Request $request){
        // dd($request);
   SubCategories::create([
    'sub_category'=>$request->sub_category, 
    'product_category_id'=>$request->category_id
]);
   return redirect()->back()->with('success','Product Type Entered Successfully');
}

public function deletetype(Request $request){
   SubCategories::destroy($request->id);
   return redirect()->back()->with('message','Product Type Deleted');
}

public function storeproduct(Request $request){
        	// Product::create($request->all());

 $input =[
    'product_name'=>$request->product_name,
    'product_category_id'=>$request->product_category_id,
    'product_sub_category_id'=>$request->product_sub_category_id,
    'product_price'=>$request->product_price,
    'product_description'=>$request->product_description,
    'product_inshort'=>$request->product_inshort,
    'photo1'=>$request->file('photo1'),
    'photo2'=>$request->file('photo2'),
    'photo3'=>$request->file('photo3'),
    'photo4'=>$request->file('photo4'),
    'video'=>$request->video,
];
$rules=[
    'product_name'=>'required',
    'product_category_id'=>'required',
    'product_sub_category_id'=>'required',
    'product_price'=>'required',
    'product_description'=>'required',
    'product_inshort'=>'required',
    'photo1'=>'required|image|max:8000',
    'photo2'=>'nullable|image|max:8000',
    'photo3'=>'nullable|image|max:8000',
    'photo4'=>'nullable|image|max:8000',
    'video'=>'nullable'
];
$validator = \Validator::make($input,$rules);
if($validator->fails())
    return redirect()->back()->withInput($request->all)->withErrors($validator);
if($request->hasFile('photo1')){
    $filename=uniqid().'.'.$request->file('photo1')->getClientOriginalExtension();
    $request->file('photo1')->move('images/products',$filename);
    $input['photo1']=$filename;
}
if($request->hasFile('photo2')){
    $filename=uniqid().'.'.$request->file('photo2')->getClientOriginalExtension();
    $request->file('photo2')->move('images/products',$filename);
    $input['photo2']=$filename;
}
if($request->hasFile('photo3')){
    $filename=uniqid().'.'.$request->file('photo3')->getClientOriginalExtension();
    $request->file('photo3')->move('images/products',$filename);
    $input['photo3']=$filename;
}
if($request->hasFile('photo4')){
    $filename=uniqid().'.'.$request->file('photo4')->getClientOriginalExtension();
    $request->file('photo4')->move('images/products',$filename);
    $input['photo4']=$filename;
}
Product::insert($input);
return redirect()->back()->with('message','Product Entered Successfully!!');
}

public function contactus(){
    $queries= DB::table('contactus')->get();
    return view('admin.contactus',compact('queries'));
}

public function orderslist(){
    $orders=DB::table('orders')->get();
    return view('admin.orders',compact('orders'));
}

public function ordersingle($id){
    $orderdetails=DB::table('orders')->where('id',$id)->get();
    return view('admin.ordersingle',compact('orderdetails'));
}

public function productlist(){
        // $products= Product::all();
    $products=DB::table('product_details')
    ->join('product_categories','product_categories.id','=','product_details.product_category_id')
    ->select('product_details.product_name','product_details.product_price','product_categories.category','product_details.id')->get();
    return view('admin.productslist',compact('products'));
}

public function productsingle($id){
        // $productdetails=Product::find($id);
    $productdetails=DB::table('product_details')
    ->join('product_categories','product_categories.id','=','product_details.product_category_id')
    ->join('sub_categories','sub_categories.id','=','product_details.product_sub_category_id')
    ->select('product_details.*','product_categories.category','sub_categories.sub_category')
    ->where('product_details.id',$id)->first();
    return view('admin.productsingle',compact('productdetails'));
}

public function deleteproduct($id){

    $product=Product::find($id);
        // dd($product->photo1);

    Product::destroy($id);
    return redirect()->route('product.list')->with('message','Product Deleted Successfully');
}

    // public function editproduct($id){
    //     $productdetails= Product::find($id);
    //     $categories= Categories::all();
    //     $sub_categories= SubCategories::all();
    //     return view('admin.editproduct',compact('productdetails','categories','sub_categories'));
    // }

    // public function updateproduct(Request $request){

    // }

public function changepassword(){
    return view('admin.changepassword');
}
public function changepasswordpost(Request $request){
    $password= bcrypt($request->password);
    $hint= $request->password;
    $user = auth()->user();
    DB::table('users')
    ->where('id', $user->id)
    ->update(['password' => $password, 'hint'=>$hint]);
    Auth::logout();
    return redirect('admin/login')->with('success','Password Changed Successfully!');
}

public function subscribers(){
    $subscribers= DB::table('subscribers')->get();
    return view('admin.subscribers',compact('subscribers'));
}

public function states(){
    $states= DB::table('states')->get();
    return view('admin.states',compact('states'));
}

public function statepost(Request $request){
    $input= [
        'state'=>$request->state,
        'price'=>$request->price
    ];  

    $rules=[
        'state'=>'required',
        'price'=>'required'
    ];
    $validator= Validator::make($input,$rules);
    if($validator->fails())
        return redirect()->back()->withInput($request->all)->withErrors($validator);

    DB::table('states')->insert([
        'state'=>$input['state'],
        'price'=>$input['price']
    ]);
    return redirect()->back()->with('success','State Added Successfully!!');

}

public function contactinfo(){
    $data = DB::table('company_information')->get(); 
    return view('admin.contactinfo',compact('data'));
}

public function companyinfopost(Request $request){
    $input= [
        'city'=>$request->city,
        'state'=>$request->state,
        'address'=>$request->address,
        'email'=>$request->email,
        'contact'=>$request->contact
    ];  

    $rules=[
        'city'=>'required',
        'state'=>'required',
        'address'=>'required',
        'email'=>'required|email',
        'contact'=>'required'
    ];
    $validator= Validator::make($input,$rules);
    if($validator->fails())
        return redirect()->back()->withInput($request->all)->withErrors($validator);

    DB::table('company_information')->insert([
        'city'=>$input['city'],
        'state'=>$input['state'],
        'address'=>$input['address'],
        'email'=>$input['email'],
        'contact'=>$input['contact']
    ]);
    return redirect()->back()->with('success','Information Added Successfully!!');
}

public function deletecompanyinfo($id){
    DB::table('company_information')->where('id',$id)->delete();
    return redirect()->route('admin.contactinfo')->with('message','Information Deleted Successfully');
}
public function logout(){
    Auth::logout();
    return redirect('admin/login')->with('success','You Logged Out Successfully!');
}

public function sliderimages(){
    $images= DB::table('slider_images')->get();
    // dd($images);
    return view('admin.sliderimages',compact('images'));
}


public function sliderimagespost(Request $request){
    // dd($request->photo);
    $input =[
    'photo'=>$request->file('photo'),
];
$rules=[
    'photo'=>'required|image|max:8000',
    
];
$validator = \Validator::make($input,$rules);
if($validator->fails())
    return redirect()->back()->withInput($request->all)->withErrors($validator);
if($request->hasFile('photo')){
    $filename=uniqid().'.'.$request->file('photo')->getClientOriginalExtension();
    $request->file('photo')->move('images/slider',$filename);
    $input['photo']=$filename;
}
    DB::table('slider_images')->insert(
        ['photo' => $input['photo']]
    );
    return redirect()->back()->with('success','Slider Images Added Successfully!!');
}

public function deleteslider($id){
   DB::table('slider_images')->where('id',$id)->delete();
    return redirect()->back()->with('message','Slider Images Deleted Successfully');
}




}
