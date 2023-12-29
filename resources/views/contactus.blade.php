@extends('layouts.default')
@section('title','Contact Us')
@section('content')
<style type="text/css">
  .main-body{
    width: 100%;
    height: auto;
    background: url('images/assets/contact_bg.png') no-repeat;
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
      margin-top: 20px;
      border-radius: 50px;
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
        <form class="form-horizontal" action="{{route('post.contactus')}}" method="post">
          @csrf
          <div class="form-group  has-feedback">
            <div class="col-sm-12">
              <input type="text" class="form-control" required="" name="name" value="{{ old('name') }}" autocomplete="false" id="inputSuccess" placeholder="Your Name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group  has-feedback">
            <div class="col-sm-12">
              <input type="email" class="form-control" required="" name="email" value="{{ old('email') }}" autocomplete="off" id="inputWarning" placeholder="Your Email">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group  has-feedback">
            <div class="col-sm-12">
              <input type="text" class="form-control" required="" name="contact" value="{{ old('contact') }}" autocomplete="off" id="inputError" placeholder="Contact">
              <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group  has-feedback">
            <div class="col-sm-12">
              <textarea rows="7" class="form-control" required="" name="message" placeholder="Enter Your Message">{{ old('message') }}</textarea>
            </div>
          </div>
          <div class="form-group  has-feedback">
            <div class="col-sm-12" align="center">
              <button class="btn btm-rounded" >Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row" style="margin-top: 50px;" align="center">
      <div class="col-md-4 col-md-offset-1 col-sm-12" style="padding: 0px; background-color: rgb(70 68  76  );">
        <div class="address-box">
          <div class="tilted-address">
            <span>ADDRESS</span>
          </div>
          <div class="address-details">
            <h5>GURUGRAM (Haryana)</h5>
            <hr>
            <h6><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Address</h6>
            <h6><span><i class="fa fa-envelope" aria-hidden="true"></i></span>Test@test.com</h6>
            <h6><span><i class="fa fa-phone" aria-hidden="true"></i></span>9992020209</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-1 col-sm-12" style="padding: 0px; background-color: rgb(70 68  76  );">
        <div class="address-box">
          <div class="tilted-address">
            <span>ADDRESS</span>
          </div>
          <div class="address-details">
            <h5>GURUGRAM (Haryana)</h5>
            <hr>
            <h6><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Address</h6>
            <h6><span><i class="fa fa-envelope" aria-hidden="true"></i></span>test@test.com</h6>
            <h6><span><i class="fa fa-phone" aria-hidden="true"></i></span>9992020209</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection