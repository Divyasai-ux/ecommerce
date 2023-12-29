@extends('layouts.default')
@section('title','Welcome to')
@section('content')

@if(count($products)==0)
<div class="ps-container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: black; text-align: center; margin-bottom: 20px;">
      <h1 >Oh Snap!!</h1>
      <h3 >No Product Found!!</h3>
    </div>
  </div>
</div>
@else
<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"> -->
  <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80" style="background-color: #fffbeb;">
    <div class="ps-container">
      <div class="ps-section__header mb-10">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
            <!-- <h4 class="" >- YOU MIGHT ALSO LIKE</h4> -->
            <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs">
            <div class="ps-owl-actions">
              <!-- <a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a> -->
              <a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
        <!-- Loop Start From here -->
        @foreach($products as $product)
          <div class="ps-shoes--carousel">
            <div class="ps-shoe">
              <div class="ps-shoe__thumbnail">
                <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                <img src="{{url('images/products/'.$product->photo1)}}" height="250" alt="">
                <a class="ps-shoe__overlay" href="{{route('product',$product->id)}}"></a>
              </div>
              <div class="ps-shoe__content">
                <div class="ps-shoe__variants">
                  <div class="ps-shoe__variant normal">
                    <img src="admin/" alt="">
                    <img src="admin/" alt="">
                    <img src="admin/" alt="">
                    <img src="admin/" alt="">
                  </div>
                </div>
                <div class="ps-shoe__detail">
                  <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="{{route('product',$product->id)}}">{{$product->product_name}}</a>
                  <span class="ps-shoe__price">₹{{$product->product_price}}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        @endif
        <!-- Loop Ends Here -->
      </div>
    </div>
  </div>
</div>

@endsection