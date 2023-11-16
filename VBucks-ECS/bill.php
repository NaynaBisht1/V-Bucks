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

    <section class="bg-blue-50 min-h-screen flex items-center justify-center">
        <div class="bg-blue-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <div class="w-1/2 px-8">

                <h2 class="font-bold text-3xl text-blue-900">
                <?php
                    echo $_SESSION["regnumber"];
                ?>
                </h2>
                
                <form action="includes/payment.inc.php" method = "post" class="flex flex-col gap-2 mt-4">
                    
                    <p class="text-blue-900 text-lg mt-2">Registration Number</p>
                    <input class="p-2 rounded-xl border" type="text" name="regnum" placeholder="22BCE1111">
                    
                    <p class="text-blue-900 text-lg mt-2">Amount</p>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="text" name="amount">
                    </div>

                    <button class="bg-blue-900 rounded-xl text-white py-2 cursor-pointer hover:scale-105 duration-300 mt-4" type="submit" name = "submit" >Pay</button>

                </form>
                </div>
    </section>
  </div>
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>