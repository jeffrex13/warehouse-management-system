<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../index.php');
    }
    if (isset($_GET['logout'])) {
        date_default_timezone_set('Asia/Manila');
        $time = date("h:i a");
        $date = date("M j, Y");

        $query = "UPDATE tbl_audit_trail SET timeout = '$time', date = '$date' 
        WHERE username='$username' AND timeout IS NULL";
        mysqli_query($db, $query);
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
    <link rel="stylesheet" href="../CSS/admin-help.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--Dropdown-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Help</title>
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
            <a href="../Admin-Report/Admin-Incoming-products-report.php">Incoming Products Report</a>
            <a href="../Admin-Report/Admin-Outgoing-products-report.php">Outgoing Products Report</a>
            <a href="../Admin-Report/Admin-Stock-replenishment-report.php">Stock Replenishment Report</a>
            <a href="../Admin-Report/Admin-Attendance-report.php">Attendance Report</a>
            <a href="../Admin-Report/Admin-Billing-report.php">Billing Report</a>
        </div>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Admin-Maintenance/admin-edit.php">Edit</a>
            <a href="../Admin-Maintenance/admin-backup-restore.php">Backup & Restore</a>
        </div>
        <a href="./admin-help.php" style="color: #4B778D">Help</a>
        <a href="admin-gallery.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h2 class="header">How can we help you?</h2>
            <button class="accordion"><span>Account Registration</span></button>
            <div class="panel">
                <p class="info">To register an account, fill out the textboxes with the required information, the
                    entered username and password must be unique. The password must consist of eight to twelve (8–12)
                    alphanumeric case sensitive characters. </p>
                <p class="note">NOTE: The password is auto generated which is sent to user's email with username
                </p>
            </div>

            <button class="accordion"><span>Product Registration</span></button>
            <div class="panel">
                <p class="info">Fill out the information needed here such as Brand name, Type, Model, Color, Quantity
                    and Price. These are used with barcode scanner by scanning a product as a Product ID.</p>
                <p class="note">NOTE: This is where all the registered products information will have a record on the
                    database. The products will go to the inventory system. </p>
            </div>

            <button class="accordion"><span>Product Monitoring</span></button>
            <div class="panel">
                <p class="info">This allows the user to monitor the replenishment of products, as well as incoming and
                    outgoing products. </p>
                <p class="note">NOTE:</p>
                <ul>
                    <li class="note">Incoming product is encoding section that inputs a product information and
                        quantities.</li>
                    <li class="note">Outgoing product is a encoding section that inputs a product information and
                        quantities from sales and pull-out products.</li>
                    <li class="note">Product Replenishment is encoding section that inputs a product information and
                        quantities to restock a products that needed.</li>
                </ul>

            </div>

            <button class="accordion"><span>Reports</span></button>
            <div class="panel">
                <p class="info">This tab monitors the weekly, monthly and yearly transaction reports such as Audit
                    trails, Sales, Purchase, Incoming products, Outgoing products and Stock replenishment.</p>
                <p class="note">NOTED: All of the mentioned types or report will be printable </p>
            </div>

            <button class="accordion"><span>Maintenance</span></button>
            <div class="panel">
                <p class="info">This tab will give the ability to add new records and edit all the existing records of the information of products.</p>
                <p class="note">NOTE: It also let you Backup and Restore any transactions and reports.</p>
            </div>

        </div>
        <script src="./index1.js"></script>
        <script src="../index.js"></script>
</body>

</html>