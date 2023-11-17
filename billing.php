<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invoice</title>

    <style>

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .total-amount {
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
        }

        .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: Arial, sans-serif;
        margin-top: 20px; /* Added line */
        margin-bottom: 20px; /* Added line */
        }

        .invoice-box table{
            width: 100%;
            line-height: inherit;
            text-align: left; 
        }

        .invoice-box table td{
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2)
        {
            text-align: right;
        }

        .invoice-box table tr.top table td{
            padding-bottom: 20px;
        }

        .invoice-box table tr.information table td{
            padding-bottom: 40px;
        }
        
        .invoice-box table tr.heading td{
            background:#eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td{
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            text-align: left; /* Adjusted alignment for the new column */
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
            text-align: left; /* Adjusted alignment for the new column */
        }

        iframe.footer {
        width: 100%;
        height: 180px;
        border: none;
        margin-top: 20px; /* Added line */
        }


        @media only screen and(max-width: 600px){
            .invoice-box table tr.top table td{
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td{
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        *{
            margin: 0;
            padding: 0;
            
            box-sizing: border-box;
            font-family: sans-serif;
        }
        
        /* your existing code */
        .invoice-box {
            /* other styles */
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        @media only screen and (max-width: 600px) {
            .button-container {
                justify-content: center;
            }
        }
        
    </style>
</head>
<body>

    <iframe src="header.php" title="Header" width="100%" height="80"></iframe>
    
    <div class="invoice-box" >
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                <h1>
                                <?php
                                    echo $_SESSION["regnumber"];
                                ?>
                                </h1>
                            </td>
                            <td>
                                Invoice #: 13
                                <br>
                                Created: 27 October, 2021
                                <br>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                            <?php
                                if(isset($_SESSION["regnumber"])){
                                    echo "Bill To: ", $_SESSION["regnumber"];
                                }
                            ?>
                            <br>
                                Phone: +919857662058
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Payment Method
                </td>
                <td></td>
                <td></td>
            </tr>

            <tr class="details">
                <td>V-Bucks</td>
            </tr>

            <tr class="heading">
                <td>Food Item</td>
                <td>Quantity</td> <!-- New column -->
                <td>Price</td>
            </tr>
            
            <tbody id="orderDetails">
                <!-- This will be dynamically populated with selected items and prices -->
            </tbody>
            
        </table>

        <div id="totalAmount" class="total-amount">
            <!-- This will be dynamically populated with the total amount -->
        </div>
        
        <div class="button-container">
            <a href='bill.php'>
                <button>Pay</button>
            </a>
        </div>
                
    </div>
    

    <iframe src="footer.php" title="Footer" class="footer"></iframe>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Retrieve selected items and prices from the previous page
            var selectedItems = JSON.parse(localStorage.getItem("selectedItems")) || [];
            var totalAmount = localStorage.getItem("totalAmount") || "0";

            // Display selected items and prices
            displayOrderDetails(selectedItems);

            // Display total amount
            displayTotalAmount(totalAmount);
        });

        function displayOrderDetails(selectedItems) {
            var orderDetailsContainer = document.getElementById("orderDetails");

            selectedItems.forEach(function (item) {
                var row = document.createElement("tr");
                var nameCell = document.createElement("td");
                var quantityCell = document.createElement("td");
                var priceCell = document.createElement("td");

                nameCell.textContent = item.name;
                quantityCell.textContent = `${item.quantity}`;
                priceCell.textContent = `₹${item.price}`;

                row.appendChild(nameCell);
                row.appendChild(quantityCell);
                row.appendChild(priceCell);
                orderDetailsContainer.appendChild(row);
            });
        }

        function displayTotalAmount(totalAmount) {
            var totalAmountContainer = document.getElementById("totalAmount");
            totalAmountContainer.textContent = `Total Amount: ₹${totalAmount}`;
        }
    </script>


</body>
</html>