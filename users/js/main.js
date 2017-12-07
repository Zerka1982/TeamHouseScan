// /** 
//  * ===================================================================
//  * main js
//  *
//  * ------------------------------------------------------------------- 
//  */ 

// (function($) {

// 	"use strict";


//    $(window).load(function() {

// 	/*-----------------------------------------------------*/
//   	/* Mobile Menu
//    ------------------------------------------------------ */  
     $(document).ready(function(){
                  $(".menu-toggle a").click(function(){ 
                        $(".nav-container").slideToggle(700);

                  });
            });


// 	/*----------------------------------------------------*/
//   	/* Smooth Scrolling
//   	------------------------------------------------------*/
//   	$('.smoothscroll').on('click', function (e) {
	 	
// 	 	e.preventDefault();

//    	var target = this.hash,
//     	$target = $(target);

//     	$('html, body').stop().animate({
//        	'scrollTop': $target.offset().top
//       }, 800, 'swing', function () {
//       	window.location.hash = target;
//       });

//   	});  


//  	/*----------------------------------------------------- */
//   	/* Back to top
//    ------------------------------------------------------- */ 
// 	var pxShow = 300; // height on which the button will show
// 	var fadeInTime = 400; // how slow/fast you want the button to show
// 	var fadeOutTime = 400; // how slow/fast you want the button to hide
// 	var scrollSpeed = 300; // how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

//    // Show or hide the sticky footer button
// 	jQuery(window).scroll(function() {

// 		if (!( $("#header-search").hasClass('is-visible'))) {

// 			if (jQuery(window).scrollTop() >= pxShow) {
// 				jQuery("#go-top").fadeIn(fadeInTime);
// 			} else {
// 				jQuery("#go-top").fadeOut(fadeOutTime);
// 			}
// 		}		
// 	});		
// });
// })(jQuery);


$(window).scroll(function(){
      		if ($(window).scrollTop() > 500) {
      			$("#go-top").fadeIn('fast');
      		} else {
      			$("#go-top").fadeOut('slow');
      		}
      	})
      	$('#go-top').click(function(){

      		$('body').animate({
      			scrollTop: 0
      		}, 'slow');
     	});

// Disbale the right click on the page

// document.addEventListener('contextmenu', function (e){
//       'use strict';
//       e.preventDefault();
// })
      
      function displayVideo() {
            var icon = document.getElementById("circlePlay");
            icon.style.display = "none"; 

            var video = document.getElementById("sampleMovie");
            video.style.display = "block";
            video.play();
      }
