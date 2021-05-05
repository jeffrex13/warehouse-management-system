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
    <link rel="stylesheet" href="../CSS/admin-profile.css">
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
        <a href="./admin-profile.php" style="color: #4B778D">Profile</a>
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
            <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
            <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
        </div>
        <a href="#">Help</a>
        <a href="admin-profile.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="profile-header">Profile</h1>
            <h3 class="name">John Doe</h3>
            <div class="div-info">
                <p class="info" style="">Level of Access: </p>
                <p class="info1">Admin</p>
            </div>
            <div class="div-info">
                <p class="info">Phone Number: </p>
                <p class="info1">09999999999</p>
            </div>
            <div class="div-info">
                <p class="info">Email Address: </p>
                <p class="info1">user@gmail.com</p>
            </div>
            <div class="div-info">
                <p class="info">Address: </p>
                <p class="info1">Antipolo</p>
            </div>
            <div class="div-info">
                <p class="info">Birthdate: </p>
                <p class="info1">January 1, 1991</p>
            </div>
            <div class="div-info">
                <p class="info">Store/Branch: </p>
                <p class="info1">Marikina Branch</p>
            </div>
        </div>   
    </div>
    <script src="../index.js"></script>
</body>

</html>