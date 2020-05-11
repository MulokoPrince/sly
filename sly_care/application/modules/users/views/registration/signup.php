			'
		<div class="errors">
			<?=validation_errors("
				<div class='alert m-1 small sly-alert alert-danger alert-dismissible fade show' role = 'alert'>",
				"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				  <span aria-hidden='true'>&times;</span>
				 </button>
				</div>")?>
		</div>

	<section class="full-section">
		
				<article class="home-form white row">
					<div class="col-12 col-sm-6 form-brand special-color white-text">

						<h1 class="text-center mt-4 row justify-content-center text-baloo-b"> <span class="green-text">SLY</span> CARE</h1>

						<div class="row">
							<p class=" ml-4 text-baloo-r">Join Us now</p>
							<span class="col mr-4 make-line"></span>
						</div>

						<p class="home-form-para">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ex praesentium a. Dolores accusamus tempora porro voluptates maxime ab velit.
						</p>

						<div class="row justify-content-center mt-5">
							<span class="home-logo-user">
								<?=icon('home')?>
							</span>
						</div>

						<div class='row'>
							<div class="make-line mt-4 col ml-4 mr-1"></div>
							<div class="make-line mt-4 col mr-4 ml-1"></div>
						</div>
					</div>

<div class="col-12 col-sm-6 form-form white align-items-center p-4">

	<p class="display-4 text-baloo-b text-center m-0">Join Us</p>

	<!-- LES MENUS -->
	<!-- +++++++++++++++++++++++++++ -->
	<ul class="nav nav-tabs nav-form" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link  active" id="id-tab" data-toggle="tab" href="#id" role="tab" aria-controls="id" aria-selected="true">ID</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Adresse</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">securité</a>
		</li>
		
	</ul>

	<?=form_open('users/registration/get_signed')?>
		<div class="tab-content" id="myTabContent">
			<!-- ID -->
			<!-- ++++++++++++++++++++++++++++++++++++++ -->


			<div class="tab-pane fade show active" id="id" role="tabpanel" aria-labelledby="id-tab">
				<div class="form-group">
					<?=form_label('Nom :','nom')?>
					<?=form_input($nom)?>
				</div>
				<div class="form-group">
					<?=form_label('Nom de famille :','nom_famille')?>	
					<?=form_input($nom_famille)?>
				</div>
				<div class="form-group">
					<?=form_label('E-mail :','email')?>
					<?=form_input($email)?>					
				</div>

				<?=form_label('Sexe :','','class="load"')?>
				<div class="form-check form-check-inline">
					<?=form_radio($sex_m)?>
					<?=form_label('M','M')?>
				</div>
				<div class="form-check form-check-inline">
					<?=form_radio($sex_f)?>
					<?=form_label('F','F')?>
				</div>
			</div>
			
			<!-- ADRESSES -->
			<!-- +++++++++++++++++++++++++++++++++++++ -->
			<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
				<div class="form-group">
					<?=form_label('Pays :','pays')?>
					<?=form_input($pays)?>
				</div>
				<div class="form-group">
					<?=form_label('Ville :','ville')?>
					<?=form_input($ville)?>

				</div>
				<div class="form-group">
					<?=form_label('Numero de telephone :','numero')?>
					<?=form_input($numero)?>

				</div>
			</div>
			<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
			<div class="form-group">
					<label class='small '  for="pass"></label>
					<?=form_label('Mot de passe :','pass')?>
					<?=form_password($pass)?>

				</div>
				<div class="form-group">
					<label  class='small ' for="pass2"></label>
					<?=form_label('Confirmer le mot de passe :','confirm_pass')?>
					<?=form_password($confirm_pass)?>

				</div>
			</div>
		</div>
		<div class="form-group row pl-3 pr-3">
					<?=form_button($submit)?>
		</div>
		<p class=" m-0 text-center small ">Vous avez un compte?<a href="<?=base_url('users/registration')?>"><span class="text-success " > Connectez vous</span></a></p>
	<?=form_close()?>


</div>
			
		</article>
	<div class="home-bg col-6"></div>
</section>