<div id="contact" class="contact-section container">
    <div class="row">
        <!-- Contact Form on the Left -->
        <div class="col-md-6 contact-form">
            <h2 class="mx-auto">Tu smo za Vas!</h2>
            <p>Pošaljite nam poruku – odgovaramo brzo!</p>
            <form action="/NovaBalance/home/contact" method="post">
                <div class="form-group">
                    <label for="cntc_name">Ime/Naziv Firme</label>
                    <input type="text" class="form-control" id="cntc_name" name="cntc_name" required>
                </div>
                <div class="form-group">
                    <label for="cntc_address">Adresa</label>
                    <input type="text" class="form-control" id="cntc_address" name="cntc_address" required>
                </div>
                <div class="form-group">
                    <label for="cntc_phone">Telefon</label>
                    <input type="text" class="form-control" id="cntc_phone" name="cntc_phone" required>
                </div>
                <div class="form-group">
                    <label for="cntc_email">Email</label>
                    <input type="email" class="form-control" id="cntc_email" name="cntc_email" required>
                </div>
                <div class="form-group">
                    <label for="cntc_pib">PIB</label>
                    <input type="text" class="form-control" id="cntc_pib" name="cntc_pib" required>
                </div>
                <br>
                <button name='btnSubmit' class="novabutton btn btn-primary" id="btnSubmit" type="submit">Pošalji</button>
            </form>
        </div>
        
        <!-- Google Map on the Right -->
        <div class="col-md-6">
            <div class="row">
                <!-- <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11377.2177898391!2d20.64031745!3d44.8706284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6f7e0b1b1b1b%3A0x7e0b1b1b1b1b1b1b!2sPan%C4%8Devo%2C%20Srbija!5e0!3m2!1ssr!2srs!4v1614701941175!5m2!1ssr!2srs"
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe> -->
                <h4 class="right">Podcast</h4>
                <p><b>Instant Znanje: Digitalna revolucija u računovodstvu: Računovodstvo 2.0</b></p>
                <p> Saznajte kako digitalni alati menjaju način na koji poslujete.
                Automatizacija, e kasnost i priče iz prakse - sve na jednom mestu.</p>
                <a href="#" class='btn btn-primary'>Slušajte sada</a>
            </div>
            <div class="">
                <img alt="konto-kosta-superhero"  class="img-fluid"  src="assets/img/kontokosta_logo.png">
            </div>
        </div>
    </div>
</div>