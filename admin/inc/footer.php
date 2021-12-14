
        </div>
    </div>

    <!-- optional JS -->
    <!-- Jquery first , then pooper.js , then bootstrap JS -->
    <script src="<?php echo ASSETS;?>js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS;?>js/popper.min.js" ></script>
    <script src="<?php echo ASSETS;?>js/bootstrap.min.js" ></script>

    <script>

        $(".delete").click(function(){

            var item_id = $(this).attr("data-id");
            var table = $(this).attr("data-table");
            var field = $(this).attr("data-field");

            $.ajax({
                type:"GET",
                url:"<?php echo BURLA.'inc/delete.php';?>",
                data:{item_id:item_id,table:table,field:field},
                dataType:"JSON",
                success:function(data){
                    if(data.status == "200"){

                        alert("deleted success");
                    }
                }
            })

        })

    </script>
   
</body>
</html>