# V-Bucks: Offline Payment System for Campus Transactions

## Overview
V-Bucks is an innovative offline payment system designed for campus transactions. It enables cashless transactions within the campus using virtual credits. Students and staff can make payments through a simple scan of their ID cards, eliminating the need for physical cash or cards.

## Features
- **Cashless Transactions**: Facilitates payments through virtual credits.
- **ID Card Integration**: Payments are made by scanning the campus ID cards.
- **User-Friendly Interface**: Simple and intuitive interface for both users and administrators.
- **Secure and Reliable**: Ensures secure transactions within the campus environment.
- **Offline Capabilities**: Operates without the need for continuous internet connectivity.

## How It Works
1. **User Registration**:
   - Users register their campus ID cards in the V-Bucks system.
   - Each user is allocated a certain amount of virtual credits.

2. **Making a Payment**:
   - Users select the items or services they wish to purchase.
   - The payment is processed by scanning the user's campus ID card.
   - The corresponding amount is deducted from the user’s virtual credit balance.

3. **Admin Panel**:
   - Administrators can manage user accounts, allocate credits, and monitor transactions.
   - Reports on transactions can be generated for auditing and analysis.

## How to Use V-Bucks

### Prerequisites
- Ensure you have a device with a compatible QR code scanner or NFC reader.
- The application should be set up on a campus server or a local network.

### Setting Up
1. **Clone the Repository**:
   - Clone the V-Bucks repository to your local machine using:
     ```bash
     git clone https://github.com/NaynaBisht/V-Bucks.git
     ```
2. **Database Setup**:
   - Import the provided SQL script to set up the database.
   - Configure the database connection settings in the application files.

3. **Run the Application**:
   - Deploy the application on a local server or campus server.
   - Start the application and ensure all services are running.

### User Guide

1. **For Users**:
   - Register your campus ID on the system to get your initial credits.
   - To make a payment, select the desired items or services, then scan your ID card at the point of sale.
   - Your virtual credits will be automatically deducted.

2. **For Administrators**:
   - Log in to the admin panel using your credentials.
   - Manage user registrations, allocate credits, and monitor transactions.
   - Generate reports for financial tracking and analysis.

## Future Enhancements
- **Mobile App Integration**: Developing a companion mobile app for easier access and management.
- **Enhanced Security Features**: Implementing additional layers of security for transaction validation.
- **Integration with Campus Systems**: Expanding V-Bucks to integrate with other campus services like the library and cafeteria.

