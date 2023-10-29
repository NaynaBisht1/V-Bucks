<?php
    if(isset($_POST["submit"])){

        $name = $_POST["fullname"];
        $regnum = $_POST["regnum"];
        $pwd = $_POST["password"];

        require_once 'dbhstore.inc.php';
        require_once 'functionstore.inc.php';

        if (emptyInputSignup($name, $regnum, $pwd) !== false){
            header("location: ../RegisterStore.html?error = emptyinput");
            exit();
        }
        if (uidExists($conn, $regnum) !== false){
            header("location: ../RegisterStore.html?error=regnumberexists");
        } 
    createUser($conn, $name, $regnum, $pwd);
    exit();
}