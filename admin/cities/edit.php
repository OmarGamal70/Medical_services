<?php

use Hamcrest\Type\IsNumeric;

require_once("../../config.php"); 
    require_once(BLA.'inc/header.php');
?>
    <?php
        if(isset($_GET['id']) && is_numeric($_GET['id'])){

            $row = getRow('cities','city_id',$_GET['id']);

            if($row){
                
                $city_id = $_GET['id'];
            }
            else{
                header("Location:".BURLA);
            }
        }
        else
        {
            header("Location:".BURLA);
        }
    ?>

    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
            <form action="<?php echo BURLA.'cities/update.php';?>" method="POST">
                <div class="form-group">
                    <label>Name of City</label>
                    <input type="text" name="name" value="<?php echo $row['city_name'];?>" class="form-control">
                    <input type="hidden" name="city_id" value="<?php echo $city_id ;?>">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success">Save</button>
            </form>
    </div>

<?php  require_once(BLA.'inc/footer.php'); ?>