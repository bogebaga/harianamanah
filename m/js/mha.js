  var $allVideo = $('iframe[src*="www.youtube.com"], iframe[src*="docs.google.com"], iframe[src*="www.facebook.com"], iframe[src*="www.google.com"]'), 
      $fluidEle = $('.box, #row, .isi-halaman');
  $allVideo.each(function(){
    $(this).attr('data-aspectratio', this.height / this.width).removeAttr('height').removeAttr('width');
  });

  $(window).resize(function(){
      var newWidth = $fluidEle.width();
      $allVideo.each(function(){
        var $el = $(this);
        $el.width(newWidth).height(newWidth * $el.attr('data-aspectratio'));
    });
  }).resize();
  $('.lazy').lazy(); //initial library lazy() for lazy image container
  $('.item:first').addClass('active');
  
  // $('#home-carousel').swipe();
  // $('#loader').fadeOut('slow');
  $(document).ready(function() {
      //iklan and tag
      $('.close-headline').click(function(event){
          event.preventDefault();
          $(this).parents('.headline-text').fadeOut('slow');
      });
      $('.close-iklan').click(function(event){
          event.preventDefault();
          $(this).parents('.iklan-fixed').fadeOut('slow');
      });
    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });
    //scrolltofix header
    $("#head_fixed").scroll(function(){
        if(this.scrollTop > 55){
            this.addClass('navbar-fixed-top');
        }else{
            this.removeClass('navbar-fixed-top');
        }
    })
  });
  $(window).scroll(function(){
      if($(this).scrollTop() > 55){
        $('#head_fixed').addClass('navbar-fixed-top');
      }else{
        $('#head_fixed').removeClass('navbar-fixed-top');}
    // console.log( $(this).scrollTop() );
  })
  
  $(document).ready(function() {
      var arah = 1;
      $(".tutup").hide();
      $(".navbar-toggle").click(function(event) {
          $("#menuSamping").css('width', '100%');
          $(".navbar-toggle").hide();
          $(".tutup").show();
      });
      $(".tutup").click(function(event) {
          $("#menuSamping").css('width', '0');
          $(".tutup").hide();
          $(".navbar-toggle").show();
      });
      $("#main").click(function(event) {
          $("#menuSamping").css('width', '0');
          $(".navbar-toggle").show();
          $(".tutup").hide();
      });
  });