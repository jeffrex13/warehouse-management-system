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
    <link rel="stylesheet" href="../CSS/admin-search.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Dropdown-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Search Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Search</title>
</head>

<body id="body">
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Admin-Homepage/admin-homepage.php">Admin Homepage</a>
        <a href="../Product-registration/product-registration.php">Product Registration</a>
        <a href="../Admin-profile/admin-profile.php">Profile</a>
        <a href="../Admin-Gallery/admin-gallery.php">Gallery</a>
        <a href="../Admin-Inventory/admin-inventory.php">Inventory</a>
        <a href="../Admin-Sales-and-Purchase/sales-and-purchase.php">Sales and Purchase</a>
        <a href="./admin-search.php" style="color: #4B778D">Search</a>
        <button class="dropdown-btn">Product Monitoring
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Incoming-Product/incoming-product.php">Incoming Product</a>
            <a href="../Admin-Outgoing-Product/outgoing-product.php">Outgoing Product</a>
            <a href="../Admin-Stock-Replenishment/stock-replenishment.php">Stock Replenishment</a>
        </div>
        <a href="./Admin-Daily-Attendance/daily-attendance.php">Daily Attendance</a>
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
            <a href="#">Edit</a>
            <a href="#">Backup</a>
            <a href="#">Restore</a>
        </div>
        <a href="#">Help</a>
        <a href="admin-search.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="search-header">Search</h1>
            <form action="" method="post" class="search-form">
                <label for="search">Search</label>
                <input type="text" name="search" id="search" placeholder="Search">
                <!-- <label for="search-category">Search by</label>
                <select id="search-category" name="search">
                    <option value="product-id">Product ID</option>
                    <option value="brand-name">Brand Name</option>
                    <option value="type">Type</option>
                    <option value="model">Model</option>
                    <option value="color">Color</option>
                    <option value="quantity">Quantity</option>
                    <option value="price">Price</option>
                </select> -->
                <input type="submit" value="Search">
            </form>
            <table>
                <thead>
                    <th>Sample</th>
                    <th>Sample</th>
                    <th>Sample</th>
                    <th>Sample</th>
                    <th>Sample</th>
                    <th>Sample</th>
                    <th>Sample</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1100001</td>
                        <td>Hanabishi</td>
                        <td>Air-Condition</td>
                        <td>HTAC25S</td>
                        <td>White</td>
                        <td>15</td>
                        <td>Php 8,000.00</td>
                    </tr>
                    <tr>
                        <td>1100002</td>
                        <td>Hanabishi</td>
                        <td>Air Circulator Fan</td>
                        <td>HACF88</td>
                        <td>White</td>
                        <td>30</td>
                        <td>Php 1,583.00</td>
                    </tr>
                    <tr>
                        <td>1100003</td>
                        <td>Whirlpool</td>
                        <td>Microwave Oven</td>
                        <td>MWX203BL</td>
                        <td>Black</td>
                        <td>3</td>
                        <td>Php 4,698.00</td>
                    </tr>
                    <tr>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                        <td>Sample</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>

</html>