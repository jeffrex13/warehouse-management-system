<?php
    session_start(); 

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../index.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="./../CSS/registration.css">

    <!--Title Bar Icon-->
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">

    <!--Google Font CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Homepage</title>
</head>
<body>
    <?php include('server.php') ?>
    <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="admin-homepage.php" style="color: #4B778D">Admin Homepage</a>
            <a href="../Product-registration/product-registration.php">Product Registration</a>
            <a href="#">Profile</a>
            <a href="#">Gallery</a>
            <a href="#">Inventory</a>
            <a href="#">Sales and Purchase</a>
            <a href="#">Search</a>
            <button class="dropdown-btn">Product Monitoring 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Incoming Product</a>
                <a href="#">Outgoing Product</a>
                <a href="#">Stock Replenishment</a>
            </div>
            <a href="#">Daily Attendance</a>
            <button class="dropdown-btn">Report 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Audit Trail</a>
                <a href="#">Sales Report</a>
                <a href="#">Purchase Report</a>
            </div>
            <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Add</a>
                <a href="#">Edit</a>
                <a href="#">Backup</a>
                <a href="#">Restore</a>
            </div>
            <a href="#">Help</a>
            <a href="admin-homepage.php?logout=<?php echo "$username"?>">Logout</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div id="main1" class="registration-container">
                <h1 class="registration-h1">Registration</h1>
                <form action="admin-homepage.php" method="POST">
                    <div class="registration-grid">
                        <div class="grid-1">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="inputs" name="userName" placeholder="Enter your username" pattern="[A-z0-9]{8,}" title="Alphanumeric Characters Only!" autofocus required>
                            <label for="password">Password</label>
                            <input id="password" type="text" class="inputs" name="passWord" placeholder="Auto generated password" disabled>
                        
                            <label for="firstName">First Name</label>
                            <input id="firstName" type="text" class="inputs" name="firstName" placeholder="Enter your first name" pattern="[A-z\s]{1,}" title="Only Accept Letters Only!" required>
                            <label for="lastName">Last Name</label>
                            <input id="lastName" type="text" class="inputs" name="lastName" placeholder="Enter your last name" pattern="[A-z\s]{1,}" title="Only Accepts Characters Only!" required>
                    
                            <label for="middleName">Middle Name</label>
                            <input id="middleName" type="text" class="inputs" name="middleName" placeholder="Enter your middle name" pattern="[A-z\s]{1,}" title="Only Accepts Characters Only!" required>
                        
                            <label for="address">Address</label>
                            <input id="address" type="text" class="address" name="address" placeholder="Enter your address" required>
                        </div>
                        <div class="grid-2">
                            <label for="birthDate">Birth Date</label>
                            <input id="birthDate" type="date" class="inputs" name="birthDate" required>
                        
                            <label for="number">Contact Number</label>
                            <input id="number" type="text" class="inputs" name="contactnumber" placeholder="Enter your contact number" required>
                            <label for="email">Email</label>
                            <input id="email" type="email" class="inputs" name="email" placeholder="Enter your email" required>
                        
                            <label for="loa">Level Of Access</label>
                            <select name="loa" class="inputs" id="loa">
                                <option value="employee">Employee</option>
                                <option value="branch">Branch</option>
                            </select>
                            <label for="store">Store</label>
                            <input id="store" type="text" class="inputs" name="store" placeholder="Enter your store(optional)">
                        </div>
                        <label for="terms-and-condition">
                        <input id="terms-and-condition" type="checkbox">I have agree to <a href="#" class="terms">Terms and Condition</a></label>
                    </div>
                    <br/>
                    <div class="button-div">
                        <input type="submit" class="submit-button" name="submit-button" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    <script src="../index.js"></script>
</body>
</html>