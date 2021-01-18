<?php include 'includes/header.php' ?>

    <!--Start Contact Me-->
    <div id="contac" class="contact">
        <div class="container">
            <div class="info">
                <h3>Kontaktieren Sie uns</h3>
                <p style="margin-top: 40px">
                    Duisburger str. 100<br>
                    45479 Mülheim an der Ruhr <br>
                <p>
                <p>
                    <strong>Email: </strong> info@emotion-racing.de <br>
                    <strong>Telefonnummer: </strong> +49 ( 0 ) 208 88254-770
                </p>
            </div>
            <!--        -->
            <section>
                <h4 class="sent-notification"></h4>

                <form id="myForm">
                    <h2>Send an Email</h2>

                    <label>Name</label>
                    <input id="name" type="text" placeholder="Enter Name">
                    <br><br>

                    <label>Email</label>
                    <input id="email" type="text" placeholder="Enter Email">
                    <br><br>

                    <label>Subject</label>
                    <input id="subject" type="text" placeholder=" Enter Subject">
                    <br><br>

                    <p>Message</p>
                    <textarea id="body" rows="5" placeholder="Type Message"></textarea>
                    <br><br>

                    <button type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
                </form>
            </section>
        </div>
    </div>
    <!--End Contact Me-->
<?php include 'includes/footer.php' ?>