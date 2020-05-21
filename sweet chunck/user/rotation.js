 $(document).ready(function(){

      //alert();
      $("#banner img:not(:first)").css("margin-left","977px");
       $(".circle:eq(0)").css({
        "bottom":"10%",
        "margin-left":"20%"
       })
       $(".circle:eq(1)").css({
        "bottom":"10%",
        "margin-left":"40%"
       })
      $(".circle:eq(2)").css({
           "bottom" : "10%",
           "margin-left":"60%"
       })
      $(".circle:eq(3)").css({
           "bottom" : "10%",
           "margin-left":"20%",
           "background-color":"red"
       })
    
           i=0;
       setInterval(function(){
        $("#banner img:eq("+i+")").animate({
          "margin-left":"-977px"
        },1000)
        $("#banner img:eq("+i+")").fadeOut(1000)
        $("#banner img:eq("+i+")").animate({
          "margin-left" :"977px"
        },1000)
        $("#banner img:eq("+i+")").fadeIn(1000);
        i=(i+1)%3
        marlef=i*20+20;
        if(i!=0)
        {
          $(".circle:eq(3)").animate({
            "margin-left":marlef+"%"
          })
        }
        else
        {
          $(".circle:eq(3)").css({
            "margin-left":marlef+"%"
          })
        }
        $("#banner img:eq("+i+")").animate({
        "margin-left":"0"
        },1000)
       },3000)
    })
    