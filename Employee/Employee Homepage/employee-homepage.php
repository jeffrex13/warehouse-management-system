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
    <link rel="stylesheet" href="../CSS/employee-profile.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Profile</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./employee-homepage.php" style="color: #4B778D">Profile</a>
        <a href="#">Gallery</a>
        <a href="#">Barcode Generator</a>
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
        <a href="#">Help</a>
        <a href="employee-homepage.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
           <h1 class="profile-header">Profile</h1>
           <h3 class="name">User</h3>
           <div class="div-info">
                <p class="info">Level of Access: </p>
                <p class="info1">Employee</p>                  
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
                <p class="info1">Antipolo City</p>
           </div>
            <div class="div-info">
                <p class="info">Birthdate: </p>
                <p class="info1">01/01/2001</p>
           </div>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>