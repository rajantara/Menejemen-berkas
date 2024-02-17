<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logobpn.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- educate icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/educate-custon-icon.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!-- Start Left menu area -->
  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
        <a href="index.php"><img class="main-logo" src="img/logo/logobpn.png" alt="image" width="45" height="30" /></a>
        <strong><a href="index.php"><img src="img/logo/logobpn.png" alt="image" width="45" height="30" /></a></strong>
      </div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <li class="active">
              <a class="has-arrow" href="index.php">
                <span class="educate-icon educate-home icon-wrap"></span>
                <span class="mini-click-non">Dasboard</span>
              </a>
              <ul class="submenu-angle" aria-expanded="true">
                <li><a title="Dashboard" href="index.php"><span class="mini-sub-pro">Halaman Utama</span></a></li>
            </li>
          </ul>
          </li>
          <li>
            <a title="Landing Page" href="events.php" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
              <span class="mini-click-non">Event</span></a>
          </li>
          <li>
            <a class="has-arrow" href="all-admin.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Admin</span></a>
            <ul class="submenu-angle" aria-expanded="false">
              <li><a title="Admin Profile" href="admin-profile.php"><span class="mini-sub-pro">Admin Profile</span></a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Berkas File</span></a>
            <ul class="submenu-angle" aria-expanded="false">
              <li><a title="All Library" href="library-assets.php"><span class="mini-sub-pro">Berkas
                    Assets</span></a></li>
              <li><a title="Add Library" href="add-library-assets.php"><span class="mini-sub-pro">Add
                    Berkas Asset</span></a></li>
            </ul>
          </li>
          <li>
            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
              <li><a title="Pdf Viewer" href="pdf-viewer.php"><span class="mini-sub-pro">Pdf
                    Viewer</span></a></li>
              <li><a href="data-maps.php">Maps & YouTube</a></li>
          </li>
          </ul>
          </li>
          <li id="removable">
            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
              <li><a title="Register" href="register.php"><span class="mini-sub-pro">Register</span></a></li>
              <li><a title="404 Page" href="404.php"><span class="mini-sub-pro">404 Page</span></a>
              <li><a title="404 Page" href="logout.php"><span class="mini-sub-pro">Log Out</span></a>
              </li>
          </li>
          </ul>
          </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div>
  <!-- End Left menu area -->