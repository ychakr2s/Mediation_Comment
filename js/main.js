/*global $, jQuery, alert*/
/*
* By default when you enqueue jQuery in Wordpress you must use jQuery,
* and $ is not used (this is for compatibility with other libraries).
*/

'use strict';

$(document).ready(function () {
    // $(function () {
    //     'use strict';
    //     // HEADER: Adjust Slider Height
    //     var windowHeigh = $(window).height();
    //     // var upperH = $('.upper-bar').innerHeight();
    //     var navH = $('.navbar').innerHeight();
    //     $('.mySlider, .carousel-item').height(windowHeigh - (navH));
    // });

    // this methode keep the high of the slider adapted with the screen
    console.log("salam sa");

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');
        return true;
    }

    $('#comment_form').on('submit', function (event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "add_comment.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            success: function (data) {
                if (data.error != '') {
                    $('#comment_form')[0].reset();
                    $('#comment_message').html(data.error);
                    $('#comment_id').val('0');
                    load_comment();
                }
            }
        })
    });
    load_comment();

    function load_comment() {
        $.ajax({
            url: "fetch_comment.php",
            method: "POST",
            success: function (data) {
                $('#display_comment').html(data);
            }
        })
    }

    $(document).on('click', '.reply', function () {
        var comment_id = $(this).attr("id");
        $('#comment_id').val(comment_id);
        $('#comment_name').focus();
    });
});
// $(function () {
//     'use strict';
//     // HEADER: Adjust Slider Height
//     var windowHeigh = $(window).height();
//     //var upperH = $('.upper-bar').innerHeight();
//     var navH = $('.navbar').innerHeight();
//     console.log("window " + windowHeigh);
//     $('.mySlider, .carousel-item').height(windowHeigh - navH);
// });

$('#foot').css('margin-top',
    $(document).height()
    - ($('#head').height() + $('#cont').height())
    - $('#foot').height()
);