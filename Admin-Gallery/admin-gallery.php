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
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/admin-gallery.css">
        <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!--Dropdown-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Admin Gallery</title>
    </head>
    <body id="body">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
            <a href="../Product-registration/product-registration.php">Product Registration</a>
            <a href="../Admin-profile/admin-profile.php">Profile</a>
            <a href="admin-gallery.php" style="color: #4B778D">Gallery</a>
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
                <a href="../Admin-Report/Admin-Purchase-Report.php">Purchase Report</a>
            </div>
            <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
                <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
            </div>
            <a href="#">Help</a>
            <a href="admin-gallery.php?logout=<?php echo "$username"?>">Logout</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div class="container">
                <h1 class="AG-header">Gallery</h1>
                <label for="new-image" class="upload-label">Upload new image: </label>
                <input type="file" id="new-image" class="upload-input" accept="image/png, image/jpeg">
                <div class="slideshow-container fade">

                <!-- Full images with numbers and message Info -->
                <div class="Containers">
                <div class="MessageInfo">1 / 3</div>
                <img src="../Photos/blender.jpeg" style="width:100%">
                <div class="Info">Blender</div>
                </div>

                <div class="Containers">
                <div class="MessageInfo">2 / 3</div>
                <img src="../Photos/stove.jpeg" style="width:100%">
                <div class="Info">Stove</div>
                </div>

                <div class="Containers">
                <div class="MessageInfo">3 / 3</div>
                <img src="../Photos/washing-machine.jpeg" style="width:100%">
                <div class="Info">Washing Machine</div>
                </div>

                <!-- Back and forward buttons -->
                <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
                <a class="forward" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The circles/dots -->
                <div style="text-align:center">
                <span class="dots" onclick="currentSlide(1)"></span>
                <span class="dots" onclick="currentSlide(2)"></span>
                <span class="dots" onclick="currentSlide(3)"></span>
                </div> 
        </div>
        <script src="./index.js"></script>
    </body>
</html>