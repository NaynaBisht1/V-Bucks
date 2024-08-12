<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>
   <style>
       *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: large;
        }
        body b {
            min-height: 50vh; /* Adjusted min-height */
            justify-content: center;
            align-items: center;
            color: #153b72;
            background-color: rgb(219 234 254);
            width: 120%; /* Adjusted width */
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
       
        button {
            background-color: rgb(30 58 138);
            color: #fff;
            border: none;
            border-radius: 8px;
            width: 150px;
            height: 45px;
            transition: 0.3s;
            margin: auto;
            display: block;
            text-decoration: none; /* Remove underline from the anchor tag inside the button */
            text-align: center; /* Center text horizontally */
            line-height: 45px; /* Center text vertically */
        }
        button a {
            color: #fff; /* Set text color to white */
            text-decoration: none; /* Remove underline */
        }

        button:hover a {
            color: #fff; /* Text color on hover */
        }


        button:hover {
            background-color: #2563eb; /* Darker shade on hover */
            box-shadow: 0 0 0 5px #2563eb5f;
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
   
<body>
   <main>
    <iframe src="header.php" title="Header" width="100%" height="100"></iframe>
   
     
    <form action="">
        <h1>Store Profile</h1>
        <br><br>
        
        <b>
        Name: 
        <input class="name" type="text" 
            placeholder="eg:- Food-Street" .required/> 
            <br><br><br>
        Username: 
        <input type="text" 
            placeholder="FS#14" .required/> 
            <br>
            <br>
        
        <br>
        <!--DOB:
        <input type="text" 
            placeholder="15-December-2005" .required/> 
        <br><br>
        <br>-->
        Phone No.: 
        <input type="tel" 
            placeholder="1234567890" />
        <br><br><br>
        E-mail: 
        <input type="text" 
            placeholder="xyz@gmail.com" .required/> 
        <br><br><br>
        Cuisine: 
        <input type="text" 
            placeholder="North-Indian" .required/> 
            <br>
            <br>
            <br><br>
            <br><br>
            
            
        <button>
            <a href="EditStoreProfile.php">Edit Your Profile</a> 
            <a href="http://" target="_blank" rel="noopener noreferrer"></a>
            </button> 
        </b>  
    </form>
    </main>
    <iframe src="footer.php" title="Footer" class="footer"></iframe>
</body>
</html>