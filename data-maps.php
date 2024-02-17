<?php
include('partials/header.php');
include "server/koneksi.php";
?>
<!-- navbar -->
<?php
include('partials/navbar.php');
?>
<div class="data-map-area mg-b-15">
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

        /* css maps */
        .data-map-area {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .map-container {
            position: relative;
            height: 400px;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
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
            border: none;
            border-radius: 5px;
        }

        .main-spark7-hd h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
                <div class="sparkline11-list res-mg-b-30">
                    <div class="sparkline11-hd">
                        <div class="main-spark7-hd">
                            <h1>Google Maps</h1>
                        </div>
                    </div>
                    <div class="sparkline11-graph">
                        <div class="data-map-single basic-choropleth">
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224420.65703512478!2d-0.2416810261242371!3d51.52877184050315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM1DCsDMwJzM1LjYiTiAwwrAxNycyMy45IkU!5e0!3m2!1sen!2sus!4v1621836683584!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-9 col-sm-6 col-xs-12">
                <div class="sparkline11-list res-mg-b-30">
                    <div class="sparkline11-hd">
                        <div class="main-spark7-hd">
                            <h1>YouTube</h1>
                        </div>
                    </div>
                    <div class="sparkline11-graph">
                        <div class="video-container basic-choropleth">
                            <iframe src="https://www.youtube.com/embed/uyyLot4PLXM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
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
<!-- Data Maps JS
		============================================ -->
<script src="js/data-map/d3.min.js"></script>
<script src="js/data-map/topojson.js"></script>
<script src="js/data-map/datamaps.all.min.js"></script>
<script src="js/data-map/data-maps-active.js"></script>
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
</body>

</html>