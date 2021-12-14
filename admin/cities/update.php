<?php 
    require_once("../../config.php"); 

    require_once(BLA.'inc/header.php');
    require_once(BL.'functions/validate.php');
?>

    <?php
        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $city_id = $_POST['city_id'];

            if(checkEmpty($name) && checkLess($name,3)){
                $row = getRow('cities','city_id',$city_id);

                if($row){
                    $sql = "UPDATE `cities` SET `city_name` = '$name' WHERE `city_id` = '$city_id' ";
                    $success_message = db_update($sql);
                    header("Refresh:2;url=".BURLA."cities");
                }
                else{
                    $error_message = "Plaese type correct data";
                }
            }
            else{
                $error_message = "Enter The City";
            }
            
            require BL.'functions/messages.php'; 
        }

    ?>


<?php  require_once(BLA.'inc/footer.php'); ?>