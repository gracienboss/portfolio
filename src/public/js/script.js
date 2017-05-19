$(document).ready(function(){

  $(".lien a").on("click",function(){
  var cible = $(this).attr("href");
  $("html,body").animate ({scrollTop: $(cible).offset().top},1000);
  return false;

 })

  });
