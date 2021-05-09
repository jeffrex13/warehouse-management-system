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
            <?php include("server.php");?>
            <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div class="container">
                <h1 class="AG-header">Gallery</h1>
                <label for="new-image" class="upload-label">Upload new image: </label>
                <form action="admin-gallery.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="myfile" id="new-image" class="upload-input" accept="image/png, image/jpeg" required>
                    <label for="product-id">Product ID</label>
                    <input id="product-id" type="text" name="product-id" placeholder="Product ID" />
                    <input type="submit" name="btn_submit" value="Submit">
                </form>
                <div class="slideshow-container fade">

                <!-- Full images with numbers and message Info -->
                <?php
                    $sql = "SELECT * FROM tbl_gallery";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $sql1 = "select count(id) as count from tbl_gallery";
                            $result1 = $db->query($sql1);
                            $row1=mysqli_fetch_array($result1);
                            ?>
                                <div class="Containers">
                                    <div class="MessageInfo"><?php echo $row['id'];?> / <?php echo $row1[0];?></div>
                                    <img src="../Photos/<?php echo $row['filename'];?>" style="width:100%">
                                    <div class="Info">Blender</div>
                                </div>
                            <?php
                        }
                    }
                ?>

                <!-- Back and forward buttons -->
                <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
                <a class="forward" onclick="plusSlides(1)">&#10095;</a>
                </div>
        </div>
        <script src="./index.js"></script>
    </body>
</html>