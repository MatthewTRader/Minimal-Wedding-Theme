$(document).ready(function(){
    
$(window).load(function(){   
  $('#slider').bxSlider({
    pager: false,
    auto: true,
    mode:'horizontal',
    infiniteLoop: true,
    touchEnabled: true,
    controls: true,
    autoHover: true,
    speed:700,
    pause:3000,
});
    });
    
    $("main div").removeClass("hide");

    
    });