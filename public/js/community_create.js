/* global $*/

// ファイルチューザーの表示
$('#input-file').on('click', () => {
    $('.upload').show();
});

// アップロード画像プレビュー表示
$('#input-file').change(function(){
    const file = $(this).prop('files')[0];
    const fileReader = new FileReader();
    fileReader.onloadend = function() {
        $('#preview').html('<img class="resize-image" src="' + fileReader.result + '"/>');
    };
    fileReader.readAsDataURL(file);
});