<?php 
if ($this->session->userdata('USER_ID')) {
  redirect(base_url('Dashboard/Dashboard'));
} ?>
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="<?= base_url().'login/signin' ?>" method="post" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="email" name="loginUsername" placeholder="Nom d'utilisateur" required data-msg="Veuillez saisir votre adresse electronique" class="input-material">
                      
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" placeholder="Mot de passe" required data-msg="Veuillez saisir votre mot de passe" class="input-material">
                    </div>
						<!-- <button id="login" class="btn btn->primary">Connexion</button> -->
                    <button id="login" class="btn btn-primary" type="submit">Connexion</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                  <a href="<?= base_url().'login/forgrtMdp' ?>" class="forgot-pass">Mot de passe oublie?</a><br><small>Vous n'avez pas de compte? </small><a href="<?= base_url().'login/signup' ?>" class="signup">Inscivez-vous</a>
                  
                </div>
              </div>
            </div>
         