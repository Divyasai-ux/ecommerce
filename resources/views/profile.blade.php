@extends('layouts.default')
@section('title','Profile')

@section('content')
<style type="text/css">
	.main-orange{
		background-color: rgb(237 149 58);
		height: 150px;
	}
	.pro-image{
		height: 150px;
		margin-top: -75px;

	}
	.pro-image img{
		height: 150px;
		width: 150px;
	}
	.pro-icons{
		/*display: block;*/
		/*border:1px solid blue;*/
		/*margin: 20px;*/
	}
	.pro-icons:hover{
		/*display: block;*/
		/*border:1px solid blue;*/
		/*margin: 20px;*/
		border-bottom: 2px solid orange;
		padding: 0 20px 0 20px;
	}
	.pro-name{
		color: #000;
		font-weight: 600;
		padding: 5px 0 5px 0;
		font-size: 1.2em;
	}
	.pro-box{
		border:1px solid #efefef; 
		border-radius: 15px; 
		margin-top: -40px; 
		background-color: white;
		/*margin: 0 100px 0 100px;*/
		width: auto;
		margin: -50px 10% 0 10%;
	}
	.pro-box1{
		border:1px solid #efefef; 
		width: auto;
		height: auto;
		margin: 0 15% 0 15%;
	}

	.pro-box2{
		border:1px solid #efefef; 
		width: auto;
		height: auto;
		margin: 0 15% 0 15%;
	}
	.pro-box3{
		border:1px solid #efefef; 
		width: auto;
		height: auto;
		margin: 0 15% 0 15%;
	}
	.pro-box4{
		border:1px solid #efefef; 
		width: auto;
		height: auto;
		margin: 0 15% 0 15%;
	}






	.content-form{
		margin: 50px 50px 20px 50px;
	}
	.container-box {
		display: inline;
		position: relative;
		padding-left: 30px;
		margin-bottom: 12px;
		cursor: pointer;
		/*font-size: 22px;*/
		margin-right: 10px;
		padding-top: 4px;
		font-weight: 500;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		/*border: 1px solid orange;*/
	}
	.container-box input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
		/*border:1px solid orange;*/
	}
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		/*background-color: #eee;*/
		border:1px solid grey;
		border-radius: 50%;
	}
	.container-box:hover input ~ .checkmark {
		/*background-color: white;*/
	}
	.container-box input:checked ~ .checkmark {
		background-color: white;
		border:1px solid orange;
	}
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}
	.container-box input:checked ~ .checkmark:after {
		display: block;
	}
	.container-box .checkmark:after {
		top: 7px;
		left: 7px;
		width: 10px;
		height: 10px;
		border-radius: 50%;
		background: orange;
	}
	.btn{
		background-color: orange;
		color: white;
		padding: 10px 55px 10px 55px;
	}
	.btn-home{
		background-color: grey;
		color: white;
		border:1px solid grey;
		padding: 5px 10px 5px 10px;
	}
	.btn:hover{
		color: white;
	}
	.prosection-active{
		border-bottom: 2px solid orange;
	}
	.address-section{
		height: 100px;
	}
	.product-name{
		color: black;
		font-weight: 600;
	}
</style>

<div class="container-fluid main-orange"></div>
<div class="container pro-box">
	<div class="row" align="center">
		<div class="pro-image">
			<img src="{{url('images/assets/user_avatar.png')}}" class="img-responsive">
		</div>
	</div>
	<div class="row" align="center">
		<p class="pro-name">{{$user->name}}</p>
	</div>
	<div class="row" align="center" style="padding: 20px 20px 0 20px;">
		<div class="col-md-3 col-sm-6 col-xs-6 pro-icons profile">
			<img src="{{url('images/assets/profile_1.png')}}">
			<p>My Profile</p>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6 pro-icons orders">

			<img src="{{url('images/assets/my_orders.png')}}">
			<p>My Order</p>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6 pro-icons address">
			<img src="{{url('images/assets/my_address.png')}}" height="52" width="52">
			<p>My Address</p>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6 pro-icons payment">
			<img src="{{url('images/assets/payment.png')}}">
			<p>Logout</p>
		</div>
	</div>
</div>
<div class="container pro-box1">
	<div class="row">
		<div class="content-form">
			<form method="post" action="{{route('update.user.profile')}}">
				@csrf
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="user_name" required="" value="{{$user->name}}" class="form-control" placeholder="Enter Your Name">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="contact" required="" class="form-control" placeholder="Enter Your Contact" value="{{$user->contact}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="email" required="" class="form-control" value="{{$user->email}}" placeholder="Enter Your Email">
					</div>
				</div>
				<div class="col-md-6" hidden="">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Enter Your Name">
					</div>
				</div>
				<div class="col-md-12 col-xs-12" style="margin-top: 10px;" align="center" hidden="">
					<div class="form-group radio-btns">
						<label class="container-box">Male
							<input type="radio" checked="checked" name="radio">
							<span class="checkmark"></span>
						</label>
						<label class="container-box">Female
							<input type="radio" name="radio">
							<span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div class="col-md-12 col-xs-12" style="margin-top: 10px; margin-bottom: 20px;" align="center">
					<button class="btn">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="container pro-box2">
	<div class="row" style="margin-top: 20px; border-bottom: 1px solid #efefef;">
		<div class="product-photo" style="float: left; width: 20%; padding: 0 20px 20px 20px;">
			<img src="{{url('images/products/5efee7d57cfe7.png')}}" height="100" class="img-responsive">
		</div>
		<div class="product-content" style="float: left; width: 75%;">
			<span class="product-name">Alovera Gel</span>
			<br>
			<br>
			<div>
				<span style="float: left;">Qty: 1</span>
				<span style="float: right;">Expected Delivery By</span>
			</div>
			<br>
			<br>
			<div class="">
				<span style="float: left;">Delivery Charges: Rs 70</span>
				<span style="float: right;">24 April, 2020</span>
			</div>
			<br>
			<br>
			<div>
				<p style="color: black;">Product Price: Rs 300</p>
			</div>

		</div>
	</div>
	<div class="row" style="margin-top: 20px; border-bottom: 1px solid #efefef">
		<div class="product-photo" style="float: left; width: 20%; padding: 0 20px 20px 20px;">
			<img src="{{url('images/products/5efee7d57cfe7.png')}}" height="100" class="img-responsive">
		</div>
		<div class="product-content" style="float: left; width: 75%;">
			<span class="product-name">Alovera Gel</span>
			<br>
			<br>
			<div>
				<span style="float: left;">Qty: 1</span>
				<span style="float: right;">Expected Delivery By</span>
			</div>
			<br>
			<br>
			<div class="">
				<span style="float: left;">Delivery Charges: Rs 70</span>
				<span style="float: right;">24 April, 2020</span>
			</div>
			<br>
			<br>
			<div>
				<p style="color: black;">Product Price: Rs 300</p>
			</div>

		</div>
	</div>

</div>
<div class="container pro-box3">
	<div class="row" style="margin-top: 50px; margin-bottom: 20px; position-left: 30%; ">
			<!-- <div class="address-section">
				<button class="btn button-address" id="add-user-address">Add Address</button>
			</div> -->
			<div  style=" margin-bottom: 20px;">
				<!-- <div class="col-xl-4 col-lg-4 col-md-4" > -->


					@if(sizeof($delivery_address))
					<div class="address-box" style="padding: 20px 20px 0 20px; margin-left: 30%;  border-radius: 10px; border:1px solid rgb(239	169	60); width: 30% !important;">
						<span><b>{{$delivery_address[0]->name}}</b></span>
						<br>
						<span>{{$delivery_address[0]->address}}, {{$delivery_address[0]->landmark}}</span>
						<ul>
							<li class="" style="display: inline-block; text-decoration:">Haryana *</li>
							<li class="" style="display: inline-block;"> {{$delivery_address[0]->city}} *</li>
							<li class="" style="display: inline;">{{$delivery_address[0]->pincode}}</li>
						</ul>
						<span>{{$delivery_address[0]->contact}}</span>
						<br>
						<button class="btn btn-sm btn-home" style="margin-top: 10px;">Home</button>
						<!-- <div class="update-address" style="margin-top: 20px;">
							<button class="btn btn-sm">Update Address</button>
						</div> -->
						<div class="delete-btn" style="text-align: right; margin-right: -40px; margin-bottom: -5px;">
							<a href="{{route('delete.address')}}"><span style="text-align: right; background-color: red; padding: 15px 8px 8px 8px; border-radius: 20px;"><i class="fa fa-trash fa-2x" style="color: white;" aria-hidden="true"></i></span></a>
						</div>
					</div>
					
					@else
					<div class="insert-address" style="padding: 10px 50px 10px 50px;">
						<form method="post" action="{{route('add.address')}}">
							@csrf
							<div class="col-md-6">
							<div class="form-group">
								<label>Name</label>
								<input type="texts" name="name" required="" placeholder="Enter Name" value="" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pincode</label>
								<input type="texts" name="pincode" required="" placeholder="Enter Pincode" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Address</label>
								<input type="texts" name="address" required="" placeholder="Enter Address" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Landmark</label>
								<input type="texts" name="landmark" required="" placeholder="Enter Landmark" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>City</label>
								<input type="texts" name="city" required="" placeholder="Enter City" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<select name="state" class="form-control" required="">
									<option disabled="" selected="">--Select State</option>
									@foreach($states as $state)
										<option value="{{$state->id}}">{{$state->state}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Mobile Number</label>
								<input type="texts" name="contact" required="" placeholder="Enter Contact Number" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Address Type</label>
								<select name="type" class="form-control" required="">
									<option disabled="" selected="">--Select Type</option>
									@foreach($types as $type)
										<option value="{{$type->id}}">{{$type->type}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-alert" required="" style="float: right;">Save</button>
							</div>
						</div>
						</form>
					</div>
					@endif


					
					
					<!-- </div> -->
				</div>


			</div>
		</div>
		<div class="container pro-box4">
			<div class="row">
				<div class="logout-btn" align="center" style="margin-top: 50px; margin-bottom: 30px;">
					<a href="{{route('user.logout')}}"><button class="btn btn-sm">Logout</button></a>
				</div>
			</div>
		</div>


		@endsection