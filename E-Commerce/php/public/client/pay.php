<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/client/pay.css" type="text/css">
</head>

<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.php" style="color: black;">NextStyle</a></label>
        </div>
        <div>
            <ul style="display: flex; flex-direction: row; gap: 50px;">
                <li><a href="#" class="list">Catogory</a></li>
                <li><a href="#" class="list">New Arrival</a></li>
                <li><a href="#" class="list">Popular</a></li>
                <li><a href="#" class="list">Contact</a></li>
            </ul>
        </div>
        <div style="display: flex; flex-direction: row;">
            <ul style="display: flex; flex-direction: row; gap: 20px;">
                <li><a href="#"><img src="../img/shopping-cart.png" alt="cart icon" width="24px" height="24px" /></a>
                </li>
                <li><a href="#"><img src="../img/magnifier.png" alt="magnifier" width="24px" height="24px" /></a></li>
                <li><a href="#"><img src="../img/email.png" alt="email" width="24px" height="24px" /></a></li>
                <li><a href="profile.php"><img src="../img/user.png" alt="user" width="24px" height="24px" /></a></li>
                <a href="../client/login.php">
                    <li><button class="button-59" role="button">LogOut</button></li>
                </a>
            </ul>
        </div>

    </nav>

    <div class="checkout-container">
        <h2>Checkout</h2>

        <!-- Payment Method Selection -->
        <div class="payment-method">
            <h3>Select Payment Method:</h3>
            <label><input type="radio" name="payment" value="cod" checked> Cash on Delivery</label>
            <label><input type="radio" name="payment" value="card"> Card Option</label>
        </div>

        <!-- Card Details Form (Initially Hidden) -->
        <div class="card-details" style="display: none;">
            <h3>Enter Card Details:</h3>
            <div class="form-group">
                <label for="card-holder">Card Holder Name:</label>
                <input type="text" id="card-holder" placeholder="Enter card holder name">
            </div>
            <div class="form-group">
                <label for="card-number">Card Number:</label>
                <input type="text" id="card-number" placeholder="Enter card number">
            </div>
            <div class="form-group">
                <label for="expiry-date">Expiry Date:</label>
                <input type="text" id="expiry-date" placeholder="MM/YY">
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" placeholder="CVV">
            </div>
        </div>

        <!-- Total Amount -->
        <div class="total-amount">
            <h3>Total Amount:</h3>
            <p>$100.00</p> <!-- Example total amount, replace with actual total -->
        </div>

        <!-- Pay Button -->
        <button id="pay-button">Pay Now</button>
    </div>

    <script src="../js/client/pay.js"></script>
</body>

</html>
