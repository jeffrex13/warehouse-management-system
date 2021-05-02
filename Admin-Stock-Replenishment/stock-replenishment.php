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
    <link rel="stylesheet" href="../CSS/admin-stock-replenishment.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Stock Replenishment</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
        <a href="../Product-registration/product-registration.php">Product Registration</a>
        <a href="#">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="../Admin-Inventory/admin-inventory.php">Inventory</a>
        <a href="#">Sales and Purchase</a>
        <a href="../Admin-Search/admin-search.php">Search</a>
        <button class="dropdown-btn" style="color: #4B778D">Product Monitoring 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="stock-replenishment.php" style="color: #51c4d3">Stock Replenishment</a>
        </div>
        <a href="../Admin-Daily-Attendance/daily-attendance.php">Daily Attendance</a>
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
        <a href="stock-replenishment.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="stock-replenishment-h1">Stock Replenishment</h1>
            <table>
                <thead>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Hanabishi</td>
                        <td>Air-Condition</td>
                        <td>HTAC25S</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>Hanabishi</td>
                        <td>Air Circulator Fan</td>
                        <td>HACF88</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Whirlpool</td>
                        <td>Microwave Oven</td>
                        <td>MWX203BL</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>