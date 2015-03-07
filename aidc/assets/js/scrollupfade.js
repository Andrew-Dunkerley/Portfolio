var divs = $('.fader');
$(window).scroll(function(){
   if($(window).scrollTop()<75){
         divs.stop(true,true).fadeIn("fast");
   } else {
         divs.stop(true,true).fadeOut("fast");
   }
});