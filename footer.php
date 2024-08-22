<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
        }

        footer {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: absolute;
            width: 100%;
        }

        footer .container {
            max-width: 600px;
        }

        footer svg {
            width: 40px;
            height: 40px;
        }

        footer p {
            margin-top: 0;
        }

        footer ul {
            margin-top: 1rem;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        footer ul li {
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <div style="flex: 1;">
        <!-- Your main content here -->
    </div>
    <footer class="p-2 bg-white md:p-1 lg:p-2">
        <div class="container px-5 mx-auto flex items-center sm:flex-col">
            <a class="flex title-font font-medium items-center md:justify-center justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-900 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
              <span class="ml-3 text-xl ">V-Bucks</span>
            </a>
                <p class="my-0.5 text-gray-500 dark:text-gray-400">"Empowering Student Transactions: Revolutionizing Campus Commerce"
                </p>
            <ul class="flex justify-center items-center mb-1 text-gray-900 dark:text-white">
                <li>
                    <a href="AboutContent.php" target="_parent" class="mr-4 hover:underline md:mr-6">About</a>
                </li>
                <li>
                    <a href="FAQContent.php" target="_parent" class="mr-4 hover:underline md:mr-6">FAQs</a>
                </li>
                <li>
                    <a href="index.php" target="_parent" class="mr-4 hover:underline md:mr-6">Contact</a>
                </li>
                
                <li>
                    <a href="index.php" target="_parent" class="mr-4 hover:underline md:mr-6">Developers</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">V-Bucks</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>
</html>