<!-- contact section start -->
<div class="contact_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="input_main">
          <div class="container">

            <form action="<?= base_url() . '/a/ajouter' ?>" method='POST'>
              <?= csrf_field() ?>
              <div class="form-group">
                <input type="text" class="email-bt" placeholder="Nom" name="nom">
              </div>
              <div class="form-group">
                <input type="email" class="email-bt" placeholder="Email" name="email">
              </div>
              <div class="form-group">
                <input type="tel" class="email-bt" placeholder="Tel" name="tel">
              </div>

              <div class="form-group">
                <input type='textarea' class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message">
              </div>

              <div class="form-group">
                <button type='submit' class="search_bt">Soumettre</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1887.2959261528858!2d47.5376393!3d-18.9051795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f087583939d5ad%3A0x1372fb55945f0ccc!2sChapelle%20Militaire%20Betongolo!5e0!3m2!1sfr!2smg!4v1672991523365!5m2!1sfr!2smg" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- contact section end -->