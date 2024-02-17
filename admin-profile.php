<?php
include('partials/header.php');
include "server/koneksi.php";

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}


$query = mysqli_query($koneksi, "select * from users where id limit 1");

?>
<!-- navbar -->
<?php
include('partials/navbar.php');
?>
<div class="static-table-area">
    <style>
        .youtube-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline8-list">
                    <div class="sparkline8-hd">
                        <div class="main-sparkline8-hd">
                            <h1>Admin Profile</h1>
                        </div>
                    </div>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-image: url('img/halaman.png');
                            background-size: cover;
                            background-position: center;
                        }

                        .container {
                            max-width: 600px;
                            margin: 100px auto;
                            background-color: #fff;
                            padding: 20px;
                            border-radius: 5px;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }

                        .container h1 {
                            font-size: 24px;
                            margin-bottom: 20px;
                        }

                        .form-group {
                            margin-bottom: 20px;
                        }

                        .form-group label {
                            display: block;
                            font-weight: bold;
                            margin-bottom: 5px;
                        }

                        .form-control {
                            width: 100%;
                            padding: 10px;
                            border-radius: 3px;
                            border: 1px solid #ccc;
                            outline: none;
                        }

                        .btn-primary {
                            background-color: #007bff;
                            color: #fff;
                            padding: 10px 20px;
                            border: none;
                            border-radius: 3px;
                            cursor: pointer;
                        }

                        .btn-primary:hover {
                            background-color: #0069d9;
                        }
                    </style>
                    <form class="forms-sample" action="" method="POST" class="form-group">
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="form-group">
                                <label for="">Username :</label>
                                <input type="text" name="nama" class=" form-control" placeholder="Nama" value="<?php echo ($_SESSION["username"]); ?>">
                            </div>
                        <?php
                        } ?>
                    </form>
                    <!-- Replace "VIDEO_ID" with the actual YouTube video ID -->
                    <div class="youtube-grid">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/uyyLot4PLXM" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/aKtb7Y3qOck" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
</div>
</div>

</div>

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
<!-- morrisjs JS
		============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
		============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- tab JS
		============================================ -->
<script src="js/tab.js"></script>
<!-- plugins JS
		============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<script src="js/tawk-chat.js"></script>
<!-- cropper JS
		============================================ -->
<script src="js/cropper/cropper.min.js"></script>
<script src="js/cropper/cropper-actice.js"></script>
<!-- tab JS
</body>

</html>