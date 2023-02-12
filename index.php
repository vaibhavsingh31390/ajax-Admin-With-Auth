<?php
include_once "ConfigDB.php";
include_once "Head.php";
include_once "function.php";


if(isset($_POST['log_In-Btn'])){
    extract($_POST);
    $query = "SELECT * FROM `credential` WHERE 1";
    $dataQuery = mysqli_query($dbConnect,$query);
    $data = mysqli_fetch_array($dataQuery);
    if(@$usrInput == "" || @$passInput == ""){
        $errorType = "Field's Cannot Be Left Empty.";
    }
    else{
        if(@$usrInput == $data['USERNAME'] && @$passInput == $data['PASSWORD']){
            echo "Works";
            $combiUser = $data['USERNAME'] . $data['PASSWORD'];
            $_SESSION[$private] = $combiUser;
            header("location:Dashboard.php");
        }
        elseif(@$usrInput != $data['USERNAME'] || @$passInput != $data['PASSWORD']){
            $errorType = "Username / Password Wrong.";
        }
    }

    
        

}
?>

<div class="container login_container">
    <div class="row justify-content-center align-content-center">
        <div class="col-md-6 login_col">
            <h1 class="heading-1 mb-4">Log In</h1>
            <?php
            loginBody()
            ?>
            <div class="error_box mt-3">
                <?php 
                if(empty(@$errorType)){

                }else{
                    echo "<ul> <li class='error'>" . @$errorType . "</li></ul>";
                } 
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</body>
</html>