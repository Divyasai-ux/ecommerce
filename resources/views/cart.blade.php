@extends('layouts.default')
@section('title','Cart')

@section('content')

<style type="text/css">
  .last-content{
    display: inline;
  }
  .proqtybox{
    display: inline; 
    border:1px solid grey; 
    font-size: 1.2em; 
    padding: 1px 15px 2px 15px;
  }
</style>


<div class="header-services">
  <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Above Order 2000</p>
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Above 1200 for Punjab, Haryana & Delhi</p>
    <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get Quality Product At your Home.</p>
  </div>
</div>
<main class="ps-main">
  <div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <!-- **************************  Success Faliure ALERT Message *************************** -->
      <!-- <x-alert /> -->
      @if(session()->has('success'))
      <div class="alert alert-success">{{session()->get('success')}}</div>
      @endif
      @if(session()->has('error'))
      <div class="alert alert-danger">{{session()->get('error')}}</div>
      @endif
      <!-- **********************************v Success Faliure Message ENDS *********************** -->
      <div class="ps-cart-listing" hidden="">
        <?php $total = 0;
        ?>
        @if(session('cart'))
        <table class="table ps-cart__table">
          <thead>
            <tr>
              <th>Photo</th>
              <th>Products</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Update</th>
              <th>Total</th>
              
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>

            @foreach(session('cart') as $id => $details)

            <?php $total += $details['price'] * $details['quantity'];
            ?>
            <tr class="parent_class" style="color: black;">
              <td><img src="{{URL::asset('images/products/'.$details['photo'])}}" width="100" height="100" class="img-responsive"/></td>
              <td  class="product_title"  value="">{{$details['name']}}</td>
              <td  class="product_price"   value="">{{$details['price']}}</td>
              <td data-th="Quantity">
                <input type="number" min="1" value="{{ $details['quantity'] }}" class="form-control quantity" />
              </td>
              <td class="actions" data-th="">
                <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
              </td>
              <td class="amount">{{ $details['price'] * $details['quantity'] }}</td>
              
              <td class="actions" data-th="">

                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
          @else
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
              <h2>Your Cart is Empty!!</h2>
            </div>
          </div>
          @endif
        </table>
        <div class="ps-cart__actions">
          <div class="ps-cart__promotion">
           <!--  <div class="form-group">
              <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                <input class="form-control" type="text" placeholder="Promo Code">
              </div>
            </div> -->
            <!-- <div class="form-group">
              <button class="ps-btn ps-btn--gray">Continue Shopping</button>
            </div> -->
            @if($total<2000)
            <?php $pending = 2000 - $total; ?>
            <span style="color: red; float: right;">Spend Rs. {{$pending}} more and get FREE shipping!</span>
            @endif

          </div>
          
          @if(session('cart'))
          <div class="ps-cart__total">
            <h3 >Total Price:₹{{ $total }} <sub style="font-size: 10px;">*Included GST</sub><span class="total-price"> </span></h3>
            <a class="ps-btn" href="{{route('checkout')}}">Process to checkout<i class="ps-icon-next"></i></a>
          </div>
          @else
          <div class="ps-cart__total">
            <!-- <h3 >Total Price:${{ $total }} <span class="total-price"> </span></h3> -->
            <a class="ps-btn" style="background-color: #ffb914;" href="{{route('index')}}">Continue Shoping<i class="ps-icon-next"></i></a>
          </div>
          @endif
        </div>
      </div>





      <div class="container">
        <div class="row" hidden="">
          <span>Cart</span>
          <div class="titles" style="border:1px solid red;">
            <h3>
              <span>Address</span>
            </h3>
          </div>
          <span>Payment</span>
        </div>
        <div class="row" style="margin-top: 20px; border-bottom: 1px solid #efefef">

          @foreach($productsincart as $product)
          <?php $total += $product->total ?>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border-bottom: 1px solid #efefef; margin-top: 20px;">
            <div class="product-photo" style="float: left; width: 35%; padding: 0 20px 20px 20px;">
              <img src="{{url('images/products/5efee7d57cfe7.png')}}"  class="img-responsive">
            </div>
            <div class="product-content" style="float: left; width: 50%;">
              <span class="product-name"><b>{{$product->product_name}}</b></span>
              <br>
              <br>
              <div>
                <span style="float: left;">Price: <b id="product_price{{$product->id}}">{{$product->product_price}}</b></span>
                <!-- <span style="float: right;">Expected Delivery By</span> -->
              </div>
              <br>
              <br>
              <div>
                <span  style="float: left;">Qty: <b id="qtytext{{$product->id}}">{{$product->quantity}}</b></span>
                <!-- <span style="float: right;">Expected Delivery By</span> -->
              </div>
              <br>
              <div class="">
                <!-- <span style="float: left;">Delivery Charges: Rs 70</span> -->
                <!-- <span style="float: right;">24 April, 2020</span> -->
              </div>
              <br>
              <div class="increment-decrement">
                  <!-- <div class="product-decrement">
                    <span id="decrement-product{{$product->id}}" style="border:1px solid black; padding: 0 5px 0 5px; cursor: pointer;">-</span>
                  </div>
                  <div class="product-quantity">
                    <span style="border:1px solid black; padding: 0 12px 0 12px;">{{$product->quantity}}</span>
                  </div>
                  <div class="increment-product">
                    <span id="increment-product{{$product->id}}" style="border:1px solid black; padding: 0 5px 0 5px;">+</span>
                  </div> -->
                  <ul class="main-quantity-class">
                    <input type="hidden" name="proid" id="qty" value="{{ $product->quantity }}">

                    <li class="" style="display: inline;"><button class="decrement" id="decproduct{{$product->id}}" value="{{$product->id}}" >-</button></li>

                    <li class="proqtybox" id="proqty{{$product->id}}">{{$product->quantity}}</li>

                    <li class="" style="display: inline;"><button class="increment" id="incproduct{{$product->id}}" value="{{$product->id}}">+</button></li>
                  </ul>
                </div>
                <br>
                <div>
                  <p style="color: black;">Total Price: Rs <b id="product_total{{$product->id}}">{{$product->total}}</b></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </div>
    <div class="container-fluid" style="border-top:1px solid #efefef; padding-top: 20px;">
      <div class="row" style="padding: 0 50px 0 50px;">
        <div class="col-xl-4 col-lg-4 col-md-4">
          <button class="btn btn-secondary" style="padding: 10px 30px 10px 30px;">Back</button>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4" style="text-align: center;">
          <span style="text-align: center;"><b>TOTAL ₹ </b><label id="final_amount">{{$total}}</label></span>
          <p style="font-size: 8px;">Inc Delivery Charges</p>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <a href="{{route('checkout')}}">
            <button class="btn " style="background-color: orange; float: right; color: white; padding: 10px 30px 10px 30px;">Continue</button>
          </a>
        </div>
      </div>
    </div>
    @endsection



