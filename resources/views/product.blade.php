@extends('layouts.default')
@section('title','Products')
@section('content')
<!-- <main class="ps-main"> -->
	@if(session()->has('success'))
		<div class="alert alert-success">{{session()->get('success')}}</div>
		@endif
	<div class="ps-product--detail pt-60">
		<div class="ps-container">
			<div class="row">
				<div class="col-lg-10 col-md-12 col-lg-offset-1">
					<div class="ps-product__thumbnail">
						<div class="ps-product__preview">
							<div class="ps-product__variants">
								<div class="item"><img src="{{url('images/products/'.$product->photo1)}}" alt=""></div>
								<div class="item"><img src="{{url('images/products/'.$product->photo2)}}" alt=""></div>
								<div class="item"><img src="{{url('images/products/'.$product->photo3)}}" alt=""></div>
								<div class="item"><img src="{{url('images/products/'.$product->photo4)}}" alt=""></div>
								<!-- <div class="item"><img src="images/products/cosmetic/ghee-soap.jpg" alt=""></div> -->
							</div><a class="popup-youtube ps-product__video" href="{{$product->video}}">
								<img src="admin/" alt=""><i class="fa fa-play"></i></a>
							</div>
							<div class="ps-product__image">
								<div class="item">
									<a href="{{url('images/products/'.$product->photo1)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$product->photo1)}}" class="img-responsive"></a>
								</div>
								<div class="item">
									<a href="{{url('images/products/'.$product->photo2)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$product->photo2)}}" class="img-responsive"></a>
								</div>
								<div class="item">
									<a href="{{url('images/products/'.$product->photo3)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$product->photo3)}}" class="img-responsive"></a>
								</div>
								<div class="item">
									<a href="{{url('images/products/'.$product->photo4)}}" data-lightbox="mygallery"><img src="{{url('images/products/'.$product->photo4)}}" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="ps-product__thumbnail--mobile">
							<div class="ps-product__main-img">
								<img src="{{url('images/products/'.$product->photo1)}}" alt="">
							</div>
							<div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
								<img src="{{url('images/products/'.$product->photo2)}}" alt="">
								<img src="{{url('images/products/'.$product->photo3)}}" alt="">
								<img src="{{url('images/products/'.$product->photo4)}}" alt="">
							</div>
						</div>
						<div class="ps-product__info">
							<h1>{{$product->product_name}}</h1>
							<h3 class="ps-product__price">₹{{$product->product_price}}</h3>
							<div class="ps-product__block ps-product__quickview">
								<h4>QUICK REVIEW</h4>
								<p>{{$product->product_inshort}}</p>
							</div>
							
							<div class="ps-product__block ps-product__size">
								<!-- <h4>CHOOSE NUMBER</h4> -->
								<form id="product_quantity" method="post">
									<div class="form-group">
										<!-- <input class="form-control" type="text" name="quantity" value="1">
										<button type="submit" value="submit" name="save" hidden=""></button> -->
									</div>
								</form>
							</div>
							<div class="ps-product__shopping">
								<a class="ps-btn mb-10" 
								href="{{route('addtocart',$product->id)}}">Add to cart<i class="ps-icon-next"></i></a>
								<!-- <a class="ps-btn mb-10" style="margin-left: 10px;" 
								href="{{route('addtocart',$product->id)}}">Buy Now<i class="ps-icon-next"></i></a> -->
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="ps-product__content mt-50">
							<ul class="tab-list" role="tablist">
								<li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Discription</a></li>

							</ul>
						</div>
						<div class="tab-content mb-60">
							<div class="tab-pane active" role="tabpanel" id="tab_01">
								<p>{{$product->product_description}}</p>
							</div>

							<div class="tab-pane" role="tabpanel" id="tab_03">
								<p>Add your tag <span> *</span></p>
								<form class="ps-product__tags" action="_action" method="post">
									<div class="form-group">
										<input class="form-control" type="text" placeholder="">
										<button class="ps-btn ps-btn--sm">Add Tags</button>
									</div>
								</form>
							</div>
							<div class="tab-pane" role="tabpanel" id="tab_04">
								<div class="form-group">
									<textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
								</div>
								<div class="form-group">
									<button class="ps-btn" type="button">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ps-section ps-section--top-sales ps-owl-root" >
      <div class="ps-container" style="background-color: #f5e0b8; padding-top: 30px;  padding-bottom: 30px;">
        <div class="ps-section__header mb-10">
           <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="titles cream" align="center">
                <h3 class="ps-section__title" style="color: rgb(229 137 54);"  data-mask=""><span><b>Other Products</b></span></h3>
              </div>
            </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
         <!-- Loop Start Here -->
         @foreach($allproducts as $product)
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
		@endsection