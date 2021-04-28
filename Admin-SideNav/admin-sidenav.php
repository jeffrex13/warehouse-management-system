<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!--Dropdown-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Admin Sidenav</title>
    </head>
    <body id="body">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#" style="color: #4B778D">Admin Homepage</a>
            <a href="#">Product Registration</a>
            <a href="#">Profile</a>
            <a href="#">Gallery</a>
            <a href="#">Inventory</a>
            <a href="#">Sales and Purchase</a>
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
            <a href="#">Logout</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div class="container">
                
            </div>
        </div>
        <script src="../index.js"></script>
    </body>
</html>