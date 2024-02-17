<?php
include('partials/header.php');
include "server/koneksi.php";
?>


<!-- navbar -->
<?php
include('partials/navbar.php');
?>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description"> Add Berkas Files</a></li>
                        <li><a href="#reviews"> Account Information</a></li>
                        <li><a href="#INFORMATION">Social Information</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form method="POST" action="upload.php" enctype="multipart/form-data">
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
                                                <div class="form-group">
                                                    <label for="year">Pilih Tahun:</label>
                                                    <select class="form-control" name="year" id="year">
                                                        <option value="">Semua Tahun</option>
                                                        <?php
                                                        $currentYear = date('Y');
                                                        for ($i = $currentYear; $i >= 2000; $i--) {
                                                            echo "<option value='$i'>$i</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <br>
                                                <label for="file">Pilih File:</label>
                                                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx,.txt" required><br>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                                    </div>
                                                    <a href="404.php" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="devit-card-custom">
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Facebook URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Twitter URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Google Plus">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="Linkedin URL">
                                                    </div>
                                                    <a href="404.php" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<!-- maskedinput JS
		============================================ -->
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/masking-active.js"></script>
<!-- datepicker JS
		============================================ -->
<script src="js/datepicker/jquery-ui.min.js"></script>
<script src="js/datepicker/datepicker-active.js"></script>
<!-- form validate JS
		============================================ -->
<script src="js/form-validation/jquery.form.min.js"></script>
<script src="js/form-validation/jquery.validate.min.js"></script>
<script src="js/form-validation/form-active.js"></script>
<!-- dropzone JS
		============================================ -->
<script src="js/dropzone/dropzone.js"></script>
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