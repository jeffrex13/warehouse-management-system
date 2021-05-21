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
        $date = date("D M j, Y");

        $query = "UPDATE tbl_audit_trail SET timeout = '$time', date = '$date' 
        WHERE username='$username' AND timeout IS NULL";
        mysqli_query($db, $query);
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
    <link rel="stylesheet" href="../CSS/branch-profile.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Homepage</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./branch-homepage.php" style="color: #4B778D">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="../Branch-Incoming-Product/branch-incoming-product.php">Incoming Product</a>
        <a href="#">Billing</a>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Edit</a>
            </div>
        <a href="#">Help</a>
        <a href="branch-homepage.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="profile-header">Profile</h1>
            <h3 class="name">User</h3>
            <div class="div-info">
                <p class="info">Level of Access: </p>
                <p class="info1">Staff</p>
            </div>
            <div class="div-info">
                <p class="info">Phone Number: </p>
                <p class="info1">09991111111</p>
            </div>
            <div class="div-info">
                <p class="info">Email Address: </p>
                <p class="info1">user@staff.com</p>
            </div>
            <div class="div-info">
                <p class="info">Address: </p>
                <p class="info1">Antipolo City</p>
            </div>
            <div class="div-info">
                <p class="info">Birthdate: </p>
                <p class="info1">01/01/2000</p>
            </div>
        </div>
    </div>
    <script src="../index.js"></script>
</body>

</html>