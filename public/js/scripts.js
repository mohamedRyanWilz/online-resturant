/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */
$(document).ready(function(){
    $(".img1").mouseenter(function(){
        $(this).css({"transform":"rotate(360deg)","transition":" all 0.5s ease-in-out"});

    });
    
     $(".img1").mouseleave(function(){
        $(this).css({"transform":"rotate(-360deg)","transition":" all 0.5s ease-in-out"});

    });
    var i=0;
    $("#drag").click(function(){
    $(this).hide();
    $("#drt").show();
    $("#do").show();
    });
    $("#drt").click(function(){
    $(this).hide();
    $("#drag").show();
    $("#do").hide();
    });
});
