/* global $*/
$(".h").click(function(){
$(".h2").toggleClass("open");
$(".h").toggleClass("open_h");
$(".h span").eq(0).toggleClass("ham1");
$(".h span").eq(1).toggleClass("ham2");
$(".h span").eq(2).toggleClass("ham3");
});
