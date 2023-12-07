<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Payment</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .animated-image {
            animation: moveUpDown 2s infinite alternate; /* Adjust the animation duration as needed */
        }
    
        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(10px); /* Adjust the distance to move in the y-axis */
            }
        }
        #rfidNumber {
            height: 40px;
            font-size: 16px;
            width: 120%;
            max-width: 400px;
        }
        
        iframe.footer {
        width: 100%;    
        height: 180px;
        border: none;
        margin-top: 200px; /* Added line */
        }
        
    </style>
</head>
<body>

  
  <div style="flex: 1;">

    <iframe src="header.php" title="Header" width="100%" height="100"></iframe>

    <section class="bg-blue-50 min-h-screen flex items-center justify-center">
        <div class="bg-blue-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <div class="w-1/2 px-8">

                <h2 class="font-bold text-3xl text-blue-900">
                <?php
                    echo $_SESSION["regnumber"];
                ?>
                </h2>
                <?php  
                    //Connect to database
                    require 'includes/dbh.inc.php';
                    if (isset($_GET['card_uid']) && isset($_GET['device_token'])) {
                        $card_uid = $_GET['card_uid'];
                        $device_uid = $_GET['device_token'];
                        $sql = "SELECT * FROM users WHERE card_uid=?";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_Select_card";
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($result, "s", $card_uid);
                            mysqli_stmt_execute($result);
                            $resultl = mysqli_stmt_get_result($result);
                            if($row = mysqli_fetch_assoc($resultl)){
                                $_SESSION["registration"] = $row["card_uid"];
                            } else {
                                echo "card_uid not found";
                                exit();
                            }
                        }
                    }
                ?>

                
                <form action="includes/payment.inc.php" method = "post" class="flex flex-col gap-2 mt-4">
                    
                    <p class="text-blue-900 text-lg mt-2">Registration Number</p>
                    <input class="p-2 rounded-xl border" type="text" name="regnum" value="<?php echo isset($_SESSION['registration']) ? $_SESSION['registration'] : ''; ?>">

                    <p class="text-blue-900 text-lg mt-2">Amount</p>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="text" name="amount" value="<?php echo isset($_SESSION['amount']) ? $_SESSION['amount'] : ''; ?>">
                    </div>

                    <button class="bg-blue-900 rounded-xl text-white py-2 cursor-pointer hover:scale-105 duration-300 mt-4" 
        type="button" onclick="executePythonScript()">RFID</button>
    <input id="rfidNumber" class="p-2 rounded-xl border w-full" type="text" readonly>
    <script>
        function executePythonScript() {
            // Set a static value for demonstration purposes
            const successValue = 'Success';
            document.getElementById('rfidNumber').value = successValue;
        }
    </script>

                    <button class="bg-blue-900 rounded-xl text-white py-2 cursor-pointer hover:scale-105 duration-300 mt-4" type="submit" name = "submit" >Pay</button>

                </form>
                <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "stmtfail"){
                            echo "<p>Please try again.</p>";
                        }
                        else if($_GET["error"] == "stmtexecfail"){
                            echo "<p>Technical failure.</p>";
                        }
                        else if($_GET["error"] == "fetchfail" || $_GET["error"] == "stmtfailed") {
                            echo "<p>Connection to database failed.</p>";
                        }
                        else if($_GET["error"] == "stmt2fail"){
                            echo "<p>Please try again.</p>";
                        }
                        else if($_GET["error"] == "stmt2execfail"){
                            echo "<p>Technical failure.</p>";
                        }
                        else if($_GET["error"] == "feth2fail"){
                            echo "<p>Connection to database failed.</p>";
                        }
                        else if($_GET["error"] == "insufficientbalance") {
                            echo "<p>You do not have required funds!</p>";
                        }
                    }
                ?>
                </div>
    </section>
  </div>
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>
