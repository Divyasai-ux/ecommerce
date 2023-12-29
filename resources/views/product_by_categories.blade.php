@extends('layouts.default')
	@section('title','Products')
	@section('content')
		<main class="ps-main">
  <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>
            @foreach($products as $product)
              <div class="grid-item kids">
                <div class="grid-item__content-wrapper">
                  <div class="ps-shoe mb-30">
                    <div class="ps-shoe__thumbnail">
                      <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i>
                      </a><img src="{{url('images/products/'.$product->photo1)}}" height="280" alt="">
                      <a class="ps-shoe__overlay" href="{{route('product',$product->id)}}"></a>
                    </div>
                    <div class="ps-shoe__content">
                      <div class="ps-shoe__variants" >
                        <div class="ps-shoe__variant normal">
                          <img src="{{url('images/products/'.$product->photo1)}}" alt="">
                          <img src="{{url('images/products/'.$product->photo2)}}" alt="">
                          <img src="{{url('images/products/'.$product->photo3)}}" alt="">
                          <img src="{{url('images/products/'.$product->photo4)}}" alt="">
                        </div>
                      </div>
                      <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{route('product',$product->id)}}">{{$product->product_name}}</a>
                        <span class="ps-shoe__price">₹ {{$product->product_price}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
	@endsection