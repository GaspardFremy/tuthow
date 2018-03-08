$(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});




$('.menu-nav').click(function() {
  setTimeout( function(){
    $('.menu-nav').css('width','180px');
       },50);
});


$('.menu-nav').click(function() {
    setTimeout( function(){
      $('.menu-title').css('display','inline');
         },200);
  });

$('.body-container').click(function() {
    setTimeout( function(){
      $('.menu-title').css('display','none');
      $('.menu-nav').css('width','70px');
         },50);
  });



console.log('test');