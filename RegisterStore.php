<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Register to Vbucks</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="passwordvisibility.js"></script>

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

                <h2 class="font-bold text-3xl text-blue-900">Register Your Store</h2>
                
                <form action="includes/signupstore.inc.php" method = "post" class="flex flex-col gap-2 mt-4">
                    <p class="text-blue-900 text-lg">Store Name</p>
                    <input class="p-2 rounded-xl border" type="text" name="fullname" placeholder="Store XYZ">
                    
                    <p class="text-blue-900 text-lg mt-2">Store ID</p>
                    <input class="p-2 rounded-xl border" type="text" name="regnum" placeholder="stor123">
                    
                    <p class="text-blue-900 text-lg mt-2">Create Password</p>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password" placeholder="*******">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye absolute top-1/3 right-3" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </div>

                    <button type="submit" name = "submit" class="bg-blue-900 rounded-xl text-white py-2 cursor-pointer hover:scale-105 duration-300 mt-4">Register</button>

                </form>
                <?php
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyinput"){
                            echo "<p>Fill in all the Fields!</p>";
                        }
                        else if($_GET["error"] == "regnumberexists"){
                            echo "<p>Store ID already exists.</p>";
                        }
                        else if($_GET["error"] == "stmtfail" || $_GET["error"] == "stmtfailed") {
                            echo "<p>Please try again.</p>";
                        }
                        else if($_GET["error"] == "none") {
                            echo "<p>You have registered successfully!</p>";
                        }
                    }
                ?>
            </div>
            <div class="w-1/2 ">
                <img class="rounded-xl block animated-image" 
                src="pics/2306.i402.024.F.m004.c9.Credit score flat background.jpg" alt="">
            </div>
        </div>
    </section>
  </div>

  <div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementsByName("password")[0];
            var eyeIcons = document.querySelectorAll(".bi-eye");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcons.forEach(function(eyeIcon) {
                    eyeIcon.classList.remove("bi-eye");
                    eyeIcon.classList.add("bi-eye-slash");
                });
            } else {
                passwordInput.type = "password";
                eyeIcons.forEach(function(eyeIcon) {
                    eyeIcon.classList.remove("bi-eye-slash");
                    eyeIcon.classList.add("bi-eye");
                });
            }
        }

        // Attach click event to the eye icon
        document.addEventListener("DOMContentLoaded", function() {
            var eyeIcons = document.querySelectorAll(".bi-eye");
            eyeIcons.forEach(function(eyeIcon) {
                eyeIcon.addEventListener("click", togglePasswordVisibility);
            });
        });
    </script>
  </div>
    
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>

