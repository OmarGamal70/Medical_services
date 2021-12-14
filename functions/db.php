<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medical_serv";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){

        die("Erorr in connection: ". mysqli_connect_error());
    }


    function db_insert($sql){

        global $conn;

        $result = mysqli_query($conn,$sql);

        if($result){
            return "Added Success";
        }
        return false;
    }


    function db_update($sql){

        global $conn;

        $result = mysqli_query($conn,$sql);

        if($result){
            return "Updated Success";
        }
        return false;
    }


    function getRow($table,$field,$value){

        global $conn;
        $sql = "SELECT * FROM `$table` WHERE `$field` = '$value'";
        $result = mysqli_query($conn,$sql);

        if($result){
            if(mysqli_num_rows($result)>0){
                
                $row = mysqli_fetch_array($result);
                return $row;
            }
            
        }
        return false;
    }

    function getRows($table){

        global $conn;
        $sql = "SELECT * FROM `$table`";
        $result = mysqli_query($conn,$sql);

        if($result){
            if(mysqli_num_rows($result) > 0){

                while($row=mysqli_fetch_array($result)){
                    $rows[]=$row;
                }
            }
        }
        return $rows;
    }


    function deleteRow($sql){
        global $conn;
        $result = mysqli_query($conn,$sql);
        if($result){
            
            return "Deleted Success";
        }
        return false;
    }

    function count_table($table){
        
        global $conn;
        $sql = "SELECT * FROM `$table`";
        
        $result = mysqli_query($conn,$sql);
        $x = 0;
        if($result){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $x++;
                }
            }
            else{
                return "0";
            }
        }
        return $x;
    }



?>