<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Lawyer</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
      <!-- Bootstrap CSS -->
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- Animate CSS -->
      <link href="assets/vendors/animate/animate.css" rel="stylesheet">
      <!-- Icon CSS-->
      <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
      <!-- Owlcarousel CSS-->
      <link rel="stylesheet" type="text/css" href="assets/vendors/owl_carousel/owl.carousel.css" media="all">
      <!--Template Styles CSS-->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
      
    </head>
   
    <body>
      <div class="bg-banner-img clip-ellips">
        
         <div class="ovrllay">
            
            <!-- Header_Area -->
            <nav class="navbar navbar-default header_aera affix-top">
               <div class="container m-s">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="col-md-4 p0">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <img src="./images/logo.png" alt="" width="60px" height="60px" style="float:left; margin-right: 20px; margin-top: -20px;">
                        <a class="navbar-brand logo-biss" href="index.php"> Lawyer </a> <span class="c_yellow" style="font-style: italic; font-family:Verdana, Geneva, Tahoma, sans-serif ;">.pk</span>
                     </div>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="col-md-8 p0">
                     <div class="collapse navbar-collapse" id="min_navbar">
                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown submenu">
                              <a href="index.php" class="">Home</a>
                           </li>
                           <li class="dropdown submenu">
                              <a href="about.php" class="">About</a>
                           </li>

                           <li class="dropdown submenu">
                              <a href="attorneys.php" class="">Attorneys</a>
                           </li>
                           
                           <!-- <li class="dropdown submenu">
                              <a href="services.php" class=""> Services</a>
                           </li> -->
                           <!-- <li class="dropdown submenu">
                              <a href="blog.php" class="">Blog</a>
                           </li> -->
                           
                           <li class="dropdown submenu">
                              <a href="contact.php" class="">Contact</a>
                           </li>
                           
                           <li class="dropdown submenu">
                              <a href="costumerlogin.php" class="">Costumer <span style="color: orange;"> Login</span></a>
                           </li>
                           
                           <li class="dropdown submenu">
                              <a href="lawyerlogin.php" class=""> Lawyer<span style="color: orange; "> Login </span></a>
                           </li>
                           
                           
                        </ul>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
               </div>
               <!-- /.container -->
            </nav>
            <!-- End Header_Area -->
