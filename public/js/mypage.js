$(".h").click(function(){
  $(".h2").toggleClass("open");
  $(".h").toggleClass("open_h");
  $(".h span").eq(0).toggleClass("ham1");
  $(".h span").eq(1).toggleClass("ham2");
  $(".h span").eq(2).toggleClass("ham3");
});

$(".spana_a").click(function(){
  $("#dark_profile").css("visibility", "visible");
});

$("#close_profile").click(function(){
  $("#dark_profile").css("visibility", "hidden");
});

// プロフィール保存処理（非同期）
$("#dark_profile form").submit(function(event) {
  event.preventDefault(); // フォームの通常の送信を防ぐ

  let formData = new FormData(this);

  $.ajax({
      url: "/updateAjax",
      method: "POST",
      data: formData,
      processData: false,
      contentType: false,
      headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
      },
      success: function(response) {
          alert(response.message);
          
          // 画面の情報を更新
          $("#user_name").text(response.profile.name);
          $("#profile_hobby_child").text(response.profile.hobby || '未設定');
          $("#profile_hometown_child").text(response.profile.address || '未設定');

          // if (response.profile.image!== null && response.profile.image !== "" && response.profile.image !== undefined) {
          //     $("#sample_instoroduction, .sample").attr("src", "/storage/" + response.profile.image);
          // }

          if (data.image_updated && data.profile.image) {
            //画像がアップデートされた場合のみ `src` を変更する処理
            $("#sample_instoroduction, .sample").attr("src", data.profile.image);
          }

          // $("#dark_profile").fadeOut(); // フォームを閉じる
      },
      error: function(xhr) {
          // alert("更新に失敗しました。もう一度試してください。");
          alert("エラーが発生しました：" + JSON.stringify(xhr.responseJSON));
      }
    })
  });