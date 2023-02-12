<?php
include_once "ConfigDB.php";
$title = "AJAX CRUD WITH PHP";
$style = "style.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
              <a class="navbar-brand" href="/Dashboard.php">AJAX CRUD | Powered By PHP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                
                  <?php
                    if (isset($_SESSION['logSession'])){
                      ?>
                        <li class="nav-item">
                          <button class="custom_link-Btn" id="modal_id">ADD DATA</button>   
                        </li>
                        <li class="nav-item">
                          <a class="nav-link custom_link-Btn" href="?action=log_Out_User">Log Out</a>
                        </li>
                    <?php  
                    }
                    else{
                      
                    }
                  ?>
                  
                </ul>
              </div>
            </div>
          </nav>
</header>



<body>