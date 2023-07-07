<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/logos/Favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/logos/Favicon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./assets/logos/Favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/logos/Favicon.png">
 <title>%TITLE%</title>
  <link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./lib/OwlCarousel/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/rstacruz/nprogress/master/nprogress.css">
  <link rel="stylesheet" type="text/css" href="./src/css/main.css">
</head>

<body>
  <div id="app">
  <!-- Mobile Nav -->
  <div class="sidebar-navigation">
    <div class="title">
      <span>Menu</span>
      <span class="toggleNav close"><i class="ti-close"></i></span>
    </div>
    <ul>
         <li class="p-1"><a href="index.php">Home</a></li>
         <li class="p-1"><a href="about.php">ABOUT</a></li>
      <li class="p-1"><a href="services.php">SERVICES</a></li>
      <li class="p-1"><a href="media-hub.php">MEDIA HUB</a>

      </li>
      <li class="p-1"><a href="projects.php">PROJECTS</a></li>
      <li class="p-1"><a href="partners.php">PARTNERS</a>
      </li>
      <li class="p-1"><a href="gallery.php">GALLERY</a>

      </li>
<!--       <li class="p-1"><a href="#">GALLERY<i class="ti-angle-down"></i></a>
        <ul>
          <li><a href="#">Events </a></li>
          <li><a href="#">Trainings </a></li>
          <li><a href="#">Empowerment Programs </a></li>
          <li><a href="#">Media Shoot</a></li>
        </ul>
      </li> -->
       <li class="p-1"><a href="contact.php">CONTACT</a>

      </li>
      <li class="mt-4 p-4"><a href="get-involved.php" class="link btn m-btn">
          Get Involved
        </a></li>
      <li class="mt-4 p-4"><a href="donate.php" class="link btn m-btn">
          Donate
        </a></li>
      
    </ul>
  </div>
  <header class="m-header">
    <nav class="top-nav">
      <div class="wrapper container">
        <div class="logo">
          <a href="index.php">
            <img src="./assets/logos/logo.png" alt="Logo">
          </a>
        <!--   <span>Media Coalition and
            Awareness to Halt
            Human Trafficking </span> -->
        </div>
        <div class="menu mt-1">
          <ul class="list">
            <li class="item <?php if ($first_part == "home") {echo "active";} else {echo "noactive";}?>"><a href="index.php" class="link">
                Home
              </a></li>
             <li class="item <?php if ($first_part == "about") {echo "active";} else {echo "noactive";}?>"><a href="about.php" class="link">
               About
              </a></li>
            <li class="item <?php if ($first_part == "services") {echo "active";} else {echo "noactive";}?>"><a href="services.php" class="link">
                Services
              </a></li>
            <li class="item <?php if ($first_part == "media-hub") {echo "active";} else {echo "noactive";}?>"><a href="media-hub.php" class="link">
                  Media Hub
              </a></li>
            <li class="item <?php if ($first_part == "projects") {echo "active";} else {echo "noactive";}?>"><a href="projects.php" class="link">
                Projects
              </a></li>
            <li class="item <?php if ($first_part == "partners") {echo "active";} else {echo "noactive";}?>"><a href="partners.php" class="link">
                 Partners
              </a></li>
            <li class="item <?php if ($first_part == "gallery") {echo "active";} else {echo "noactive";}?>"><a href="gallery.php" class="link">
               Gallery
              </a></li>
            <li class="item <?php if ($first_part == "contact") {echo "active";} else {echo "noactive";}?>"><a href="contact.php" class="link">
                Contact              </a></li>
            <li class="item"><a href="get-involved.php" class="link btn m-btn">
                Get Involved
              </a></li>
              <li class="item"><a href="donate.php" class="link btn m-btn">
                Donate
              </a></li>
          </ul>
        </div>
        <div class="mobile-nav-toggle">
          <a href="javascript:void(0)" class="toggleNav">
            menu
          </a>
        </div>
      </div>
    </nav>
  </header>
