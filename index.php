<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-Bucks</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .animated-image {
            animation: moveUpDown 1.5s infinite alternate;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .text-gray-600 {
            padding-top: 10px; /* Adjust as needed */
        }

        .button-container button {
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
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
        
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-col px-5 items-center justify-center">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-3 object-cover object-center rounded animated-image" alt="hero" src="pics/pngwing.com.png">
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Empowering Students Transactions
                    <br class="hidden lg:inline-block">Your Offline Campus Currency
                </h1>
                <div class="flex flex-wrap justify-center button-container mb-4"> <!-- Added button-container class here -->
                <a href="RegisterStore.php">
                    <button class="m-2 md:w-auto bg-blue-900 hover:bg-blue-300 text-white py-2 px-4 rounded">Register as Store</button>
                </a>                    
                <a href="RegisterStudent.php">
                    <button class="m-2 md:w-auto bg-blue-900 hover:bg-blue-300 text-white py-2 px-4 rounded">Register as Student</button>
                </a>        
                <a href="storelogin.php">
                    <button class="m-2 md:w-auto bg-blue-900 hover:bg-blue-300 text-white py-2 px-4 rounded">Login as Store</button>
                </a>
                <a href="studentlogin.php">    
                    <button class="m-2 md:w-auto bg-blue-900 hover:bg-blue-300 text-white py-2 px-4 rounded">Login as Student</button>
                </a>
                </div>
            </div>
            </div>
        </section>
    </div>

    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>
