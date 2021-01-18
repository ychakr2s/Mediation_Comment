<?php include 'includes/header.php' ?>
<!--Start Contact Form-->
<section class="contactUs">

    <div class="container">
        <div class="row contactpage">
            <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3"></div>
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                <div class="contactCadr">

                    <form id="myForm" class="contact-form validate-form text-center">
                        <div class="inputData ">
                            <h2 class="contactHeader">Kontaktieren Sie Uns</h2>

                            <h6 class="sent-notification"></h6>
                            <input id="name" class="input100" type="name" placeholder="Name">
                            <br><br>
                            <input id="email" class="input100" type="email" placeholder="E-mail">
                            <br><br>
                            <input id="subject" class="input100" type="subject" placeholder="Betreff">
                            <br><br>
                            <textarea  id="body" class="input100" placeholder="Nachricht"></textarea>
                            <button  type="button" class="contact-btn"  onclick="sendEmail()">
                                <span><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Senden</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3"></div>
        </div>
    </div>
</section>
<!--End Contact Form-->

<?php include 'includes/footer.php' ?>
