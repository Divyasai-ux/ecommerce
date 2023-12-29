@extends('layouts/default')
@section('title','Sign Up')

@section('content')
<style type="text/css">
	.main-body{
		width: 100%;
		height: auto;
		background: url("{{url('images/assets/png3.jpg')}}") no-repeat;
		background-position: center;
		background-size: cover;
		padding-bottom: 30px;
	}
	.box{
		/*border:1px solid red;*/
		margin-top: 30px;
		padding: 0 50px 0 50px;

	}
	.form-horizontal{
		padding: 20px;
		background-color: white;
		/*box-shadow: 2px 2px  5px rgba(214, 214, 214, 0.5); */
		-webkit-box-shadow: 0 0 10px #adacac;
		box-shadow: 0 0 10px #adacac;
	}
  /*.form-horizontal{
    padding:50px;
    }*/
    .glyphicon{
    	color: rgb(243 195 102);
    }
    .btn{
    	background-color: rgb(243 195 102);
    	color: #fff;
     /* margin-top: 20px;
     border-radius: 50px;*/
     width: 100%;
     padding-left: 15%;
     padding-right: 15%;
     /*padding: 10px 20px 10px 20px;*/
 }
 .btn:hover{
 	/*background-color: rgb(243 195 102);*/
 	color: #fff;
 	/*padding: 10px 20px 10px 20px;*/
 }
 .form-control{
 	background-color: rgb(247 247 247);
 	border: none;
 	/*color: rgb(194  195 204 );*/
 	color: black;
 	font-size: 0.8em;
 }
    /*.address-box{
      border: 1px solid black;
      width: auto;

      }*/
      .tilted-address{
      	transform: rotate(270deg);
      /*writing-mode: vertical-rl;
      text-orientation: upright;*/
      width: 10%;
      float: left;
      font-size: 0.9em;
      color: rgb(108  106 115 );
      text-align: center;
      /*padding-top: 20px;*/
      margin-top: 90px;
  }
  .address-details{
  	width: 90%;
  	float: right;
  	padding-left: 10px;
  	padding-bottom: 15px;
  }
  .address-details h5{
  	color: white;
  }
  .address-details h6{
  	width: 70%;
  	text-align: justify;
  	color: white;
  }
  .address-details h6 span{
  	/*width: 70%;*/
  	font-size: 1.3em;
  	padding: 5px;
  	color: white;
  }
</style>


<div class="container-fluid main-body">
	<div class="row" align="center" style="margin-top: 30px;">
		<h2 style="font-weight: 700;">Create an Account</h2>
	</div>
	<div class="row">
		<div class="col-lg-offset-4 col-md-offset-4 col-md-4 col-xl-4 col-sm-12 col-xs-12 box" >
			@if(session()->has('message'))
			<div class="alert alert-success">
				{{session()->get('message')}}
			</div>
			@endif
			@if($errors->any())
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{$error}}</div>
			@endforeach
			@endif
			<form class="form-horizontal" action="{{route('signup_post')}}" method="post" style="padding-top: 50px; padding-bottom: 50px;">
				@csrf
				<div class="form-group  has-feedback">
					<div class="col-sm-12">
						<input type="text" class="form-control" required="" name="name"autocomplete="off" id="inputError" placeholder="Name">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
				</div>

				<div class="form-group  has-feedback">
					<div class="col-sm-12">
						<input type="text" class="form-control" required="" name="contact"autocomplete="off" id="inputError" placeholder="Enter Mobile Number">
						<span class="glyphicon glyphicon-earphone form-control-feedback"></span>
					</div>
				</div>

				<div class="form-group  has-feedback">
					<div class="col-sm-12">
						<input type="email" class="form-control" required="" name="email"autocomplete="off" id="inputError" placeholder="Enter Email">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
				</div>

				<div class="form-group  has-feedback">
					<div class="col-sm-12">
						<input type="password" class="form-control" required="" name="password"autocomplete="off" id="inputError" placeholder="Password">
						<span class="glyphicon glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
				</div>

				<div class="form-group  has-feedback">
					<div class="col-sm-12" align="center" style="padding-left: 15%; padding-right: 15%;">
						<button class="btn" >Sign Up</button>
					</div>
				</div>
				<div align="center" style="margin-top: 20px;">
					<h6>Already have an account? <a href="{{route('login')}}" style="color: rgb(243 195 102);">Login</a></h6>
				</div>
			</form>
		</div>
	</div>

</div>
@endsection