
	<section class="full-section">
		
				<article class="home-form white row">
					<div class="col-12 col-sm-6 form-brand bg-dark white-text">

						<h1 class="text-center mt-4 row justify-content-center text-baloo-b"> <span class="red-text">SLY</span> CARE</h1>

						<div class="row">
							<p class=" ml-4 text-baloo-r">Login now</p>
							<span class="col mr-4 make-line"></span>
						</div>

						<p class="home-form-para">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ex praesentium a. Dolores accusamus tempora porro voluptates maxime ab velit.
						</p>

						<div class="row justify-content-center mt-5">
							<span class="home-logo-user">
								<?=icon('user')?>
							</span>
						</div>

						<div class='row'>
							<div class="make-line mt-4 col ml-4 mr-1"></div>
							<div class="make-line mt-4 col mr-4 ml-1"></div>
						</div>
					</div>

					<!-- FORMULAIRE  -->
				<div class="col-12 col-sm-6 form-form h-100 white align-items-center p-4">
					
					<h2 class=" row justify-content-center text-baloo-b display-4">Login</h2>
					<?=form_open('users/registration/login')?>
						<div class="form-group row ">
							<?=form_label('Email address','email')?>
							<?=form_input($email)?>	
							<small id="emailHelp" class="form-text text-muted">Votre email restera confidentiel et ne sera pas partage</small>
						</div>
						<div class="form-group row">
							<label for="pass">Password</label>
							<input type="password" class="form-control" id="pass" placeholder="Password">
						</div>
						<div class="form-group form-check row">
							<!-- <input type="checkbox" class="form-check-input" id="check1"> -->
							<?=form_checkbox($stay_connect)?>
							<?=form_label('Rester connecté','stay_connect','class="form-check-label"')?>
							<!-- <label class="" for="check1">Rester connecté</label> -->
						</div>

						<div class="form-group row">
							<button type="submit" class="btn btn-md red white-text col-12 m-0">connexion</button>
						</div>
					<?=form_close()?>
					<a href="">	<p class=" m-0  text-center small text-muted"> Mot de passe oublié?</p></a>
					<p class=" m-0 text-center small text-muted">Pas de compte?<a href="<?=base_url('users/registration/signup')?>"><span class="text-danger ">Inscrivez vous</span></a></p>
				</div>
			
				</article>
		<div class="home-bg col-6"></div>
	</section>
