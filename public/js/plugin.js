/*global $, jQuery, alert*/
$(document).ready(function () {
    
    'use strict';
    
    $('.carousel').carousel({

        interval: 5000
    });
        
        //Show Color Option Div When Click On Gear//
        
    $(".gear-check").click(function () {

        $(".color-option").fadeToggle();

    });
        
        //Change theme color on click//
        
    var colorLi = $(".color-option ul li");
        
    colorLi
                .eq(0).css("backgroundColor", "#5F2780").end()
                .eq(1).css("backgroundColor", "#009AFF").end()
                .eq(2).css("backgroundColor", "#FFD500").end()
                .eq(3).css("backgroundColor", "#E41B17").end()
                .eq(4).css("backgroundColor", "#5FB059");
                
    colorLi.click(function () {
              
        $("link[href*='theme']").attr("href", $(this).attr("data-value"));
            
    });
});

//loading screen

$(window).load(function () {
        //Loading Elements
        
    'use strict';
    
    $(".loading-overlay .spinner").fadeOut(3000,
        function () {
              
            $("body").css("overflow", "auto");
                            
            $(this).parent().fadeOut(2000, function () {
                                   
                $(this).remove();
                                
            });
        });
        
});



