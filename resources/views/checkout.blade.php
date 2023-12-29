@extends('layouts.default')
@section('title','Welcome to')
@section('content')
<?php $total = 0 ?>
@foreach((array) session('cart') as $id => $details)
<?php $total += $details['price'] * $details['quantity'] ?>
@endforeach

<?php

?>


<!-- <main class="ps-main" > -->
<div class="container">
  <div class="row" style="margin-top: 50px;">
    <div class="col-xl-4 col-lg-4 col-md-4" >
      @if(sizeof($delivery_address))
      <div class="address-box" style="padding: 20px; border:1px solid red; border-radius: 10px; width: auto;">
        <span><b>{{$delivery_address[0]->name}}</b></span>
        <br>
        <span>{{$delivery_address[0]->address}}, {{$delivery_address[0]->landmark}}</span>
        <ul>
          <li class="" style="display: inline-block; text-decoration:">{{$delivery_address[0]->state}} *</li>
          <li class="" style="display: inline-block;">{{$delivery_address[0]->city}} *</li>
          <li class="" style="display: inline;">{{$delivery_address[0]->pincode}}</li>
        </ul>
        <span>{{$delivery_address[0]->contact}}</span>
        <br>
        <button class="btn btn-sm" style="margin-top: 10px;">{{$type}}</button>
      </div>
      @else
      <div class="address-box" style="padding: 20px;  border-radius: 10px; width: auto;">
        <a href="{{route('user.profile')}}"><button class="btn">Add Address</button></a>
      </div>
      @endif
    </div>
    <div class="col-lg-4 col-xl-4 col-md-4">
      <div class="pay-btn" align="center">
        <button style="padding-left: 40px; padding-right: 40px; " class="btn btn-primary btn-lg">Pay</button>
      </div>
    </div>
  </div>
</div>






  <div class="ps-checkout pt-80 pb-80" hidden="">
    <div class="ps-container">      
      <form class="ps-checkout__form" method="post" hidden="">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
           <div class="ps-checkout__billing">
            <h3>Personal Detail</h3>
            <div class="form-group form-group--inline">
              <label>Name<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>Contact No.<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>Payment Number<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>Email Address<span>*</span>
              </label>
              <input class="form-control" type="email">
            </div>
            <div class="form-group form-group--inline">
              <label>House/Building No.<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>Complete Address<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>State<span>*</span>
              </label>
              <select class="form-control">
                
                <option>State</option>
                
              </select>
            </div>
            <div class="form-group form-group--inline">
              <label>City<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <div class="form-group form-group--inline">
              <label>Pincode<span>*</span>
              </label>
              <input class="form-control" type="text">
            </div>
            <h3 class="mt-40"> Addition information</h3>
            <div class="form-group form-group--inline textarea">
              <label>Order Notes</label>
              <textarea class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
          <div class="ps-checkout__order">
            <header>
              <h3>Your Order</h3>
            </header>
            <div class="content">
              <table class="table ps-checkout__products">
                <thead>
                  <tr>
                    <th class="text-uppercase">Product</th>
                    <th class="text-uppercase">Total</th>
                  </tr>
                </thead>
                <tbody>
                  @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                  <tr>
                    <td>{{$details['name']}}</td>
                    <td>₹{{ $details['price'] * $details['quantity'] }}</td>
                  </tr>
                  @endforeach
                  @endif
                  
                  <tr >
                    <td style="padding-top: 20px; font-size: 1.5em;"><strong>Amount:</strong></td>
                    <td style="padding-top: 20px; font-size: 1.5em;">{{$total}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <footer>
              <h3>Payment Method</h3>
              <div class="form-group cheque">
                <div class="ps-radio">
                  <input class="form-control" type="radio" id="rdo01" name="payment" checked>
                  <label for="rdo01">Google Pay</label>
                  <p>Pay the amount via Google Pay in Number given Below</p>
                </div>
                <div class="ps-radio ps-radio--inline">
                  <input class="form-control" type="radio" name="payment2" checked id="rdo02">
                  <label for="rdo02" style="float: left;"></label>
                  <span style="float: right!important!;">9992020209</span>
                </div>
              </div>
              <div class="form-group paypal">
                <button class="ps-btn ps-btn--fullwidth" name="placeorder">Place Order<i class="ps-icon-next"></i></button>
              </div>
            </footer>
          </div>
                   <!--  <div class="ps-shipping">
                      <h3>FREE SHIPPING</h3>
                      <p>YOUR ORDER QUALIFIES FOR FREE SHIPPING.<br> <a href="#"> Singup </a> for free shipping on every order, every time.</p>
                    </div> -->
                  </div>
                </div>
              </form>
            </div>
          </div>
          @endsection
         