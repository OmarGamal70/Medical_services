<?php 
    require_once("../../config.php"); 

    require_once(BLA.'inc/header.php');
    require_once(BL.'functions/validate.php');
?>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        if(checkEmpty($name) && checkLess($name,3)){

            $sql = "INSERT INTO `services` (`serv_name`) VALUES ('$name')";
            $success_message = db_insert($sql);
        }
        else{
                $error_message = "Enter Valid Service";
        }   

        require BL.'functions/messages.php';
    }

?>


<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="form-group">
                    <label>Name of Service</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success">Save</button>
            </form>
</div>


<?php  require_once(BLA."inc/footer.php")  ?>