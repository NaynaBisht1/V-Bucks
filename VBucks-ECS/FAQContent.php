<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ's</title>
    <style>

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: sans-serif;
        }

        body div {
            margin: 4%;
            background-color: rgb(219 234 254);
            padding: 4%;
        }

        body h1 {
            text-align: center; /* Center align the heading */
            background-color: rgb(219 234 254);
            padding: 5%;
        }

        iframe.footer {
            width: 100%;
            height: 180px;
            border: none;
            bottom: 0;
        }

        h2, h4 {
            max-width: 800px; /* Limit width for better readability on larger screens */
            margin: 0 auto; /* Center elements horizontally */
        }

        @media screen and (max-width: 768px) {
            h2 {
                font-size: 1.2rem;
            }

            h4 {
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            h2 {
                font-size: 1rem;
            }

            h4 {
                font-size: 0.9rem;
            }
        }

        button {
            font-family: monospace;
            background-color: #f3f7fe;
            color: #3b82f6;
            border: none;
            border-radius: 8px;
            width: 150px;
            height: 45px;
            transition: .3s;
            margin: auto;
            display: block;
        }

        button:hover {
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
            color: #fff;
        }
       

    </style>
</head>
<body>
    <section>
        <iframe src="header.php" title="Header" width="100%" height="100"></iframe>
    </section>
    <p>   
        <h1>Frequently Asked Questions (FAQ)</h1>
    <div>
        <br><br>

        <h2>1. What is the offline payment interface?</h2> 
        <h4>The offline payment interface is a system designed to expedite the payment process using students' ID cards. By implementing this system with Raspberry Pi and RFID (Radio Frequency Identification) chips embedded in the ID cards, students can make payments without the need for an internet connection.</h4>

        <br>

        <h2>2. How does the offline payment interface work? </h2>
        <h4>The offline payment interface utilizes RFID technology to establish a connection between the ID card and the payment system. When a student swipes their ID card on the Raspberry Pi, the RFID chip embedded in the card sends a unique identification code to the system, which then verifies the student's details and deducts the payment from their account.</h4>
        
        <br>

        <h2>3. Why use Raspberry Pi and RFID chips for the payment system? </h2>
        <h4>Raspberry Pi is a cost-effective, small-sized computer that can handle various tasks efficiently. By integrating RFID chips into the ID cards, we can create a seamless payment experience for students, eliminating the need for physical cash or online transactions.</h4>
        
        <br>

        <h2>4. Is the offline payment interface secure? </h2>
        <h4>Yes, the offline payment interface is designed with security in mind. The RFID chips communicate using encrypted data, ensuring that the payment information remains safe and protected. Additionally, the system incorporates authentication mechanisms to prevent unauthorized access and fraudulent activities.</h4>
        
        <br>

        <h2>5. Can any ID card be used with the offline payment interface? </h2>
        <h4>To use the offline payment interface, students will require ID cards equipped with RFID chips provided by our institution. These specialized ID cards are programmed to work seamlessly with the Raspberry Pi-based payment system.</h4>
        
        <br>

        <h2>6. What are the benefits of the offline payment interface?</h2>
        <h4>The offline payment interface offers several benefits, including:
            •	Faster payment process, reducing waiting times and queues.
            •	Convenient and cashless transactions for students.
            •	Enhanced security measures to protect payment information.
            •	Simplified record-keeping for both students and the institution.
            •	Increased efficiency in financial transactions.
        </h4>

        <br>

        <h2>7. Will the offline payment interface replace other payment methods? </h2>
        <h4>The offline payment interface is designed to complement existing payment methods, providing an additional option for students. Students can still choose to use traditional payment methods such as cash or online transactions if they prefer.</h4>
        
        <br>

        <h2>8. How can I set up the offline payment interface? </h2>
        <h4>To set up the offline payment interface, you will need to install the necessary software on the Raspberry Pi, configure the RFID reader, and integrate it with your payment system. Detailed instructions and guidance will be provided to ensure a smooth setup process.</h4>
        
        <br>

        <h2>9. Can the offline payment interface be customized to fit our institution's requirements? </h2>
        <h4>Yes, the offline payment interface can be customized based on your institution's specific needs. Our team will work closely with you to understand your requirements and tailor the system accordingly, ensuring seamless integration with your existing infrastructure.</h4>

        <br>
        
        <h2>10. What support and maintenance options are available for the offline payment interface? </h2>
        <h4>We offer comprehensive support and maintenance packages to ensure the smooth operation of the offline payment interface. Our team will provide technical assistance, regular updates, and troubleshooting services to address any issues that may arise.
            If you have any further questions or need more information, please feel free to contact our support team.
        </h4>
    </div>
    <br><br>
   </p>
   <section>
        <iframe src="footer.php"
            title="Footer" class="footer">
        </iframe>
    </section>
   
    
</body>
</html>