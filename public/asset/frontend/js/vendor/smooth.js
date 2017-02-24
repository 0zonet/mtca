$(document).ready(function(){

       $('.smooth').click(function(e){
          e.preventDefault();
          $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 700);
       });
       
});