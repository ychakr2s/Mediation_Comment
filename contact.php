<?php include 'includes/header.php' ?>
<!--Start Contact Form-->
<section class="contactUs">

    <div class="container">
        <h2 class="contactHeader">Kontaktieren Sie Uns</h2>
        <div class="row contactpage">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="contact-adress">

                    <p class="contactText">Was können wir für Sie tun? <br>Überlegen Sie, ob Ihr Fall für
                        die Mediation geeignet ist? <br>
                        Gerne vereinbaren wir einen unverbindlichen Beratungstermin.</p>
                    <div class="contactImpressum">
                        <p class="contact-adress">
                            <strong>Mediationsbüro Klein/Volmer</strong><br>
                            <i class="fa fa-address-book" aria-hidden="true"></i> &nbsp; Friedrichstr. 32<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;53111 Bonn
                        </p>
                        <p class="contact-data">
                            <span><i class="fa fa-phone"
                                     aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; 0228/ 71 01 75 00 </span><br>
                            <span><i class="fas fa-fax"></i>&nbsp;&nbsp;&nbsp; 0228/ 71 01 74 90</span><br>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;info@mediator-in-bonn.de</span>
                            <br><br>
                            Termine nach Vereinbarung.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-7 col-lg-7">
                <div class="contactCadr">

                    <form id="myForm" class="contact-form validate-form text-center">
                        <div class="inputData ">
                            <!--                            <h2 class="contactHeader">Kontaktieren Sie Uns</h2>-->

                            <h6 class="sent-notification"></h6>
                            <input id="name" class="input100" type="name" placeholder="Name">
                            <br><br>
                            <input id="email" class="input100" type="email" placeholder="E-mail">
                            <br><br>
                            <input id="subject" class="input100" type="subject" placeholder="Betreff">
                            <br><br>
                            <textarea id="body" class="input100" placeholder="Nachricht"></textarea>
                            <button type="button" class="contact-btn" onclick="sendEmail()">
                                <span><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;Senden</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--            <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3"></div>-->
        </div>
    </div>
</section>
<!--End Contact Form-->

<?php include 'includes/footer.php' ?>
