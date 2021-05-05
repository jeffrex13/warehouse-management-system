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
    <link rel="stylesheet" href="../CSS/admin-edit.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Dropdown-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body id="body">
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
        <a href="../Product-registration/product-registration.php">Product Registration</a>
        <a href="./admin-profile.php">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="../Admin-Inventory/admin-inventory.php">Inventory</a>
        <a href="../Admin-Sales-and-Purchase/sales-and-purchase.php">Sales and Purchase</a>
        <a href="../Admin-Search/admin-search.php">Search</a>
        <button class="dropdown-btn">Product Monitoring
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="../Admin-Stock-Replenishment/stock-replenishment.php">Stock Replenishment</a>
        </div>
        <a href="../Admin-Daily-Attendance/daily-attendance.php">Daily Attendance</a>
        <button class="dropdown-btn">Report
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Report/Admin-audit-trail.php">Audit Trail</a>
            <a href="../Admin-Report/Admin-Sales-report.php">Sales Report</a>
            <a href="#">Purchase Report</a>
        </div>
        <button class="dropdown-btn">Maintenance 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="./admin-edit.php" style="color: #51c4d3">Edit</a>
            <a href="#">Backup</a>
            <a href="#">Restore</a>
        </div>
        <a href="#">Help</a>
        <a href="admin-edit.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="edit-header">Edit</h1>
            <form action="" method="">
                <h3>Personal Information</h3>
                <div class="info">
                    <label class="info-items" for="email-address">Email Address</label>
                    <input type="email" name="email" id="email-address">
                </div>
                <div class="info">
                    <label class="info-items" for="edit-password">Password</label>
                    <input type="password" name="password" id="edit-password">
                </div>
                <div class="info">
                    <label class="info-items" for="confirm-password">Confirm Password</label>
                    <input type="password" name="conf-password" id="confirm-password">
                </div>
                <div class="info">
                    <label class="info-items" for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="info">
                    <label class="info-items" for="contact-number">Contact Number</label>
                    <input type="text" name="contact-number" id="contact-number">
                </div>
                <input type="submit" value="Edit">
            </form>
            <hr>
            <form action="" method="">
                <h3>Product Information</h3>
                <div class="info">
                    <label class="info-items" for="brand-name">Brand name</label>
                    <input type="text" name="brand" id="brand-name">
                </div>
                <div class="info">
                    <label class="info-items" for="model">Model</label>
                    <input type="text" name="model" id="model">
                </div>
                <div class="info">
                    <label class="info-items" for="type">Type</label>
                    <input type="text" name="" id="">
                </div>
                <input type="submit" value="Edit">
            </form>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>