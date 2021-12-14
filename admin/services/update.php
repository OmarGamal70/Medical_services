<?php 
    require_once("../../config.php");

    require_once(BLA.'inc/header.php');
    require_once(BL.'functions/validate.php');
?>

    <?php
        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $serv_id = $_POST['serv_id'];

            if(checkEmpty($name) && checkLess($name,3)){
                $row = getRow('services','serv_id',$serv_id);

                if($row){
                    $sql = "UPDATE `services` SET `serv_name` = '$name' WHERE `serv_id`= '$serv_id' ";
                    $success_message = db_update($sql);
                    header("Refresh:2;url=".BURLA."services");
                }
                else{
                    $error_message = "Plaese type correct data";
                }
            }
            else{
                $error_message = "Enter Valid servies";
            }

            require BL.'functions/messages.php';
        }

    ?>


<?php  require_once(BLA.'inc/footer.php'); ?>