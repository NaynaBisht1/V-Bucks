<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Done</title>
    
    

    <style>

body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1 {
            color: #4caf50;
            margin-bottom: 10px;
        }

        img {
            margin-top: 20px;
            max-width: 20%;
            border-radius: 8px;
        }

        div {
            text-align: center;
        }
        iframe.footer {
        width: 100%;
        height: 180px;
        border: none;
        margin-top: 20px; /* Added line */
        }
        
    </style>

</head>
<body>

    <div style="flex: 1;">

        <iframe src="header.php" title="Header" width="100%" height="100"></iframe>

            <h1>Payment Done</h1>
            <img src="pics/success.png" alt="Success Image">
            <h2>Payment processed successfully.</h2>

            <button style="background-color: #4caf50; /* Green */
                border: none;
                color: white;
                padding: 5px 8px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 2px 1px;
                cursor: pointer;
                border-radius: 4px;"
        type="button" onclick="location.href='placeorder.php'">Home</button>

            

    </div>
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>
