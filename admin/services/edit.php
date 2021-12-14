<?php 

use Hamcrest\Type\IsNumeric;
    
    require_once("../../config.php"); 
    require_once(BLA.'inc/header.php');
    require_once(BL.'functions/validate.php');
?>

    <?php
        if(isset($_GET['id']) && is_numeric($_GET['id'])){

            $row = getRow('services','serv_id',$_GET['id']);

            if($row){
                $serv_id = $_GET['id'];
            }
            else{
                header("Location:".BURLA);
            }
        }
        else{
            header("Location:".BURLA);
        }
    
    ?>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit Service</h3>
            <form action="<?php echo BURLA.'services/update.php'?>" method="POST">
                <div class="form-group">
                    <label>Name of Service</label>
                    <input type="text" name="name" value="<?php echo $row['serv_name']; ?>" class="form-control">
                    <input type="hidden" name="serv_id" value="<?php echo $serv_id; ?>">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success">Save</button>
            </form>
</div>


<?php  require_once(BLA."inc/footer.php")  ?>