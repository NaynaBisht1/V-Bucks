<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
        }

        header .title-font {
            font-size: 24px;
            color: hwb(0 0% 100%);
        }

        header nav a {
            margin-right: 15px;
            color: #000306;
        }

        header a:hover {
            color: #000306;
        }
    </style>
</head>
<body>

    <header class="text-gray-600">
        <div class="title-font flex items-center ">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg style="width: 40px; height: 40px;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-900 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">V-Bucks</span>
        </a>
        </div>
        <nav class="flex">
            <a href="index.php" target="_parent" class="hover:text-gray-900">Home</a>
            <a href="MyProfile.php" target="_parent" class="ml-5 hover:text-gray-900">Student Profile</a>
            <a href="StoreProfile.php" target="_parent" class="ml-5 hover:text-gray-900">Store Profile</a>
            <a href="AboutContent.php" target="_parent" class="ml-5 hover:text-gray-900">About</a>
            <a href="index.php" target="_parent" class="ml-5 hover:text-gray-900">Contact</a>
            <?php
                if(isset($_SESSION["regnumber"])){
                    echo "<a href='studentlogin.php' target='_parent' class='ml-5 hover:text-gray-900'>LogOut</a>";
                }
            ?>
        </nav>
    </header>


    <!-- <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-900 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">V-Bucks</span>
          </a>
          <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900">Home</a>
                <a class="mr-5 hover:text-gray-900">Profile</a>
                <a class="mr-5 hover:text-gray-900">About</a>
                <a class="mr-5 hover:text-gray-900">Contact</a>
          </nav>
        </div>
    </header> -->
</body>
</html>