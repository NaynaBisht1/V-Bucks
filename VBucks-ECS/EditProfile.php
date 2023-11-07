 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
       *{
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: large;
        }
        body b{
            min-height: 80vh;
            justify-content: center;
            align-items: center;
            color:  #153b72;
            background-color: rgb(219 234 254);
            width: 105%;
            padding: 10%;
            padding-right: 45px;
            border: #153b72;
        }
        form{
            min-height: 80vh;
            justify-content: center;
            align-items: center;
            display: grid;
            color:  #153b72;
            
        }
        h1{
            align-items: center;
            justify-content: center;
            display: flex;
            font-size:xx-large;
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
    <main>
        <section>
    <iframe src="header.php" title="Header" width="100%" height="100"></iframe>
        </section>
    <form action="">
        <h1>Edit Profile</h1>
        <br><br>
        
        
        <b>
        Name: 
        <input type="text" 
            placeholder="Enter your name here" .required/> 
            <br><br><br>
        Username: 
        <input type="text" 
            placeholder="Enter your username here" .required/> 
            <br><br><br>
        <fieldset>
            <legend>Gender</legend>
            <br>
            <p>
                Male <input type="radio" name="gender" id="male" required><br><br>Female <input type="radio" name="gender" id="female" required>
            </p>
            <br>
        </fieldset>
        <br>
        <p>Date Of Birth: <input type="date" name="DOB" id="DOB" required></p>
        <br>
        
        <!--<p>Address: <textarea name="address" id="address" cols="50" rows="8" required></textarea></p>
        <p>Pincode: <input type="number" name="pincode" id="pincode" required></p>-->
        Phone No.: 
        <input type="tel" 
            placeholder="Enter phone number" />
        <br><br><br>
        E-mail: 
        <input type="text" 
            placeholder="Enter your e-mail id here" .required/> 
        <br><br><br>
        <button>
            <a href="MyProfile.php">Save and Exit</a>
            <a href="http://" target="_blank" rel="noopener noreferrer"></a>
        </button>
    </form>
        </b> 
        <section>
            <iframe src="footer.php" title="Footer" class="footer"></iframe>
        </section>
    </main>
   
 </body>
 </html>