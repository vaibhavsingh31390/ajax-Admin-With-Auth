<?php
include_once "ConfigDB.php";

    function loginBody(){
        ?>
        <form method = "POST">
            <div class="mb-3">
                <label for="usrInput" class="form-label">Username</label>
                <input type="text" class="form-control" id="usernameID" name="usrInput">
            </div>
            <div class="mb-3">
                <label for="passInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordID" name="passInput">
            </div>
            <button type="submit" name="log_In-Btn" class="btn btn-primary" id="btn_Login">Log In</button>
        </form>
<?php
    }



    function modalBody(){
        ?>
        <div class="container-fluid modal_Cont" id="modal">
            <div class="row modal_Row">
                <div class="col-md-12 d-flex justify-content-end modal_Col">
                    <div class="close_Btn" id="close_Modal">
                         <i class="fas fa-times"></i>
                    </div>
                </div>

                <div class="col-md-12 form_Col">
                    <div class="form">
                        <form id="form_add" method="post">
                            <div class="mb-3">
                                <label for="usrName" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="user-name" name="usrName">
                            </div>
                            <div class="mb-3">
                                <label for="usrEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="user-email" name="usrEmail">
                            </div>
                            <div class="mb-3">
                                <label for="usrPhone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="user-phone" name="usrPhone">
                            </div>
                            <div class="mb-3">
                                <label for="usrAddress" class="form-label">Address:</label>
                                <textarea class="form-control" placeholder="" id="text_area-Add" name="user_address" style="min-height:100px;max-height: 200px"></textarea>
                            </div>
                            <button type="submit" name="add_Data" class="btn btn-primary" id="btn_Login">ADD DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }


    function dashData($data,$editID){
        ?>
        <div class="container mb-1" data-id="<?php echo @$editID; ?>" >
            <div class="row" id="record_Content">
                <!-- <div class="col-md-1 data_col" style="visibility: hidden;"><?php #echo $data['ID']; ?></div> -->
                <div class="col-md-2 data_col"><?php echo $data['NAME']; ?></div>
                <div class="col-md-3 data_col"><?php echo $data['EMAIL']; ?></div>
                <div class="col-md-2 data_col"><?php echo $data['PHONE']; ?></div>
                <div class="col-md-2 data_col"><?php echo $data['ADDRESS']; ?></div>
        
                <div class="col-md-1 data_col">
                    <a id="edit_Btn" class="edit_Btn">
                        <button type="button" id="edit_Btn_Id" class="btn btn-primary Btn edit_Btn" data-id="<?php echo @$editID; ?>">EDIT</button>
                    </a> 
                </div>

                <div class="col-md-2 data_col">
                <a id="delete_Btn" class="edit_Btn">
                    <button type="button" class="btn btn-primary Btn delete_Btn" data-id="<?php echo @$editID; ?>">DELETE</button>
                </a> 
                </div>
            </div>
        </div>
        <?php
    }
    


  

    
?>