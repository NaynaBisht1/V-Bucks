<?php
    function emptyInputSignup($name, $regnum, $pwd, $phno){
        $result = true;
        if(empty($name) || empty($regnum) || empty($pwd) || empty($phno)){
            $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn ,$regnum){
    $sql = "SELECT * FROM users WHERE usersId = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../RegisterStudent.html?error=stmtfail");
        exit();
    }
    mysqli_stmt_bind_param($stmt, 's', $regnum);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    } else{
        $result = false;
        return $result;
    }
}
function createUser($conn, $name, $regnum, $pwd, $phno){
    $sql = "INSERT INTO users (usersName, usersRegnum, usersPwd, usersNo) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../RegisterStudent.html?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $regnum, $hashedPwd, $phno);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../RegisterStudent.html?error=none");
    exit();
}