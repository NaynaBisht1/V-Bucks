<?php
    if(isset($_POST["Register"])){

        $name = $_POST["fullname"];
        $regnum = $_POST["regnum"];
        $pwd = $_POST["password"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name, $regnum, $pwd) !== false){
            header("location : ../RegisterStudent.html?error = emptyinput");
            exit();

    }
    if (uidExists($conn, $regnum) !== false){
        header("location: ../RegisterStudent.html?error=regnumberexists");
    } 
    else{
        header("location : ../RegisterStudent.html");
        exit();
    }
    createUser($conn, $name, $regnum, $pwd);
}
