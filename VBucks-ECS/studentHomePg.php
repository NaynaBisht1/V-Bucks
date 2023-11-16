<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script:wght@600&family=Teko:wght@300&display=swap" rel="stylesheet">

    
    <style>
        /* body{
            background-image: url('CASHLESS PAYMENT.jpg');
            background-size:750px 200px;
            background-position: bottom;
            background-repeat: no-repeat;
        } */
        h2{ font-size: x-large;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 0%;
            margin-top: 20%;
            margin: 20%;
            margin-block: 10px 20px;
            writing-mode: horizontal-tb;
            background-color: rgb(219 234 254);
            padding: 40px;
            padding-left: 145px;
            text-align: center;
        }
        h2 a:hover {
            color:  #3f6499;

        }
        a{
           
           font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
           text-decoration: none;
           color:  #153b72;
           padding-right: 50px;
           padding-top: 10px;
           text-align: initial; 
           
        }
        *{
            margin: 0;
            padding: 0;
            
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        iframe.footer {
            width: 100%;
            height: 180px; /* Adjust the height of the iframe as needed */
            border: none; /* Remove the border to avoid extra space */
            bottom: 0;
        }
        @media screen and (max-width: 768px) {
            h2 {
                font-size: 1.2rem;
            }
        }

        @media screen and (max-width: 480px) {
            h2 {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <iframe src="header.php" title="Header" width="100%" height="100"></iframe>

    <main>
        <section>
            <h2>
                <a href="UpdateVBucks.html" class="font-bold text-3xl text-blue-900">Update V-Bucks</a>
                <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            </h2>
           
        </section>

        <section>
            <h2><a class="font-bold text-3xl text-blue-900">
            <?php
                if(isset($_SESSION["regnumber"])){
                    echo "Available V-Bucks: ", $_SESSION["bucks"];
                    }
            ?>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            </h2>
        </section>

        <section>
            <h2>
                <a href="PaymentHistory.html" class="font-bold text-3xl text-blue-900">Payment History</a>
                <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            </h2>
           
        </section>
    </main>
    
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>
