<style type="text/css">
  .footer-bg-cover{
    background-image: url("{{url('images/bg_footer.png')}}"); 
    margin-top: 30px; 
    width: 100%; 
    background-size: cover;
  }
  .footer-content{
    margin-top: 50px; 
    margin-bottom: 40px;
  }
  .footer-content-product{
    /*text-align: center; */
    border-right: 1px solid grey;
  }

  .footer-content-product ul li{
    text-decoration: none;
  }
   .footer-content-product p{
    color: black;
  }

  .footer-common-css span{
    font-size: 1.3em; 
    color: rgb(221 130 30); 
    font-weight: 500;

  }
  .socials-logos-footer{
    padding-top: 15px;
  }
  .socials-logos-footer li{
    display: inline;
    padding: 10px;
    font-size: 0.8em;
  }
</style>
<div class="container-fluid footer-bg-cover">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center" style="margin-top: 30px;">
      <img src="{{url('images/ic_logo_footer.png')}}" class="img-responsive" height="100" width="200">
    </div>
  </div>
  <div class="row footer-content">
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-6 footer-content-product footer-common-css" style="text-align: center;">
      <span style="">PRODUCTS</span>
      <ul>
       @foreach($categories as $category)
       <li><a href="{{route('categories.product',$category->id)}}">{{$category->category}}</a></li>
       @endforeach
     </ul>
   </div>
   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-6 footer-content-product  footer-common-css">
    <span>CONTACT US</span>
    <p >Head Office:  </p>
    <p >Branch Office: </p>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 footer-content-product footer-common-css">
    <span >OUR MISSION</span>
    <p >Our Mission is provide best cosmetic product to our customer so that their skin can glow as never before.</p>
    <span>SOCIAL MEDIA</span>
    <ul class="socials-logos-footer">
      <li>
        <a href="https://www.facebook.com/leafndew.organicora" target="_blank"><img src="{{url('images/assets/ic_fb.png')}}"></a>
      </li>
      <li >
        <a href="https://instagram.com/organic.ora" target="_blank"><img src="{{url('images/assets/instagram.png')}}"></a>
      </li>
      <li >
        <a href="https://twitter.com/leafndew" target="_blank"><img src="{{url('images/assets/twitter.png')}}"></a>
      </li>
    </ul>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6 footer-content-product footer-common-css">
    <span>HELP</span>
    <ul>
      <li>Email: test@test.com.com</li>
      <li>Contact: 9992020209</li>
    </ul>
  </div>
</div>
<div class="row" style="text-align: center; padding-bottom: 20px;">
  <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12 col-xs-12">
    <h5>&copy; <a href="/">Organic Ora</a>,All rights Resevered.</h5>
  </div>
  <div class="col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
    <h5> Design by <a href="https://opopol.com">OPOPOL Analytics Pvt Ltd</a></h5>
  </div>
</div>
</div>





<!-- <div class="ps-footer bg--cover" >
  <div class="ps-footer__content">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--info second">
            <header>
              <h3 class="ps-widget__title">Our Mission</h3>
            </header>
            <footer>
              <p >Our Mission is provide best cosmetic product to our customer so that their skin can glow as never before.</p>
            </footer>
          </aside>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--info second">
            <header>
              <h3 class="ps-widget__title">Contact Us</h3>
            </header>
            <footer>
              <div >
                <p >Head Office: Organic Ora Pvt. Ltd, Near Delhi Gate, Farukh Nagar - 122506, Gurugram </p>
                <p>Branch Office: #02, 1st Floor Choudhary Nursing Home Lane, Shivaji Colony, Sirsa- 125055</p>
              </div>
              <h4 style="color: white; padding: 5px;">Customer Care Contact</h4>
              <p>Contact: 8570065273</p>
              <p>Email: <a href='mailto:support@store.com'>care@organicora.com</a></p>
              <ul class="contacts-direct">
                <li>
                  <a href="tel: 8570065273"><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://api.whatsapp.com/send?phone=918570065273"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
                </li>

              </ul>
            </footer>
          </aside>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
          <aside class="ps-widget--footer ps-widget--info second">
            <header>
              <h3 class="ps-widget__title">Follow Us</h3>
            </header>
            <footer>
              <ul class="ps-list--line">
                <li>
                  <a href="https://www.facebook.com/leafndew.organicora" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://instagram.com/organic.ora" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/leafndew" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                </li>
              </ul>
            </footer>
          </aside>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
          <aside class="ps-widget--footer ps-widget--info second">
            <header>
              <h3 class="ps-widget__title">Products</h3>
            </header>
            <footer>
              <ul class="ps-list--line">
                @foreach($categories as $category)
                <li><a href="{{route('categories.product',$category->id)}}">{{$category->category}}</a></li>
                @endforeach
              </ul>
            </footer>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-footer__copyright">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
          <p>&copy; <a href="/">Organic Ora</a>,All rights Resevered. Design by <a href="https://opopol.com">OPOPOL Analytics Pvt Ltd</a></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
          <ul class="ps-social">
            <li><a href="https://www.facebook.com/leafndew.organicora"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://instagram.com/organic.ora"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

 -->


<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>







 


</main>
<!-- <div class="icon-bar visible-md-block, hidden-md">
  <a href="https://www.facebook.com/leafndew.organicora" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/leafndew" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.instagram.com/organic_ora" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=918570065273" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
</div> -->
<!-- JS Library-->

<script type="text/javascript" src="{{url('plugins/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/gmap3.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/imagesloaded.pkgd.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/slick/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/elevatezoom/jquery.elevatezoom.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script> -->
<script type="text/javascript" src="{{url('plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/main.js')}}"></script>
<script type="text/javascript" src="{{url('js/custom.js')}}"></script>
<script type="text/javascript" src="{{url('js/lightbox.js')}}"></script>
<!-- Custom scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>


<!-- *********************************** TAWK Chat BOT ************************************** -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e71f4798d24fc22658852fc/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();

  
 $(document).ready(function(){
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }

  });

  $(".decrement").click(function () {
      // e.preventDefault();
        var btn_id = this.id;
        // alert(btn_id);
        // alert(id);
         var value = parseInt($('#'+btn_id).val());
         // alert(value);
         // alert(value);
         var qty =$("#proqty"+value).text();
         var price= $('#product_price'+value).text();

         var total= $('#product_total'+value).text();
    if(qty>1){
      $("#proqty"+value).html(qty-1);
      $("#qtytext"+value).html(qty-1);
      $("#product_total"+value).html(total-price);
    }
        $.ajax({

            url:  '/cart/product/decrement',

            type: 'POST',

            data: {
                qty : qty,
                pro_id : value
            },
            success : function(data){
                  $("#final_amount").html(data);
                }
        });
    });




  $(".increment").click(function(){

          var btn_id = this.id;
          console.log(btn_id);
        // alert(btn_id);
         var value = $('#'+btn_id).val();
         // alert(value);
         var qty =parseInt($("#proqty"+value).text());
         // alert(qty);
         var price= parseInt($('#product_price'+value).text());
         // alert(price);
         var total= parseInt($('#product_total'+value).text());
         // alert(total);
    if(qty>1){
      $("#proqty"+value).html(qty+1);
      $("#qtytext"+value).html(qty+1);
      $("#product_total"+value).html(total+price);
    }
        $.ajax({

            url:  '/cart/product/increment',

            type: 'POST',

            data: {
                qty : qty,
                pro_id : value
            },
            success : function(data){
                  $("#final_amount").html(data);
                }
        });
  });
 });


 //  $(".update-cart").click(function (e) {
 //   e.preventDefault();
   
 //   var ele = $(this);
   
 //   $.ajax({
 //     url: "/update-cart",
 //     method: "patch",
 //     data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
 //     success: function (response) {
 //       window.location.reload();
 //     }
 //   });
 // });

  // $(".remove-from-cart").click(function (e) {
  //   e.preventDefault();
    
  //   var ele = $(this);
    
  //   if(confirm("Are you sure to Delete This Product")) {
  //     $.ajax({
  //       url: '/remove-from-cart',
  //       method: "DELETE",
  //       data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
  //       success: function (response) {
  //         window.location.reload();
  //       }
  //     });
  //   }
  // });



  $(document).ready(function(){
    $('#select-state').change(function(e){
      e.preventDefault();
      var state= $(this).children("option:selected").val();
      $.ajax({
        url: "{{URL::route('submitState')}}",
        type: "POST",
        data: {'id':state},
        success: function(data){
          $('#state-val').html(data);
        },
        error: function(error){
          console.log(error);
        }
      });
    });


    $('#decrement-product').click(function(e){
      alert('decrement');

    });



    $('#increment-product').click(function(e){
      alert('increment');

    });

  });

  
  
  
</script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>
  <script type="text/javascript">

  $(document).ready(function(){
    $(".pro-box1").show();
      $(".profile").addClass('prosection-active');
      $(".pro-box2").hide();
      $(".pro-box3").hide();
      $(".pro-box4").hide();

    $(".profile").click(function(){
      $(".pro-box1").show();
      $(".pro-icons").removeClass('prosection-active');
      $(".profile").addClass('prosection-active');
      $(".pro-box2").hide();
      $(".pro-box3").hide();
      $(".pro-box4").hide();
    });
    $(".orders").click(function(){
      $(".pro-box1").hide();
      $(".pro-box2").show();
      $(".pro-icons").removeClass('prosection-active');
      $(".orders").addClass('prosection-active');
      $(".pro-box3").hide();
      $(".pro-box4").hide();
    });
    $(".address").click(function(){
      $(".pro-box1").hide();
      $(".pro-box2").hide();
      $(".pro-box3").show();
      $(".pro-icons").removeClass('prosection-active');
      $(".address").addClass('prosection-active');
      $(".pro-box4").hide();
    });
    $(".payment").click(function(){
      $(".pro-box1").hide();
      $(".pro-box2").hide();
      $(".pro-box3").hide();
      $(".pro-box4").show();
      $(".pro-icons").removeClass('prosection-active');
      $(".payment").addClass('prosection-active');
    });
  });
</script>

</body>
</html>