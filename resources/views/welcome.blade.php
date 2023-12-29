@extends('layouts.default')
@section('title','Welcome to')
@section('content')
<style type="text/css">

</style>
<!-- ********************** Slider Start *********************** -->
<!-- <main class="ps-main"> -->
<!-- <div class="ps-banner" style="z-index:9999;position: absolute !important;">
    <div class="rev_slider fullscreenbanner" id="home-banner" style="z-index: 9999; position: absolute;">
      <ul style="display: block !important;">
        <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
          <img class="rev-slidebg" src="{{url('images/assets/slider_1.png')}}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
          <div class="tp-caption ps-banner__header" id="layer-1" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p>March 2002 <br> Nike SB Dunk Low Pro</p>
          </div>
          <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p class="text-uppercase">SUBA</p>
          </div>
          <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
            <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically, his hometown of <br/> New York City in  a big way.</p>
         </div><a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
       </li>
       <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
        <img class="rev-slidebg" src="{{url('images/assets/slider_1.png')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"  data-bgparallax="5" data-no-retina>
        <div class="tp-caption ps-banner__header" id="layer20" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
          <p>BEST ITEM <br> THIS SUMMER</p>
        </div>
        <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
          <p class="text-uppercase">Recovery</p>
        </div>
        <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
          <p style="color: black;">Supa wanted something that was going to rep his East Coast <br> roots and, more specifically, his hometown of <br/> New York City in  a big way.</p>
        </div><a class="tp-caption ps-btn" id="layer364" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
      </li>
    </ul>
  </div>
</div> -->
<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"> -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item slider-img active">
        <img src="{{url('images/slider/slider1.png')}}" alt="...">
        <div class="carousel-caption">
          <!-- ... -->
          <!-- <button>Hello</button>
          Invest in your SKIN. It’s going to represent you for a very long time. -->
        </div>
      </div>
      <div class="item slider-img">
        <img src="{{url('images/slider/slider2.jpg')}}" alt="...">
        <div class="carousel-caption">
          <!-- ... -->
          <!-- <button>Hello</button> -->
        </div>
      </div>
      <div class="item slider-img">
        <img src="{{url('images/slider/slider3.jpg')}}" alt="...">
        <div class="carousel-caption">
          <!-- ... -->
        </div>
      </div>
      <div class="item slider-img">
        <img src="{{url('images/slider/slider4.jpg')}}" alt="...">
        <div class="carousel-caption">
          <!-- ... -->
        </div>
      </div>
      <!-- ... -->
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- ********************* Slider Ends ************************ -->

  <div class="ps-section ps-section--top-sales ps-owl-root" >
    <div class="ps-container" style="background-color: #f5e0b8;  padding-bottom: 30px;">
      <div class="ps-section__header mb-10">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- <h4 class="" >- YOU MIGHT ALSO LIKE</h4> -->
            <div class="titles cream" align="center">
              <h3 class="ps-section__title" style="color: rgb(229 137 54);"  data-mask=""><span><b>Body Care</b></span></h3>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
            <div class="ps-owl-actions hidden-xs hidden-sm">
              <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
              <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
            </div>
          </div> -->
        </div>
      </div>
      <div class="ps-section__content" align="center">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
         <!-- Loop Start Here -->
         @foreach($bodyproducts as $body)
         <div class="ps-shoes--carousel" style="border:8px solid white; background-color: white;">
          <div class="ps-shoe">
            <div class="ps-shoe__thumbnail">
              <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
              <img src="{{url('images/products/'.$body->photo1)}}" height="220"  alt="">
              <a class="ps-shoe__overlay" href="{{route('product',$body->id)}}"></a>
            </div>
            <div class="ps-shoe__content">
            <div class="ps-shoe__detail" align="left">
              <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="">{{$body->product_name}}</a>
              <br>
              <span class="ps-shoe__price">Rs {{$body->product_price}}</span>
            </div>
            <div class="add-cart-btn" >
             <a href="{{route('addtocart',$body->id)}}">
              <button class="btn btn-info ">Add To Cart</button>
            </a>
            </div>
          </div>
          </div>
        </div>
        <!-- </div> -->
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

<div class="container-fluid">
  <div class="row" style="padding: 30px 0 30px 0;">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="organic-banner" align="center">
        <img src="{{url('images/assets/img_4.png')}}" class="img-responsive">
        <div class="organic-beauty">
          Bring The Best Organic beauty Product at Home
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ps-section ps-section--top-sales ps-owl-root pt-10 pb-50" >
  <div class="ps-container" style="background-color: #fdd3dc; padding-bottom: 30px;">
    <div class="ps-section__header mb-10">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- <h4 class="" >- YOU MIGHT ALSO LIKE</h4> -->
          <div class="titles pink" align="center">
            <h3 class="ps-section__title" data-mask="" style="color: rgb(229  59  103 );"><span><b>Skin Care</b></span></h3>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
          <div class="ps-owl-actions hidden-xs hidden-sm">
            <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
            <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
          </div>
        </div> -->
      </div>
    </div>
    <div class="ps-section__content" align="center">
      <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
       <!-- Loop Start Here -->
       @foreach($skinproducts as $skin)
         <div class="ps-shoes--carousel" style="border:8px solid white; background-color: white;">
          <div class="ps-shoe">
            <div class="ps-shoe__thumbnail">
              <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
              <img src="{{url('images/products/'.$skin->photo1)}}" height="220"  alt="">
              <a class="ps-shoe__overlay" href="{{route('product',$skin->id)}}"></a>
            </div>
            <div class="ps-shoe__content">
            <div class="ps-shoe__detail" align="left">
              <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="">{{$skin->product_name}}</a>
              <br>
              <span class="ps-shoe__price">Rs {{$skin->product_price}}</span>
            </div>
            <div class="add-cart-btn" >
             <a href="{{route('addtocart',$skin->id)}}">
              <button class="btn btn-info ">Add To Cart</button>
            </a>
            </div>
          </div>
          </div>
        </div>
        <!-- </div> -->
        @endforeach
      <!-- </div> -->
      <!-- Loop Ends Here -->
    </div>
  </div>
  
</div>
<div class="row" >
    <div class="ps-owl-actions hidden-xs hidden-sm">
      <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
      <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
    </div>
  </div>
</div>
<div class="container-fluid" >
  <div class="row" style="padding: 0px;">
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
      <div class="organic-banner" align="center">
        <img src="{{url('images/assets/img.jpg')}}" class="img-responsive">
        <div class="award-top-text">
          <p>Best Award for Organic Products</p>
          <button>View Certificate</button>
        </div>
        <style type="text/css">
          .award-top-text{
            padding: 15px;
          }
        </style>
      </div>
    </div>
  </div>
</div>
<div class="ps-section ps-section--top-sales ps-owl-root pt-10 pb-50" >
  <div class="ps-container" style="background-color: #8ffff4; padding-bottom: 30px;">
    <div class="ps-section__header mb-10">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- <h4 class="" >- YOU MIGHT ALSO LIKE</h4> -->
          <div class="titles blue" align="center">
            <h3 class="ps-section__title" data-mask="" style="color: rgb(42 186 230); "><span><b>Face Care</b></span></h3>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
          <div class="ps-owl-actions hidden-xs hidden-sm">
            <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
            <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
          </div>
        </div> -->
      </div>
    </div>
    <div class="ps-section__content" align="center">
      <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
       <!-- Loop Start Here -->
       @foreach($faceproducts as $face)
         <div class="ps-shoes--carousel" style="border:8px solid white; background-color: white;">
          <div class="ps-shoe">
            <div class="ps-shoe__thumbnail">
              <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
              <img src="{{url('images/products/'.$face->photo1)}}" height="220"  alt="">
              <a class="ps-shoe__overlay" href="{{route('product',$face->id)}}"></a>
            </div>
            <div class="ps-shoe__content">
            <div class="ps-shoe__detail" align="left">
              <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="">{{$face->product_name}}</a>
              <br>
              <span class="ps-shoe__price">Rs {{$face->product_price}}</span>
            </div>
            <div class="add-cart-btn" >
             <a href="{{route('addtocart',$face->id)}}">
              <button class="btn btn-info ">Add To Cart</button>
            </a>
            </div>
          </div>
          </div>
        </div>
        <!-- </div> -->
        @endforeach
      
      <!-- </div> -->
      <!-- Loop Ends Here -->
    </div>
  </div>
  
</div>
<div class="row" style="margin-top: 10px; background-color: white;">
    <div class="ps-owl-actions hidden-xs hidden-sm">
      <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
      <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
    </div>
  </div>
</div>

<div class="ps-subscribe" style="margin: 30px 0 30px 0; background-image: url('images/assets/g.png'); background-size: cover;">
  <div class="ps-container">
    <div class="row">
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
        <h3 style="color: #f48003; margin: 0px;"><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
      </div>
      <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
        <form class="ps-subscribe__form" action="{{route('newsletter.subscribe')}}" method="post">
          @csrf
          <input class="form-control" name="email" type="text" placeholder="">
          <button type="submit">Sign up now</button>
        </form>
      </div>
      <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
        <p>...and receive Latest Beauty Tips.</p>
      </div>
    </div>
  </div>
</div>

<div class="ps-section ps-section--top-sales ps-owl-root pt-10 pb-50" >
  <div class="ps-container" style="background-color: #ead3ff; padding-bottom: 30px;">
    <div class="ps-section__header mb-10">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- <h4 class="" >- YOU MIGHT ALSO LIKE</h4> -->
          <div class="titles purple" align="center">
            <h3 class="ps-section__title" data-mask="" style="color: rgb(101  33  190);"><span><b>Hair Care</b></span></h3>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
          <div class="ps-owl-actions hidden-xs hidden-sm">
            <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
            <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
          </div>
        </div> -->
      </div>
    </div>
    <div class="ps-section__content" align="center">
      <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
       <!-- Loop Start Here -->
       @foreach($hairproducts as $hair)
         <div class="ps-shoes--carousel" style="border:8px solid white; background-color: white;">
          <div class="ps-shoe">
            <div class="ps-shoe__thumbnail">
              <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
              <img src="{{url('images/products/'.$hair->photo1)}}" height="220"  alt="">
              <a class="ps-shoe__overlay" href="{{route('product',$hair->id)}}"></a>
            </div>
            <div class="ps-shoe__content">
            <div class="ps-shoe__detail" align="left">
              <a class="ps-shoe__name" style="padding: 25px 0px 0px 15px;" href="">{{$hair->product_name}}</a>
              <br>
              <span class="ps-shoe__price">Rs {{$hair->product_price}}</span>
            </div>
            <div class="add-cart-btn" >
             <a href="{{route('addtocart',$hair->id)}}">
              <button class="btn btn-info ">Add To Cart</button>
            </a>
            </div>
          </div>
          </div>
        </div>
        </div>
        @endforeach
      <!-- </div> -->
      <!-- Loop Ends Here -->
    </div>
  <!-- </div> -->
  
</div>
<div class="row" style="margin-top: 10px; background-color: white;">
    <div class="ps-owl-actions hidden-xs hidden-sm">
      <a class="ps-prev" href="#"><img src="{{url('images/assets/left.png')}}"></a>
      <a class="ps-next" href="#"><img src="{{url('images/assets/right.png')}}"></a>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row" style="padding: 0;">
    <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px;">
      <div class="organic-banner" align="center">
        <img src="{{url('images/assets/bg_combined.png')}}" class="img-responsive">
        <!-- <img src="{{url('images/assets/')}}" class="img-responsive"> -->
        <div class="centered" align="center">
          Your Skin is your best accessary. 
          <!-- <br> -->
          Take good care of it with "Leaf n Dew."
        </div>
      </div>
    </div>
  </div>
</div>






<div class="ps-home-testimonial bg--parallax pb-50" data-background="{{url('images/assets/g.png')}}" hidden="">
  <div class="container">
    <!-- <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut"> -->
      <div class="ps-testimonial pt-30">
        <div class="ps-testimonial__thumbnail">
          <!-- <img src="images/testimonial/1.jpg" alt=""> -->
          <i class="fa fa-quote-left"></i></div>
          <header>
            <p style="font-family: italic;">Leaf N Dew</p>
          </header>
          <footer>
            <p>“Your skin is your best accessory. Take good care of it with ‘leaf n dew’. “</p>
          </footer>
        </div>

      </div>
      <!-- </div> -->
    </div>
    @endsection