<?php
include('partials/header.php');
include "server/koneksi.php";

// Ambil semua data file dari database
$sql = "SELECT * FROM files";
$result = $koneksi->query($sql);


// -----pencarian dan pagination ------

// Cek apakah parameter pencarian telah dikirimkan
$searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';

// Cek apakah parameter tahun telah dikirimkan
$year = isset($_GET['year']) ? $_GET['year'] : '';

// Konfigurasi pagination
$resultsPerPage = 5; // Jumlah berkas per halaman
$current_page = isset($_GET['page']) ? $_GET['page'] : 1; // Halaman saat ini

// Query untuk mengambil jumlah total berkas dengan filter pencarian
$countQuery = "SELECT COUNT(*) AS total FROM files WHERE filename LIKE '%$searchKeyword%'";
if ($year != '') {
    $countQuery .= " AND year = '$year'";
}

$countResult = $koneksi->query($countQuery);
$row = $countResult->fetch_assoc();
$totalResults = $row['total'];

// Menghitung jumlah halaman
$totalPages = ceil($totalResults / $resultsPerPage);

// Batasan untuk query SQL
$startIndex = ($current_page - 1) * $resultsPerPage;

// Query untuk mengambil data berkas dengan batasan pagination dan filter pencarian
$sql = "SELECT * FROM files WHERE filename LIKE '%$searchKeyword%'";
if ($year != '') {
    $sql .= " AND year = '$year'";
}
$sql .= " LIMIT $startIndex, $resultsPerPage";

$result = $koneksi->query($sql);

// ----- end pencarian dan pagination ------

?>

<!-- navbar -->
<?php
include('partials/navbar.php');
?>
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Berkas File</h4>
                    <div class="add-product">
                        <a href="add-library-assets.php" class="btn-success">Add Berkas</a>
                    </div>
                    <div class="asset-inner">
                        <!-- form pencarian -->
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
                        <form action="" method="get">
                            <div class="form-group">
                                <label for="search">Nama Berkas:</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="Masukkan Nama Berkas">
                            </div>
                            <div class="form-group">
                                <label for="year">Tahun:</label>
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
                            <button type="submit" class="btn-primary">Cari</button>
                        </form>
                        <!-- end form pencarian -->
                        <?php if ($result->num_rows > 0) { ?>
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Berkas</th>
                                    <th>Tautan Download</th>
                                    <th>Tahun</th>
                                    <th>Setting</th>
                                </tr>
                                <?php
                                $counter = 1;
                                while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php echo $row['filename']; ?></td>
                                        <td><a href="<?php echo $row['filepath']; ?>">Download</a></td>
                                        <td><?php echo $row['year']; ?></td>
                                        <td>
                                            <a href="edit-library-assets.php?data=edit&id=<?php echo $row['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a href="delete-library-assets.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                    $counter++;
                                } ?>
                            </table>
                        <?php } else { ?>
                            <p>Tidak ada berkas yang diunggah.</p>
                        <?php } ?>
                    </div>
                    <!-- Pagination -->
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <?php if ($totalPages > 1) { ?>
                                <div>
                                    <?php if ($current_page > 1) { ?>
                                        <a href="?page=<?php echo $current_page - 1; ?>&search=<?php echo $searchKeyword; ?>">Prev</a>
                                    <?php } ?>

                                    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                        <a href="?page=<?php echo $i; ?>&search=<?php echo $searchKeyword; ?>"><?php echo $i; ?></a>
                                    <?php } ?>

                                    <?php if ($current_page < $totalPages) { ?>
                                        <a href="?page=<?php echo $current_page + 1; ?>&search=<?php echo $searchKeyword; ?>">Next</a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </ul>
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
<!-- counterup JS
		============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
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
<script src="js/morrisjs/raphael-min.js"></script>
<script src="js/morrisjs/morris.js"></script>
<script src="js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
		============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
		============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<script src="js/tawk-chat.js"></script>

<!-- data table JS
		============================================ -->
<script src="js/data-table/bootstrap-table.js"></script>
<script src="js/data-table/tableExport.js"></script>
<script src="js/data-table/data-table-active.js"></script>
<script src="js/data-table/bootstrap-table-editable.js"></script>
<script src="js/data-table/bootstrap-editable.js"></script>
<script src="js/data-table/bootstrap-table-resizable.js"></script>
<script src="js/data-table/colResizable-1.5.source.js"></script>
<script src="js/data-table/bootstrap-table-export.js"></script>
<!--  editable JS
		============================================ -->
<script src="js/editable/jquery.mockjax.js"></script>
<script src="js/editable/mock-active.js"></script>
<script src="js/editable/select2.js"></script>
<script src="js/editable/moment.min.js"></script>
<script src="js/editable/bootstrap-datetimepicker.js"></script>
<script src="js/editable/bootstrap-editable.js"></script>
<script src="js/editable/xediable-active.js"></script>
<!-- Chart JS
		============================================ -->
<script src="js/chart/jquery.peity.min.js"></script>
<script src="js/peity/peity-active.js"></script>
<!-- tab JS
		============================================ -->
<script src="js/tab.js"></script>
<!-- end table JS
		============================================ -->
</body>

</html>