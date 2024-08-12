<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
        <h1>About V-Bucks</h1>
    <div>
        <br><br>

        <h2>Title: Streamlined Offline Payment Process</h2> 
        <br>
        <h4>In an increasingly digital world, where online transactions have become the norm, we understand that not everyone has access to the internet or digital payment methods. To cater to the needs of our diverse community, we're excited to introduce an innovative offline payment interface designed to expedite the payment process using students' ID cards.</h4>
        <br><br>
        <h2>Our Vision</h2>
        <br>
        <h4>Our vision is simple yet powerful: to make payments quick and convenient for all, regardless of their digital capabilities. We believe in inclusivity and efficiency, and we're striving to bridge the gap between digital and offline payment methods. To achieve this vision, we're implementing a solution that utilizes cutting-edge technology.</h4>
        <br><br>
        <h2>Raspberry Pi and RFID Chips</h2>
        <br>
        <h4>Raspberry Pi is a cost-effective, small-sized computer that can handle various tasks efficiently. By integrating RFID chips into the ID cards, we can create a seamless payment experience for students, eliminating the need for physical cash or online transactions.</h4>
        <br><br>
         <h2>How It Works</h2>
        <br>
        <h4>1.	RFID Technology: Each student's ID card is equipped with an RFID chip, which stores unique identification data. This chip communicates with RFID readers installed in various payment locations on campus.
            2.	Raspberry Pi as the Brain: The Raspberry Pi serves as the central hub that connects the RFID readers to our payment processing system. It collects transaction data and securely sends it to our servers.
            3.	Secure and Efficient Transactions: When a student swipes their ID card at a payment terminal, the RFID reader scans the card's RFID chip, and the data is transmitted to the Raspberry Pi. The Raspberry Pi then encrypts the information and sends it to our secure servers for payment processing.
            4.	Instant Confirmation: Once the payment is processed, you receive an instant confirmation, making the entire process not only convenient but also transparent and reliable.
        </h4>
        <br><br>
        <h2>Benefits of our Offline Payment Interface</h2>
        <br>
        <h4>•	Accessibility: Students who may not have access to online payment methods can still make payments conveniently using their ID cards.
            •	Speed: The process is lightning fast, saving you precious time in your busy schedule.
            •	Security: Your payment information is encrypted and protected throughout the transaction, ensuring your financial data remains secure.
            •	Reliability: Our system is designed for robust performance, reducing the risk of transaction errors and delays.
            •	Efficiency: Say goodbye to the hassle of cash transactions and paper receipts – our offline payment system streamlines the entire process.
        </h4>
        <br><br>
        <h2>Stay Connected, Even Offline</h2>
        <br>
        <h4>Our commitment to enhancing your experience goes beyond technology. We want to ensure that every student can seamlessly access the services they need, even when offline. With our innovative use of Raspberry Pi and RFID technology, we're not just simplifying payments; we're revolutionizing the way you interact with campus services.
            Join us in embracing a future where payment processes are universally accessible, efficient, and secure. Welcome to the future of campus transactions with our groundbreaking offline payment interface.
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