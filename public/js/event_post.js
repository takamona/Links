$('#cal').fullCalendar({
  events:[
    {
      title:"○",
      start:"2021-12-10"
    }
  ]
});

document.getElementById("upload").addEventListener("click", function(e) { document.getElementById("uploadFile2").click();
});

	// ファイルリーダー作成
 $('#uploadFile2').on('change', function (e) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#img").attr('src', e.target.result);
    }
    reader.readAsDataURL(e.target.files[0]);
});

$("#upload").hover(
  function() {
  $(".up1").addClass("moji");
},
  function() {
  $(".up1").removeClass("moji");
});
//投稿内容確認
$(".re").click(function(){
  $(".over").fadeIn();
});
$(".modoru").click(function(){
  $(".over").fadeOut();
});