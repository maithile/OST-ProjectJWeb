 
/*------------------------------------------------------------------
* Project:        SuperB
* Author:         CN-InfoTech
* URL:            hthttps://themeforest.net/user/cn-infotech
* Created:        04/12/2018
-------------------------------------------------------------------
 */


"use strict";


/*======== Doucument Ready Function =========*/
jQuery(document).ready(function () {

      // slicknav
    /**
     * Slicknav - a Mobile Menu
     */
    var $slicknav_label;
    $('.responsive-menu').slicknav({
      duration: 500,
      easingOpen: 'easeInExpo',
      easingClose: 'easeOutExpo',
      closedSymbol: '<i class="fa fa-plus"></i>',
      openedSymbol: '<i class="fa fa-minus"></i>',
      prependTo: '#slicknav-mobile',
      allowParentLinks: true,
      label:"" 
    });

    var $slicknav_label;
    $('#responsive-menu').slicknav({
      duration: 500,
      easingOpen: 'easeInExpo',
      easingClose: 'easeOutExpo',
      closedSymbol: '<i class="fa fa-plus"></i>',
      openedSymbol: '<i class="fa fa-minus"></i>',
      prependTo: '#slicknav-mobile',
      allowParentLinks: true,
      label:"" 
    });

    
    /**
     * Sticky Header
     */
        
    $(window).scroll(function(){

      if( $(window).scrollTop() > 10 ){

        $('.navbar').addClass('navbar-sticky-in')

      } else {
        $('.navbar').removeClass('navbar-sticky-in')
      }

    })
    
    /**
     * Main Menu Slide Down Effect
     */
     
    var selected = $('#navbar li');
    // Mouse-enter dropdown
    selected.on("mouseenter", function() {
        $(this).find('ul').first().stop(true, true).delay(350).slideDown(500, 'easeInOutQuad');
    });

    // Mouse-leave dropdown
    selected.on("mouseleave", function() {
        $(this).find('ul').first().stop(true, true).delay(100).slideUp(150, 'easeInOutQuad');
    });

    /**
     *  Arrow for Menu has sub-menu
     */
    if ($(window).width() > 992) {
      $(".navbar-arrow ul ul > li").has("ul").children("a").append("<i class='arrow-indicator fa fa-angle-right'></i>");
    }

    $('#check-btn').click(function() {
      var correct_ans = $('#correct-ans').val();
      var selected_ans = "";
      selected_ans = $('input[name="answer"]:checked').val();
      if(selected_ans == null) {
        alert("Please answer the question.");
      } else {
        if(correct_ans == selected_ans) {
          alert("Congratulation! Correct!");
        } else {
          alert("Nope! You're wrong -_-");
        }
      }
    });
});

