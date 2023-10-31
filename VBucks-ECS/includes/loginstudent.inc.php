<?php
    if(isset($_POST["submit"])){
        $regnum = $_POST["regnum"];
        $pwd = $_POST["password"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($regnum, $pwd) !== false){
            header("location: ../studentlogin.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $regnum, $pwd);
    }
    