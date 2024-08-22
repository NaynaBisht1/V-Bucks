<?php
    session_start();
    if(isset($_POST["submit"])){

        $regnum = $_POST["regnum"];
        $amt = $_POST["amount"];

        require_once 'dbh.inc.php';

        $sql = "SELECT * FROM users WHERE usersRegnum = ?;";
        
        $stmt = mysqli_stmt_init($conn);
        

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../bill.php?error=stmtfail");
            exit();
        }
        

        mysqli_stmt_bind_param($stmt, 's', $regnum);
        

        if (!mysqli_stmt_execute($stmt)) {
            header("location: ../bill.php?error=stmtexecfail");
            exit();
        }
        

        // Get the result set
        $result = mysqli_stmt_get_result($stmt);
        

        // Check if the result is valid
        if ($result === false) {
            header("location: ../bill.php?error=fetchfail");
            exit();
        }
        

        // Fetch the data
        $resultdata = mysqli_fetch_assoc($result);
        

        if ($resultdata["bucks"] >= $amt) {
            $pending = $resultdata["bucks"] - $amt;
            

            // Use a different variable for the second statement
            $updateSql = "UPDATE users SET bucks = ? WHERE usersRegnum = ?;";
            
            $updateStmt = mysqli_stmt_init($conn);
            

            if (!mysqli_stmt_prepare($updateStmt, $updateSql)) {
                header("location: ../bill.php?error=stmtfail");
            exit();
            }
            

            mysqli_stmt_bind_param($updateStmt, 'ss', $pending, $regnum);
            

            if (!mysqli_stmt_execute($updateStmt)) {
                header("location: ../bill.php?error=stmtexecfail");
                exit();
            }
            

            mysqli_stmt_close($updateStmt);
            

            $sql2 = "SELECT * FROM stores WHERE storesName = ?;";
            $stmt2 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt2, $sql2)) {
                header("location: ../bill.php?error=stmt2fail");
                exit();
            }
            mysqli_stmt_bind_param($stmt2, 's', $_SESSION["regnumber"]);
            if (!mysqli_stmt_execute($stmt2)) {
                header("location: ../bill.php?error=stmt2execfail");
                exit();
            }
            $result2 = mysqli_stmt_get_result($stmt2);
            if ($result2 === false) {
                header("location: ../bill.php?error=fetch2fail");
                exit();
            }
            $resultdata2 = mysqli_fetch_assoc($result2);
            if ($resultdata["bucks"] >= $amt) {
                $addition = $resultdata2["bucks"] + $amt;
                $updateSql2 = "UPDATE stores SET bucks = ? WHERE storesName = ?;";
                $updateStmt2 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($updateStmt2, $updateSql2)) {
                    header("location: ../bill.php?error=stmt2fail");
                exit();
                }
                mysqli_stmt_bind_param($updateStmt2, 'ss', $addition, $_SESSION["regnumber"]);
                if (!mysqli_stmt_execute($updateStmt2)) {
                    header("location: ../bill.php?error=stmtexecfail2");
                    exit();
                }
                mysqli_stmt_close($updateStmt2);

            header('location: ../payment.php');
            exit();
        } else {
            header('location: ../bill.php?error=insufficientbalance');
            exit();
        }


    }
}
