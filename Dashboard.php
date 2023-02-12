<?php
include_once "ConfigDB.php";
include_once "function.php";
if ($_SESSION['logSession'] == "") {
    header("location:login.php");
} elseif (@$_GET['action'] == "log_Out_User") {
    session_destroy();
    header("location:index.php");
}



include("Head.php");

modalBody();


echo '<div class="container mt-4 mb-2 demo">
        <div class="row">
            <div class="col-md-2 data_col-Head border">NAME</div>
            <div class="col-md-3 data_col-Head border">EMAIL</div>
            <div class="col-md-2 data_col-Head border">PHONE NO.</div>
            <div class="col-md-2 data_col-Head border">ADDRESS</div>
            <div class="col-md-3 data_col-Head border">ACTION</div>
        </div>
        </div>';
$queryShow = "SELECT * FROM `user_data`";
$query = mysqli_query($dbConnect, $queryShow);
if (mysqli_num_rows($query) > 0) {
    while ($queryData = mysqli_fetch_array($query)) {
        dashData($queryData, $queryData['ID']);
    }
}
include("process.php");
echo
'<div class="container-fluid modal_Cont" id="modal-edit">
    <div class="row modal_Row">
        <div class="col-md-12 d-flex justify-content-end modal_Col">
            <div class="close_Btn" id="close_Modal_edit">
                 <i class="fas fa-times"></i>
            </div>
        </div>

        <div class="col-md-12 form_Col" id="form-update">';

echo    '</div>
    </div>
</div>';

$resetQuery = mysqli_query($dbConnect, "ALTER TABLE user_data AUTO_INCREMENT = 1");

?>

<div class="test" id="test"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="app.js"></script>
</body>

</html>