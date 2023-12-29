<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="apple-touch-icon.png" rel="apple-touch-icon">
  <link href="favicon.png" rel="icon">
  <meta name="author" content="Nghia Minh Luong">
  <meta name="keywords" content="Default Description">
  <meta name="description" content="Default keyword">
  <title>@yield('title')- Organic Ora</title>
  <!-- Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="{{url('plugins/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/ps-icon/style.css')}}">
  <!-- CSS Library-->
  <link rel="stylesheet" href="{{url('plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/owl-carousel/assets/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{url('plugins/jquery-bar-rting/dist/themes/fontawesome-stars.css')}}">
  <link rel="stylesheet" href="{{url('plugins/slick/slick/slick.css')}}">
  <link rel="stylesheet" href="{{url('plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/Magnific-Popup/dist/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/revolution/css/settings.css')}}">
  <link rel="stylesheet" href="{{url('plugins/revolution/css/layers.css')}}">
  <link rel="stylesheet" href="{{url('plugins/revolution/css/navigation.css')}}">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
  <!-- Custom-->
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  
  <style type="text/css">
    .cat-product{
      display: none;
      -webkit-transition: height 0.3s ease-in-out;
      -o-transition: height 0.3s ease-in-out;
      -moz-transition: height 0.3s ease-in-out;
      transition: height 0.3s ease-in-out;
      transition-duration: 10s;
    }
    .cat:hover .cat-product{
      padding-left: 20px;
      color: green;
      display: block;
      transition-duration: 10s;
    }
    .sub-category{
      border-bottom:1px solid #dedede;
      transition-duration: 10s;
    }
  </style>
</head>




<body class="ps-loading">
  <div class="header--sidebar"></div>
  <header class="header">
    <div class="header__top" style="color: black;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="  padding: 10px 0 10px 20px;">
            <img src="{{url('images/new.png')}}" >
            <!-- <span>Organic Ora</span> -->
            <!-- <span style="font-size: 3em;">Organic Ora</span> -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-contact hidden-xs hidden-sm">
            <!-- <div class="header__actions"><a href="login.php">Login & Regiser</a> -->

              <form class="header-search" action="{{route('search')}}" method="post" style="margin-top: 25px;">
                @csrf
                <input class="form-control" name="search" type="text" placeholder="Search Product…">
                <button type="submit"><i class="ps-icon-search"></i></button>
              </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-contact hidden-xs hidden-sm">
              <!-- <div class="header__actions"><a href="login.php">Login & Regiser</a> -->
               <div class="top-contacts" style="padding-left: 20%; width: 70%; margin-top: 25px; float: left;">

                <span><i class="fa fa-map-marker" aria-hidden="true"></i> 9992020209</span>
                <br>
                <span><i class="fa fa-envelope" aria-hidden="true"></i> test@test.com</span>
              </div>
              <div class="top-cart" style="width: 20%; margin-top: 10px; float: right;">
               <div class="ps-cart">
                <a class="ps-cart__toggle" href="#">
                  @if(empty($user_id))
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  @else
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span><i>{{$product_count}}</i></span>
                  @endif
                </a>
                <div class="ps-cart__listing">
                  <div class="ps-cart__content">
                    @if(empty($user_id))
                      <div class="ps-cart-item">
                      <div class="ps-cart-item__content">
                          <span style="color: white;">You are not Logged In!</span>
                        </div>
                      </div>
                    @else
                    @foreach($cartproducts as $cart)
                    <div class="ps-cart-item">
                      <!-- Remove item button  -->
                      <a href="{{route('remove-from-cart',$cart->cart_id)}}"><button class="ps-cart-item__close remove-from-cart" data-id="{{$cart->cart_id}}"></button></a>
                      <div class="ps-cart-item__thumbnail">
                        <!-- <a href="{{route('product',$cart->product_id)}}"></a> -->
                        <img src="{{URL::asset('images/products/'.$cart->photo1)}}" alt="">
                      </div>
                      <div class="ps-cart-item__content">
                        <a class="ps-cart-item__title" href="{{route('product',$cart->product_id)}}">{{$cart->product_name}}</a>
                        <p style="display: inline;">
                          <span style="color: white;">Price:<i>{{ $cart->product_price}}</i></span>
                          <span style="color: white;">Quantity:<i>{{$cart->quantity}}</i></span>
                        </p>

                          <p><span style="color: white;">Amount:<i>{{$cart->total}}</i></span></p>

                        </div>
                      </div>
                      @endforeach
                      @endif
                       <?php $final_amount = 0 ?>
                       
                      <!--@foreach((array) session('cart') as $id => $details)
                      <?php $total += $details['price'] * $details['quantity'] ?>
                      @endforeach
                      @if(count((array) session('cart'))==0) -->
                      <div class="ps-cart__total">
                        <!-- <p>Your Cart is Empty!!</p> -->
                        <!-- <p>{{$user_id}}</p> -->
                        <!-- <p>Grand Total:<span>₹{{ $final_amount}}</span></p> -->
                      </div>
                      <!-- @else -->
                      <!-- <div class="ps-cart__total">
                        <p>Number of items:<span>{{ count((array) session('cart')) }}</span></p>
                        <p>Item Total:<span>₹ {{ $total }}</span></p>
                      </div> -->
                      <!-- @endif -->

                    </div>
                    <div class="ps-cart__footer">
                      <a class="ps-btn" data-toggle="modal" href="{{route('show_cart')}}">Cart<i class="ps-icon-arrow-left"></i></a>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>
              <!-- <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 right-logo hidden-xs hidden-sm">
                
              </span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navigation" style="background-color: rgb(247  247 247 );">
      <div class="container-fluid">
        <div class="navigation__column left">
          <div class="header__logo">
            <a class="ps-logo" href="{{route('index')}}">
              <!-- <span style="color: green; font-size: 2.3em;">Organic Ora</span> -->
            </a>
          </div>
        </div>
        <div class="navigation__column center">
          <ul class="main-menu menu">
            <li class="menu-item"><a href="{{route('index')}}">Home</a></li>
            <li class="menu-item"><a href="{{route('aboutus')}}">About Us</a></li>    
            <li class="menu-item"><a href="{{route('faqs')}}">Faq</a></li>
            <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Products</a>
              <div class="mega-menu">
                <div class="mega-wrap">
                  <div class="mega-column">
                    <ul class="mega-item mega-features">
                      <li><a href="#">NEW RELEASES</a></li>
                      <li><a href="#">FEATURES PRODUCT</a></li>
                      <!-- <li><a href="#">BEST SELLERS</a></li> -->
                      <li><a href="#">NOW TRENDING</a></li>
                    </ul>
                  </div>
                  <div class="mega-column">
                    <h4 class="mega-heading">Categories</h4>
                    <ul class="mega-item">
                     @foreach($catslist as $category)
                     <li class="cat"><a href="#">{{$category->category}}</a>
                      <ul class="cat-product">
                        @foreach($category->sub_cat as $sub_catog)
                        <li class="sub-category"><a href="{{route('types.product',$sub_catog->id)}}">{{$sub_catog->sub_category}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <div class="mega-column">
                  <h4 class="mega-heading">Products</h4>
                  <ul class="mega-item">
                   @foreach($sub_categories as $sub_category)
                   <li><a href="{{route('types.product',$sub_category->id)}}">{{$sub_category->sub_category}}</a>

                   </li>
                   @endforeach
                 </ul>
               </div>
               <div class="mega-column" hidden>
                <h4 class="mega-heading">Accessories</h4>
                <ul class="mega-item">
                  <li><a href="product-listing.php">Compression & Nike Pro</a></li>
                  <li><a href="product-listing.php">Tops & T-Shirts</a></li>
                  <li><a href="product-listing.php">Polos</a></li>
                  <li><a href="product-listing.php">Hoodies & Sweatshirts</a></li>
                  <li><a href="product-listing.php">Jackets & Vests</a></li>
                  <li><a href="product-listing.php">Pants & Tights</a></li>
                  <li><a href="product-listing.php">Shorts</a></li>
                </ul>
              </div>
              <div class="mega-column" hidden>
                <h4 class="mega-heading">BRAND</h4>
                <ul class="mega-item">
                  <li><a href="product-listing.php">NIKE</a></li>
                  <li><a href="product-listing.php">Adidas</a></li>
                  <li><a href="product-listing.php">Dior</a></li>
                  <li><a href="product-listing.php">B&G</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="menu-item"><a href="{{route('contactus')}}">Contact Us</a></li>
        @if(Auth::user())
        <li class="menu-item"><a href="{{route('user.profile')}}">{{Auth::user()->name}}</a></li>
        @else
        <li class="menu-item"><a href="{{route('login')}}">Login/ SignUp</a></li>
        @endif
        <!-- <li class="menu-item"><a href="{{route('login')}}">Login/Signup</a></li> -->
      </ul>
    </div>
    <div class="navigation__column right">
      <!-- <form class="ps-search--header" action="{{route('search')}}" method="post">
        @csrf
        <input class="form-control" name="search" type="text" placeholder="Search Product…">
        <button type="submit"><i class="ps-icon-search"></i></button>
      </form> -->

      <span class="head-bar-content" style="font-size: 25px;">
        <a href="https://www.facebook.com/leafndew.organicora" target="_blank"><i class="fa fa-facebook" style="color: rgb(74  148 236 ); margin-right: 10px; " aria-hidden="true"></i></a>
        <a href="https://instagram.com/organic.ora" target="_blank"><i class="fa fa-instagram header-insta" aria-hidden="true"></i></a>
        <a href="https://twitter.com/leafndew" style="color: #55ACEE; margin-right: 10px;" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </span>
       <div class="menu-toggle"><span></span></div>
    </div>
  </nav>
</header>