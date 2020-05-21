$(document).ready(function(){
     $(window).scroll(function()
     {
     	if($(window).scrollTop() > 350)
     	{
     			$("#hidden-menu").slideDown(1000)

     		$("#menu").slideUp(500)
                
     	}
     	else
     	{
     		//alert();
     		$("#hidden-menu").slideUp(500);
     		$("#menu").show();
     	}
     	
     })
})