<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/layout.css') ?>">
    <link rel="icon" href="<?= base_url('image/UNJANI.ico') ?>">
    <title>UNJANI   </title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <img src="<?=base_url('image/unjanilogo.png')?>" alt="UNJANI" height="30" width="30">
    <a class="navbar-brand" href="<?=  base_url('landing'); ?>">UNJANI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= base_url('landing') ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= base_url('about_us') ?>">About Us</a></li>
          </ul>
        </li>
      </ul>
      <?php 
      $session = \Config\Services::session(); 
      
      if($session->nama != null){ ?>
      <ul class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="<?=base_url('logout')?>">Logout</a>
      </ul>
      <?php }else{?>
      <ul class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="<?=base_url('login')?>">Login</a>
          <a class="nav-link active" aria-current="page" href="<?=  base_url('register'); ?>">Sign Up</a>
      </ul>
      <?php }?>
    </div>
  </div>
</nav>