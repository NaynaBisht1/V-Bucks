<?php
    if(isset($_POST["submit"])){

        $name = $_POST["fullname"];
        $regnum = $_POST["regnum"];
        $pwd = $_POST["password"];
        $phno = $_POST["phno"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($name, $regnum, $pwd, $phno) !== false){
            header("location: ../RegisterStudent.html?error = emptyinput");
            exit();
        }
        if (uidExists($conn, $regnum) !== false){
            header("location: ../RegisterStudent.html?error=regnumberexists");
        } 
    createUser($conn, $name, $regnum, $pwd, $phno);
    exit();
}
