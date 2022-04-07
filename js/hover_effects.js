//hover effects
$(document).ready(function() {
  $(".btn").hover(
  function(){
  $(this).css({"transform":"scale(1.1,1.1)"})
  $(this).css({"transition":".8s"})
  

  },
  
 function(){
 $(this).css({"transform":"scale(1.0,1.0)"})
  
 }
 
  )//end of hover		
 })//end ofdoc ready
 

 // for blinking directions
function animElem2(){
    var animateNam = 'animated shake';
    var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
    $(document).ready(function(e){
    
    $(".blinkDirection").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
    })
    
    
    }
    
    setInterval('animElem2()',1000);
   
    // class level not specified.
   function animElem3(){
    var animateNam = 'animated fadeIn';
    var animationend ='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationEnd animationEnd'
    $(document).ready(function(e){
    
    $(".classNotAssigned").addClass(animateNam).one(animationend, function(){ $(this).removeClass(animateNam)})
    })
    
    
    }
    
    setInterval('animElem3()',3000);