
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User</title>
   
    <!-- <link rel="stylesheet" href="css/bondi.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />-->
    <link    rel="stylesheet" href="<?php echo BURL; ?>/css/header.css"> 
    <link    rel="stylesheet" href="<?php echo BURL; ?>/css/reservation.css"> 
    <link    rel="stylesheet" href="<?php echo BURL; ?>/css/profileClient.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <script src ="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script> -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">  
 <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
 <?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo BURL; ?>Voyage">
          <!-- <img src="imgs/logo.png" alt="" /> -->
            <H1 style="text-color:#fffff;"> EasyTravel</H1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main"
          aria-controls="main"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class=" fa fa-solid fa-bars "></i>
        </button>
        <div class="collapse navbar-collapse"  id="main">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3 active" aria-current="page" href="<?php echo BURL; ?>Voyage">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3" href="<?php echo BURL;?>Reservation/mesVoyages/null"><?php  if (isset($_SESSION['isLogin'])) echo "Voyages" ;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-2 p-lg-3" href="<?php echo BURL;?>voyage/profileC"><?php  if (isset($_SESSION['isLogin'])) echo $_SESSION['prenom']." ".$_SESSION['nom'];?></a>
            </li>
          </ul>
           <!-- isset($url[0])? ucwords($url[0])."Controller":"HomeController" -->
          <a class="btn btn-info" href="<?php if (!isset($_SESSION['isLogin'])) {echo BURL.'Voyage/Login/0'; } else {  echo BURL.'Voyage/logOut';}?>"><?php  if (!isset($_SESSION['isLogin'])) echo "Login"; else echo "Logout";   ?></a>
        </div>
      </div>
    </nav>