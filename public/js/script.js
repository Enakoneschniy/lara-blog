$(function () {
    'use strict';
    $('body').on('click', '.social .like', function (e) {
        e.preventDefault();

        var postId = $(this).attr('id');

        $.ajax({
            url: "/post/like",
            method: "post",
            dataType: "json",
            data: {
                post_id: postId,
                _token: window.Laravel.csrfToken
            },
            success: function(response){
                $('#'+postId).find('.badge').html(response.likes);
                if(response.message){
                    alert(response.message);
                }
            }
        });
    });
});
