<!-- contact section start -->
<div class="contact_section layout_padding" style='top: -33px;position: relative;'>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
                    <div class="input_main">
                       <div class="container">

                        <form action="<?=base_url().'/a/ajouter'?>" method='POST'>
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
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                    </div>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- contact section end -->