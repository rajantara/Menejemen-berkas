<?php

include("server/koneksi.php");

//registrasi

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //prosers registrasi

  $username = $_POST['username'];
  $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
  $password = password_hash($password, PASSWORD_DEFAULT);
  $level = $_POST['level'];
  if (!empty($username) && !empty($password) &&  !is_numeric($username)) {
    //save database datauptd
    $query = "INSERT INTO users (username, password,level) VALUES ('$username','$password','$level')";
    mysqli_query($koneksi, $query);
    header("location: login.php");

    die;
  } else {
    echo "Error";
  }
}



?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logobpn.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
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
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="css/form/all-type-forms.css">
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
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('img/login.png');
      background-size: cover;
      background-position: center;
    }

    .hpanel .panel-body {
      background-color: burlywood;
      border-radius: 10px;
      padding: 20px;
      position: relative;
    }

    h4 {
      text-align: center;
    }

    .text-center {
      text-align: center;
    }

    .btn-cancel {
      display: inline-block;
      margin-left: 10px;

    }
  </style>
  <div class="error-pagewrap">
    <div class="error-page-int">
      <div class="content-error">
        <div class="hpanel">
          <div class="panel-body">
            <form action="" method="POST">
              <h4>Registration</h4>
              <div class="row">
                <div class="form-group col-lg-12">
                  <label>Username</label>
                  <input class="form-control" type="text" id="username" name="username" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Password</label>
                  <input type="password" class="form-control" type="password" id="password" name="password" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Repeat Password</label>
                  <input type="password" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                  <select class="form-control form-control-lg" id="level" name="level">
                    <option style="color:red;">--Pilih Level--</option>
                    <option value="admin">admin</option>
                    <option value="users">users</option>
                  </select>
                </div>
                <div class="checkbox col-lg-12">
                  <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                </div>
              </div>
              <div class="text-center">
                <input type="submit" value="Register" class="btn btn-success loginbtn" />
                <a class="btn btn-default btn-cancel" href="login.php">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- jquery
		============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- sticky JS
		============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
		============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- tab JS
		============================================ -->
<script src="js/tab.js"></script>
<!-- icheck JS
		============================================ -->
<script src="js/icheck/icheck.min.js"></script>
<script src="js/icheck/icheck-active.js"></script>
<!-- plugins JS
		============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<script src="js/tawk-chat.js"></script>
</body>

</html>