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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/product-registration.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Product Registration</title>
</head>
<body>
    <?php include('server.php') ?>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
        <a href="product-registration.php" style="color: #4B778D">Product Registration</a>
        <a href="#">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="#">Inventory</a>
        <a href="#">Sales and Purchase</a>
        <a href="#">Search</a>
        <button class="dropdown-btn">Product Monitoring 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="../Admin-Stock-Replenishment/stock-replenishment.php">Stock Replenishment</a>
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
        <a href="product-registration.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="prod-reg-container">
        <h2 class="prod-reg-header">Product Registration</h2>
        <form action="product-registration.php" method="POST">
            <div class="container2">
                <div class="grid1">
                    <label for="Prod-ID">Product ID</label>
                    <input id="Prod-ID" type="text" name="prodID" placeholder="Auto generated ID" disabled>

                    <label for="Brand-name">Brand name</label>
                    <input id="Brand-name" type="text" name="brandName" placeholder="Enter Brand Name" required>

                    <label for="Type">Type</label>
                    <input id="Type" type="text" name="type" placeholder="Enter Product Type" required>

                    <label for="Model">Model</label>
                    <input id="Model" type="text" name="model" placeholder="Enter Model" required>
                </div>
                <div class="grid2">
                    <label for="Color">Color</label>
                    <input id="Color" type="text" name="color" placeholder="Enter Color" required>

                    <label for="Quantity">Quantity</label>
                    <input id="Quantity" type="number" name="quantity" placeholder="Enter Quantity" min="0" required>

                    <label for="Price">Price</label>
                    <input id="Price" type="text" name="price" placeholder="Enter Price" required>
                </div>
            </div>
            <div id="grid3">
                    <input type="submit" class="submit-btn" name="submit-button" value="Submit">  
            </div>
        </form>
    </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>