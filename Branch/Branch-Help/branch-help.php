<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    $username = $_SESSION['username'];
    if (!isset($_SESSION['username'])) {
        header('location: ../../index.php');
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
        header("location: ../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/branch-help.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Help</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="./branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="../Branch-Incoming-Product/branch-incoming-product.php">Incoming Product</a>
        <a href="../Branch-Billing/branch-billing.php">Billing</a>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
        </div>
        <a href="./branch-help.php" style="color: #4B778D">Help</a>
        <a href="branch-help.php?logout=<?php echo " $username"?>">Logout</a>
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
                <p class="info">This tab will give the ability to add new records and edit all the existing records of
                    the information of products.</p>
                <p class="note">NOTE: It also let you Backup and Restore any transactions and reports.</p>
            </div>

        </div>
    </div>
    <script src="./index1.js"></script>
    <script src="../index.js"></script>
</body>

</html>