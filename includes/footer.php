<div class="footer">
    <div class="container">
            <span> eMOTION RACING &copy;
                2020</span>
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
                                                                                        style="height:26px; width:26px;"
                                                                                        alt=""></a>
            </li>
            <li><i class="fas fa-address-book"></i></li>
            <li><a href="impressum.html" target="_blank">Impressum |</a></li>
            <li><a href="contact.php" target="_blank">Kontakt</a></li>
            <!--            <li><p>eMOTION RACING</p></li>-->
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
                    $('.sent-notification').text("Message Sent Successfully.");
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