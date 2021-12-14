<?php

    require('../config.php');
    require(BL.'functions/validate.php');

    if(isset($_SESSION["admin_name"])){
        header("Location:".BURLA."index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo ASSETS.'css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo ASSETS.'css/styles.css'?>">

    <title>Dashboard | Login</title>
</head>
<body>

    <?php
    
        if(isset($_POST['submit'])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            if(checkEmpty($email) && checkEmpty($password)){

                if(validEmail($email)){

                    $check = getRow('admins','admin_email',$email);
                    $check_password = password_verify($password,$check['admin_password']);

                    if($check_password){
                        $_SESSION['admin_name'] = $check['admin_name'];
                        $_SESSION['admin_email'] = $check['admin_email'];
                        $_SESSION['admin_id'] = $check['admin_id'];

                        header("Location:".BURLA."index.php");
                    }
                    else{
                        $error_message = "password is Not correct" ;
                    }
                        
                }
                else{
                    $error_message = "Enter Valid Email" ;
                }
            }
            else{
                $error_message = "please fill all filds" ;
            }
        }
    
    
    
    ?>
    <div class="cont-login d-flex align-items-center justify-content-around bg-dark">
                
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" >
                <div class="row">
                    
                    <?php  require BL.'functions/messages.php'; ?>
                    <div class="col-sm-12 ">
                        <h3 class="text-center p-3 text-white">Login</h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        <div class="form-group">
                            <label class="text-white">Email </label>
                            <input type="email" name="email" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label class="text-white">Password </label>
                            <input type="password" name="password" class="form-control" >
                        </div>

                        <div class="form-group">
                        
                            <input type="submit" name="submit" class="form-control btn btn-primary"   >
                        </div>
                    </div>
                </div>
                
            </form>
    </div>
</body>
</html>