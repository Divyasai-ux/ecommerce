$(document).ready(function() {

  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      // console.log($(window).scrollTop())
      if ($(window).scrollTop() > 280) {
        $('.navigation').addClass('navbar-fixed');
      }
      if ($(window).scrollTop() < 281) {
        $('.navigation').removeClass('navbar-fixed');
      }
    });
});


$('.carousel').carousel({
  interval: 2000
});



