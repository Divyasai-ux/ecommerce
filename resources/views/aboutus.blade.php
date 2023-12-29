@extends('layouts.default')
@section('title','About Us')
@section('content')
  <style type="text/css">
    .about-mission p{
      position: absolute;
      top: 20%;
      text-align: center;
      font-size: 2em;
      color: white;
      width: 50%;
      font-weight: 600;
      left: 16px;
      margin-left: 7%;
    }
    .about-mission h4{
      position: absolute;
      top: 50%;
      text-align: center;
      font-size: 1.7em;
      color: white;
      width: 60%;
      font-weight: 600;
      left: 16px;
      margin-left: 2%;
    }
    @media only screen and (max-width: 600px){
      .about-mission p{
        position: absolute;
        top: 20%;
        text-align: center;
        font-size: 1em;
        color: white;
        width: 50%;
        font-weight: 600;
        left: 16px;
        margin-left: 5%;
      }
      .about-mission h4{
        position: absolute;
        top: 50%;
        border:1px solid red;
        text-align: center;
        font-size: 0.7em;
        color: white;
        width: 60%;
        font-weight: 600;
        left: 16px;
      }
    }
    @media only screen and (max-width: 375px){
      .about-mission p{
        position: absolute;
        top: 20%;
        text-align: center;
        font-size: 1em;
        color: white;
        width: 50%;
        font-weight: 600;
        left: 16px;
        margin-left: 5%;
      }
      .about-mission h4{
        position: absolute;
        top: 45%;
        text-align: center;
        font-size: 0.5em;
        color: white;
        width: 60%;
        font-weight: 600;
        left: 16px;
        
      }
    }
  
    </style>
    <div class="container-fluid">
      <div class="row" style="padding: 0px;">
        <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12" style="padding: 0px;">
          <div class="about-cover" >
            <img src="{{url('images/aboutbg.png')}}" class="img-responsive">
            <div class="about-mission">
              <p>OUR MISSION</p>
              <h4>YOUR SUCCESS IS MY AMBITION
                <br>
                YOUR DEFEAT SPRUS US ON TO BE BETTER
              </h4>
              <!-- <h3></h3> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cover-content">
    <!-- <span>Hello
    </span> -->
  </div>
  <div class="ps-section ps-ourteam pt-80 pb-80">
    <div class="ps-container" style="padding: 0 50px 0 50px;">
      <div class="ps-section__header mb-50">
        <h2 class="ps-section__title" data-mask="Us">- About Company</h2>
      </div>
      <div class="ps-section__content">
        <div class="row">
          <!-- <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <div class="about-img">
              <img src="{{url('images/logo.png')}}" class="img-responsive">
            </div>
            <hr>
          </div> -->
          <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" >

            <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            <!-- <hr> -->
            <div class="about-img" style="width: 100%;">
              <img src="{{url('images/leafndew.jpeg')}}" style="width: 100%; padding-top: 25px;" class="img-responsive">
            </div>
          </div>

          <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" style="text-align: justify;">
            <br>
            <span class="about-span">At long last, a brand that puts your well-being FIRST! Leaf n Dew Storeroom points reestablishing the brilliant words<strong> 'In congruity with nature and YOU'!</strong></span>
            <br><br>
            <span class="about-span">
              We bring you items that are sheltered, non-harmful, and exceptionally compelling. We have faith in unmistakable outcomes you can see and believe, and we have confidence in the intensity of nature to bring these outcomes. Regardless of whether you're searching for common healthy skin or without paraben cosmetics, we have a variety of regular items for skin revival. We are continually propelling fantastic new items, sourcing new fixings and battling on social issues. These are only a portion of the manners in which we endeavor to develop our business - both monetarily and morally. 
            </span>
            <br><br>
            <span class="about-span">
              What we don't utilize is the thing that truly checks: no pointless synthetic substances, fillers, parabens, or added substances. 

              "Change is the main consistent throughout everyday life, Grasp your magnificence and be common. Age Nimbly!" 

              Not with standing making items that give you perceptible outcomes, we additionally make our items with individual revival and a little extravagance at the top of the priority list. We accept that day by day washing and skincare customs ought to be agreeable — an approach to cut out some truly necessary personal time in your chaotic daily schedule. 

            </span>
            <br><br>
            <span class="about-span">
              We value being a brand that is against creature testing. We try to do we say others should do—and we want to set the model for others to follow. 
              We wish for you to have a pleasant shopping experience and we need you to be a fulfilled client. We will probably give items that are made from 100% normally sourced or wild-created fixings and botanicals, making Leaf n Dew Wardrobe a little heaven around.
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection