(function ($) {
 "use strict";

/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
 wow js active
------------------------------ */
	new WOW().init();
 
/*----------------------------
 owl active
------------------------------ */  
  $(".testimonial-area").owlCarousel({
      autoPlay: true, 
	  slideSpeed:1000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });  
  $(".total-teams").owlCarousel({
      autoPlay: true, 
	  slideSpeed:1000,
	  pagination:true,
	  navigation:false,	  
      items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,1],
	  itemsDesktopSmall : [980,1],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  }); 
  $(".home2-testimonial").owlCarousel({
      autoPlay: true, 
	  slideSpeed:1000,
	  pagination:true,
	  navigation:false,	  
      items : 2,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,2],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,1],
	  itemsMobile : [479,1],
  });

/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) );  
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
/*-------------------------------------
Jquery  Color pannel setting
-------------------------------------*/
	$('span.skype-color').on('click',function(){
	  $('body').addClass('skype-color-body').removeClass('green-color-body red-color-body orange-color-body coral-color-body deeppink-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.red-color').on('click',function(){
	  $('body').addClass('red-color-body').removeClass('green-color-body skype-color-body orange-color-body coral-color-body deeppink-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.green-color').on('click',function(){
	  $('body').addClass('green-color-body').removeClass('skype-color-body red-color-body orange-color-body coral-color-body deeppink-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.orange-color').on('click',function(){
	  $('body').addClass('orange-color-body').removeClass('skype-color-body red-color-body green-color-body coral-color-body deeppink-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.coral-color').on('click',function(){
	  $('body').addClass('coral-color-body').removeClass('skype-color-body red-color-body green-color-body orange-color-body deeppink-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.deeppink-color').on('click',function(){
	  $('body').addClass('deeppink-color-body').removeClass('skype-color-body red-color-body green-color-body orange-color-body coral-color-body khaki-color-body greenyellow-color-body');
	});
	$('span.khaki-color').on('click',function(){
	  $('body').addClass('khaki-color-body').removeClass('skype-color-body red-color-body green-color-body orange-color-body coral-color-body deeppink-color-body greenyellow-color-body');
	});
	$('span.greenyellow-color').on('click',function(){
	  $('body').addClass('greenyellow-color-body').removeClass('skype-color-body red-color-body green-color-body orange-color-body coral-color-body deeppink-color-body khaki-color-body');
	});

	$('.cross-button').on('click',function(){
	  $('.demo-panel-setting-area').toggleClass( "highlight" );
	}); 


	/*---------------------------------
	Search Box jQuery
	-----------------------------------*/	
	 $('.search-icon >a >i').on('click',function(){
	   $('.search-box').toggleClass( "show-box" );
	 }); 

	 /*------------------------------------
	 SideSlide menu Activation
	 -------------------------------------*/       
	    $('.humbarnav > a').on('click',function(){
	        $('.customer-testiminal-area').addClass( "show-humbernar" );
	    });
	    $('.close').on('click',function(){
	        $('.customer-testiminal-area').removeClass( "show-humbernar" );
	    });

	    /*-------------------------------
	    Counter Up
	    ---------------------------------*/
    	$('.about-counter').counterUp({
    		delay: 50,
    		time: 3000
    	});
    	/*--------------------------
    	 Sticky Menu Activation Code
    	---------------------------- */		   
    	$(window).on('scroll', function(){
    		if( $(window).scrollTop()>100 ){
    			$('#sticky').addClass('stick');
    			} else {
    			$('#sticky').removeClass('stick');
    		}
    	});

    	/*---------------------
    	Circular Bars - Knob
    	--------------------- */
		  if(typeof($.fn.knob) != 'undefined') {
			$('.knob').each(function () {
			  var $this = $(this),
				  knobVal = $this.attr('data-rel');   		

			  $this.knob({
				'draw' : function () {
				  $(this.i).val(this.cv + '%')
				}
			  });
			  $this.appear(function() {
				$({
				  value: 0
				}).animate({
				  value: knobVal
				}, {
				  duration : 2000,
				  easing   : 'swing',
				  step     : function () {
					$this.val(Math.ceil(this.value)).trigger('change');
				  }
				});
			  }, {accX: 0, accY: -150});
			});
		  }
		  /*-------------------------------------
		  Fancybox jquery activation Code
		  -------------------------------------*/
		  $('.fancybox').fancybox();
		  /*-------------------------------------
		  Single Product jQuery activation code
		  -------------------------------------*/
	      $(".tab-image").owlCarousel({

	          // Most important owl features
	          items : 3,
	          itemsDesktop : [1199,3],
	          itemsDesktopSmall : [980,3],
	          itemsTablet: [768,2],
	          itemsTabletSmall: false,
	          itemsMobile : [479,1],
	          singleItem : false,
	          itemsScaleUp : false,
	          // Navigation
	          navigation : true,
	          navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	          // Responsive 
	          responsive: true,
	          pagination:false,    

	      });
	      /*-------------------------------------
	      Single Product Tab  activation code
	      -------------------------------------*/
          $(".tab-image").on('click', 'li', function(event) {
              event.preventDefault();
              var displayTarget = $("#product-1");
              displayTarget.find('a').removeClass('active');
              var id = $(this).attr('data-id');
              // var targetUrl = $(this).find('a').attr('href');
              // console.log(displayTarget.html());
              var targetClass = ".product-gallery-img-"+id;
              console.log(targetClass);
              displayTarget.find(targetClass).addClass('active');
              // displayTarget.find('img').attr('src', targetUrl);
              /* Act on the event */
          });          
          /*-------------------------------------
           Related Product jQuery activation code
           -------------------------------------*/
            $(".related-product-area > .single-product-store").owlCarousel({
                // Most important owl features
                 items : 3,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [980,2],
                itemsTablet: [768,1],
                itemsTabletSmall: false,
                itemsMobile : [479,1],
                singleItem : false,
                itemsScaleUp : false,
                // Navigation
                navigation : true,
                navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
                // Responsive
                responsive: true,
                pagination:false,
            });
           /*----------------------------
           mixitup active
           ------------------------------ */  
           	$('#Container').mixItUp();


})(jQuery); 