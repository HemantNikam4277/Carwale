<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('images/logo/favicon.png'); ?>">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <title><?php echo $title; ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-2 mb-5">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="<?php echo base_url('/'); ?>"><img src='<?php echo base_url('images/logo/logo-transparent.png'); ?>' class='img-fluid' width="250"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item my-auto me-4">
                <a class="nav-link sliding-border text-white" href="<?php echo base_url('about'); ?>">About</a>
                </li>
                <li class="nav-item dropdown my-auto me-4">
                <a class="nav-link sliding-border text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Solutions
                </a>
                <ul class="dropdown-menu py-0" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item py-3 text-Dark" href="<?php echo base_url('editorial'); ?>">Editorial</a></li>
                    <li><a class="dropdown-item py-3 text-Dark" href="<?php echo base_url('lead-generation'); ?>">Lead Generation</a></li>
                </ul>
                </li>
                <li class="nav-item my-auto me-4">
                <a class="nav-link sliding-border text-white" href="<?php echo base_url(''); ?>">Resources</a>
                </li>
                <li class="nav-item my-auto me-4">
                <a href="<?php echo base_url('contact-us'); ?>" class="btn btn-red btn-lg">Contact Us</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<!--
    <div class="offcanvas offcanvas-start bg-white border-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="<?php echo base_url('images/logo/logo-transparent.png'); ?>" width="140" alt="">
        <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body overflow-y">
          <ul class="nav flex-column">
            <li class="nav-item mt-2">
              <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false" aria-controls="services">Solutions <i class="fas fa-caret-down float-end"></i></a>
              <div class="collapse" id="capabilities">
                <ul class="nav flex-column ms-4">
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url(''); ?>">Editorial</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url(''); ?>">Lead Generation</a>
                  </li>
                </ul>
              </div>
          </li>
            <li class="nav-item mt-2">
              <a class="nav-link" href="<?php echo base_url('resources'); ?>">Resources</a>
            </li>
            <li class="nav-item my-auto me-4">
              <a href="contact" class="btn btn-red btn-lg">Contact Us</a>
            </li>
          </ul>
        </div>
    </div>

-->

