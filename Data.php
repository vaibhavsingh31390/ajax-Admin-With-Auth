<?php 
include_once "ConfigDB.php";
include_once "function.php";

   
    ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-1 data_col-Head border">ID</div>
                <div class="col-md-2 data_col-Head border">NAME</div>
                <div class="col-md-2 data_col-Head border">EMAIL</div>
                <div class="col-md-2 data_col-Head border">PHONE NO.</div>
                <div class="col-md-2 data_col-Head border">ADDRESS</div>
                <div class="col-md-3 data_col-Head border">ACTION</div>
            </div>
        </div>
    <?php


    $queryShow = "SELECT * FROM `user_data` WHERE 1";
    $query = mysqli_query($dbConnect,$queryShow);
    while($queryData= mysqli_fetch_array($query)){
        dashData($queryData);
    }


?>