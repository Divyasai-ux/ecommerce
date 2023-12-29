@extends('layouts.default')
@section('title','Products')
@section('content')
<style type="text/css">
  .no-product-found{
    text-align: center;
    font-size: 1.5em;
    color: black !important;
    margin: 50px 0 50px 0;
  }
  .no-product-found p{
    font-size: 1.5em;
    color: black !important;
  }
</style>
@if(count($products)==0)
  <div class="no-product-found">
    <p>No Product Found!!</p>
  </div>
@else
    <div class="ps-section ps-section--top-sales ps-owl-root" >
      <div class="ps-container" style="background-color: #f5e0b8; padding-top: 30px;  padding-bottom: 30px;">
        <div class="ps-section__header mb-10">
          <!-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="titles cream" align="center">
                <h3 class="ps-section__title" style="color: rgb(229 137 54);"  data-mask=""><span><b>{{$category[0]->category}}</b></span></h3>
              </div>
            </div>
        </div> -->
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
         <!-- Loop Start Here -->
         @foreach($products as $product)
         <div class="ps-shoes--carousel" style="border:8px solid white; background-color: white;">
          <div class="ps-shoe">
            <div class="ps-shoe__thumbnail">
              <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
              <img src="{{url('images/products/5efee7d574202.png')}}" alt="">
              <a class="ps-shoe__overlay" href="#"></a>
            </div>
            <div class="ps-shoe__content">
              <div class="ps-shoe__detail">
                <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="{{url('addtocart')}}">{{$product->product_name}}</a>
                <br>
                <span class="ps-shoe__price">Rs {{$product->product_price}}</span>
              </div>
              <div class="add-cart-btn">
                <a href="{{route('addtocart',$product->id)}}"><button class="btn btn-info ">Add To Cart</button></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Loop Ends Here -->
      </div>
    </div>
  </div>
  <div class="row" align="center" style="margin-top: 10px; background-color: white;">
    <div class="ps-owl-actions hidden-xs hidden-sm">
      <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
      <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
    </div>
  </div>
</div>
@endif
@endsection



