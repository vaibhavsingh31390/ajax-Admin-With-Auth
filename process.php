<?php
include_once "ConfigDB.php";
include_once "function.php";


extract($_POST);
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])) {
    $queryAdd = "INSERT INTO `user_data` (`NAME`, `EMAIL`, `PHONE`, `ADDRESS`) VALUES ('$name', '$email','$phone','" . addslashes($address) . "')";
    $dQuery = mysqli_query($dbConnect, $queryAdd);
    $editID = mysqli_insert_id($dbConnect);
    $row = "<div class='container mb-1' data-id='$editID'>
            <div class='row' id='record_Content'>

            <div class='col-md-2 data_col'>".$_POST['name']."</div>
            <div class='col-md-3 data_col'>".$_POST['email']."</div>
            <div class='col-md-2 data_col'>".$_POST['phone']."</div>
            <div class='col-md-2 data_col'>".$_POST['address']."</div>
        
            <div class='col-md-1 data_col'>
                <a class='edit_Btn'>
                    <button type='button' id='edit_Btn_Id' class='btn btn-primary Btn' data-id='$editID'>EDIT</button>
                </a> 
            </div>
        
            <div class='col-md-2 data_col'>
            <a  class='edit_Btn' >
                <button type='button' class='btn btn-primary Btn delete_Btn' data-id='$editID'>DELETE</button>
            </a> 
            </div>
        </div>
        </div>";
    echo $row;
    // die();
}

if (isset($_POST['id'])) {
    $deleteID = $_POST['id'];
    echo $editID;
    $queryDelete = "DELETE FROM `user_data` WHERE `ID` = '$deleteID'";
    $dQuery = mysqli_query($dbConnect, $queryDelete);
}


    if (isset($_POST['delete_id'])) {
        $editID = $_POST['delete_id'];
        $queryShowId = "SELECT * FROM `user_data` WHERE `ID` = '$editID'";
        $queryEdit = mysqli_query($dbConnect, $queryShowId);

        if (mysqli_num_rows($queryEdit) > 0) {
            while ($editData = mysqli_fetch_array($queryEdit)) {


                $output = "<div class='form' id='edit-form-updated'>
                    <form id='form_update-form' method= 'post'>
                        <div class='mb-0'>
                            <input type='hidden' class='form-control' id='Uuser-ID' name='updateID' value='{$editData['ID']}'>
                        </div>
                        <div class='mb-3'>
                            <label for='usrName' class='form-label'>Name:</label>
                            <input type='text' class='form-control' id='Uuser-name' name='usrName' value='{$editData['NAME']}'>
                        </div>
                        <div class='mb-3'>
                            <label for='usrEmail' class='form-label'>Email:</label>
                            <input type='email' class='form-control' id='Uuser-email' name='usrEmail' value='{$editData['EMAIL']}'>
                        </div>
                        <div class='mb-3'>
                            <label for='usrPhone' class='form-label'>Phone:</label>
                            <input type='text' class='form-control' id='Uuser-phone' name='usrPhone' value='{$editData['PHONE']}'>
                        </div>
                        <div class='mb-3'>
                            <label for='usrAddress' class='form-label'>Address:</label>
                            <textarea class='form-control'   id='Utext_area-Add' name='user_address' style='min-height:100px;max-height: 200px'>{$editData['ADDRESS']}</textarea>
                        </div>
                        <div class='mb-3'>
                        <button type='submit' name='update_Data' class='btn btn-primary updateBtn' id='btn_Update'>UPDATE DATA</button>
                        </div>
                    </form>
                </div>";
            }
            echo $output;
        }
    }

    if (isset($_POST['nameNew']) && isset($_POST['emailNew']) && isset($_POST['phoneNew']) && isset($_POST['addressNew'])) {
        $editID = $_POST['ID'];
        $queryUpdate = "UPDATE `user_data` SET `NAME`='$nameNew',`EMAIL`='$emailNew',`PHONE`='$phoneNew',`ADDRESS`='" . addslashes($addressNew) . "' WHERE `ID` = '$editID'";
        $dQuery = mysqli_query($dbConnect, $queryUpdate);
        $row = "
        <div class='row' id='record_Content'>

        <div class='col-md-2 data_col'>" . $_POST['nameNew'] . "</div>
        <div class='col-md-3 data_col'>" . $_POST['emailNew'] . "</div>
        <div class='col-md-2 data_col'>" . $_POST['phoneNew'] . "</div>
        <div class='col-md-2 data_col'>" . $_POST['addressNew'] . "</div>
    
        <div class='col-md-1 data_col'>
            <a class='edit_Btn'>
                <button type='button' id='edit_Btn_Id' class='btn btn-primary Btn' data-id='$editID'>EDIT</button>
            </a> 
        </div>
    
        <div class='col-md-2 data_col'>
        <a  class='edit_Btn' >
            <button type='button' class='btn btn-primary Btn delete_Btn' data-id='$editID'>DELETE</button>
        </a> 
        </div>
    </div>
    ";
    echo $row;
    }
?>


