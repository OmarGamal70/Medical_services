<?php 

    session_start();

    define("BURL","http://localhost/medicalServ/");
    define("BURLA","http://localhost/medicalServ/admin/");
    define("ASSETS","http://localhost/medicalServ/assets/");

    define("BL",__DIR__.'/');
    define("BLA",__DIR__.'/admin/');

    //connect to database
    require_once(BL."functions/db.php");

?>