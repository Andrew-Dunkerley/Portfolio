
			
			var divs = $('.fade');
$(window).scroll(function(){
   if($(window).scrollTop()<50){
         divs.stop(true,true).fadeIn("slow");
   } else {
         divs.stop(true,true).fadeOut("slow");
   }
});

