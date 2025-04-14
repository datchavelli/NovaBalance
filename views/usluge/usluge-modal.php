<style>
#uslugeModal .modal-body{
  background-color: #54595F;
}
#kontakt-form {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group label {
  margin-bottom: 4px;
  font-size: 14px;
  color: white;
}

.form-group input {
  padding: 10px;
  font-size: 14px;
  border: none;
  border-radius: 4px;
}

.required::after {
  content: " *";
  color: red;
}

</style

<!-- Modal -->
<div class="modal fade" id="uslugeModal" tabindex="-1" role="dialog" aria-labelledby="uslugeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="uslugeModalLabel">Više Detalja</h5>
      </div>
      <div class="modal-body">
          <form id="kontakt-form">
            <div class="form-group">
              <label for="ime" class="required">Ime</label>
              <input type="text" id="ime" name="ime" required>
            </div>

            <div class="form-group">
              <label for="prezime">Prezime</label>
              <input type="text" id="prezime" name="prezime">
            </div>

            <div class="form-group">
              <label for="email" class="required">Email</label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label for="organizacija" class="required">Organizacija</label>
              <input type="text" id="organizacija" name="organizacija" required>
            </div>

            <div class="form-group">
              <label for="telefon" class="required">Telefon</label>
              <input type="tel" id="telefon" name="telefon" required>
            </div>

            <div class="form-group">
              <label for="postanski">Poštanski broj</label>
              <input type="text" id="postanski" name="postanski">
            </div>

            <div class="form-group">
              <label for="grad" class="required">Grad</label>
              <input type="text" id="grad" name="grad" required>
            </div>

            <div class="form-group">
              <label for="drzava" class="required">Država</label>
              <input type="text" id="drzava" name="drzava" required>
            </div>

            <div class="form-group">
              <label for="adresa" class="required">Adresa</label>
              <input type="text" id="adresa" name="adresa" required>
            </div>

            <div class="form-group">
              <label for="pib" class="required">PIB</label>
              <input type="text" id="pib" name="pib" required>
            </div>

            <div class="form-group">
              <label for="maticni">Matični broj</label>
              <input type="text" id="maticni" name="maticni">
            </div>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" id='usluge-btn-submit' class="btn btn-primary">Potvrdi</button>
        <button type="button" class="btn btn-secondary close" data-dismiss="modal">Zatvori</button>
      </div>
    </div>
  </div>
</div>
