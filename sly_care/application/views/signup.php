<?php if ($this->session->userdata('USER_ID')) {
  redirect(base_url('Dashboard/Dashboard'));
} ?>

<div class="col-lg-6 bg-white">
  <div class="form d-flex align-items-center">
    <div class="content">
<!-- 
<div class="row">
  <div class=" col-lg-12 bg-default top" >
    <h1 class="text-danger">bonjour</h1>
  </div>
  
</div> -->
      <form action="<?= base_url().'login/signupTreat' ?>" method="post" class="form-validate">
<div class="col-lg-12 " style="text-align: center;" >
              

    <h1 style="text-align: center;">Inscription</h1>
  </div>

        <div class="form-group">
          <input id="username" type="text" name="username" placeholder="Nom d'utilisateur" required data-msg="Veuillez saisir votre Nom" class="input-material">
        </div>
        <div class="form-group">
          <input id="post_nom" type="text" name="post_nom" placeholder="Post-nom" required data-msg="Veuillez saisir votre Post-nom" class="input-material">
        </div>
        <div class="form-group">
          <input id="email" type="email" name="email" placeholder="Votre adresse mail" required data-msg="Veuillez saisir votre adresse electronique" class="input-material">
        </div>
        <div class="form-group">
         <select class="input-material form-control" name="gender"  id="">
            <option value="">Select sex</option>
            <option class="input-material form-control"  value="Homme">Homme</option>
            <option class="input-material form-control" value="Femme">Femme</option>
          </select>
        </div>

            <?php if(!$exists): ?>
              <div class="form-group">
                <select class="input-material form-control" name="role"  id="">
              <option value="">Select role</option>
                <?php 
                if (count($roles)):
                  foreach($roles as $role):
                  ?>
                  
                  <option class="input-material form-control"  value="<?= $role->ROLE_ID ?>"><?= $role->ROLE_NAME ?></option>
                  <?php 
                  endforeach;
                  endif;
                  ?>
                </select>
              </div>
              <?php endif; ?>
        <div class="form-group">
          <input id="login-password" type="password" name="loginPassword" placeholder="Mot de passe" required data-msg="Veuillez saisir votre mot de passe" class="input-material">
        </div>
        <div class="form-group">
          <input id="passwordr" type="password" name="passwordr" placeholder="Repeter le mot de passe" required data-msg="Veuillezremplir ce champs" class="input-material">
        </div>
            <!-- <button id="login" class="btn btn->primary">Connexion</button> -->
        <button id="login" class="btn btn-primary" type="submit">Inscription</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
      </form>
      <a href="<?= base_url().'login/forgrtMdp' ?>" class="forgot-pass">Mot de passe oublie?</a><br><small>Si vous avez deja un compte? </small><a href="<?= base_url().'login/' ?>" class="signup">Connectez-vous ici</a>
    </div>
  </div>
</div>
