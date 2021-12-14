<?php

    if(!isset($_SESSION['admin_name'])){

        header("Location:".BURLA."login.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo ASSETS;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS;?>css/styles.css">
    <title>Dashboard | Home Page</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BURLA; ?>"><img src="<?php echo ASSETS;?>images/logo.png" width="70" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo BURLA; ?>">Home</a>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Cities
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA."cities/add.php";?>">Add</a>
                <a class="dropdown-item" href="<?php echo BURLA."cities/index.php";?>">View All</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA."services/add.php";?>">Add</a>
                <a class="dropdown-item" href="<?php echo BURLA."services/index.php";?>">View All</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Orders
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA."orders";?>">View All</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Admins
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA.'admins/add.php' ?>">Add</a>
                <a class="dropdown-item" href="<?php echo BURLA.'admins/' ?>">View All</a>
            </div>
            </li>

            <li class="nav-item">
            <a class="nav-link"  href="<?php echo BURLA;?>/logout.php">Logout</a>
            </li>

        </div>
    </div>
    </nav>

    <div class="container-fluid mt-5 mb-5">
        <div class="row">