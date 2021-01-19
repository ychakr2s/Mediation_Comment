<div id="foot" class="footer">
    <div class="container">
        <span> &copy; Mediationsbüro Klein/Volmer 2015 </span>
        <ul>
            <li><a href="https://www.youtube.com/FormulaStudentTV" target="_blank"><img src="images/youtube.png"></a>
            </li>
            <li><a href="https://twitter.com/FormulaStudentG" target="_blank"> <img src="images/twitter.png"
                                                                                    style="height:26px; width:26px;"
                                                                                    alt=""></a></li>
            <li><a href="https://www.linkedin.com/company/fsg-gmbh/" target="_blank"><img src="images/linkedin.png"
                                                                                          style="height:26px; width:26px;"
                                                                                          alt=""></a></li>
            <li><a href="https://www.facebook.com/eMOTION.RACING/" target="_blank"><img src="images/facebook.png"
                                                                                        style="height:26px; width:26px;"></a>
            </li>
            <li><i class="fas fa-address-book"></i></li>
            <li><a href="impressum.php" target="_blank">Impressum |</a></li>
            <li><a href="contact.php" target="_blank">Kontakt</a></li>
        </ul>
    </div>
</div>

<!-- Start Footer -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    $(function () {
        'use strict';
        // HEADER: Adjust Slider Height
        var windowHeigh = $(window).height();
        // var upperH = $('.upper-bar').innerHeight();
        var navH = $('.navbar').innerHeight();
        $('.mySlider, .carousel-item').height(windowHeigh - (navH));
    });
    $('.medi').click(function () {

        $('html, body').animate({

            scrollTop: $('#med').offset().top

        },1500);

    });
    $('.medBetrMed').click(function () {

        $('html, body').animate({

            scrollTop: $('#medBetr').offset().top

        },1500);

    });
    $('.medAlltag').click(function () {

        $('html, body').animate({

            scrollTop: $('#medAll').offset().top

        },1500);

    });
    $('.medFam').click(function () {

        $('html, body').animate({

            scrollTop: $('#medFamLeb').offset().top

        },1500);

    });
    $('.ubUn').click(function () {

        $('html, body').animate({

            scrollTop: $('#ubUns').offset().top

        },1500);

    });
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                },
                success: function (response) {
                    $('#myForm')[0].reset();
                    $('.sent-notification').text("Ihre Nachricht wurde erfolgreich verschickt");
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');

        return true;
    }

</script>
</body>
</html>