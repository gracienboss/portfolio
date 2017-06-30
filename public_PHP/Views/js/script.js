$(document).ready(function(){

  $(".lien a").on("click",function(){
  var cible = $(this).attr("href");
  $("html,body").animate ({scrollTop: $(cible).offset().top},1000);
  return false;

 })


 
 $('.video-overlay h1').on('click', function(){
   if($('p').css ('visibility') == "hidden") {
    $('p').css ('visibility', 'inherit');
   } else {
    $('p').css ('visibility', 'hidden');
   }
 })
  });
