<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login slycare Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/templates/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
<link rel="stylesheet" href="<?= base_url(); ?>assets/templates/vendor/font-awesome/css/font-awesome.min.css">
        <!-- Custom Font Icons CSS-->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/templates/css/font.css">
        <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/templates/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/templates/css/login.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
<!--     <link rel="stylesheet" href="<?= base_url(); ?>assets/templates/css/custom.css">
     -->    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/templates/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content" style="position: absolute;top: 10%;">
                  <?php if ($msg = $this->session->flashdata('message')):?>
                  <div class="col-lg-12 " style="margin-top: -40%;"><h4 class="text-danger"><?php echo $msg; ?></h4></div>
                <?php endif; ?>
                  <div class="logo">

                    <h1 style="font-size: 1.4em;">SlyTechnology Care about your health</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>