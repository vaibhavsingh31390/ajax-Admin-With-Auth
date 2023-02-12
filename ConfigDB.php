<?php
session_start();
$logStatus = 0;

$dbCred = ["localhost","root","root","ajax_project"];
$dbConnect = mysqli_connect($dbCred[0], $dbCred[1], $dbCred[2], $dbCred[3]);


// CHECK QUERY
    $private = "logSession";
    $queryCK = "SELECT * FROM `credential` WHERE 1";
    $dataQueryCK = mysqli_query($dbConnect,$queryCK);
    $dataCK = mysqli_fetch_array($dataQueryCK);
    $combiDATA = $dataCK['USERNAME'] . $dataCK['PASSWORD'];
?>

