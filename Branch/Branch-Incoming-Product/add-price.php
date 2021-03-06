<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');
    include('server.php');

    $trackingID = $_SESSION['trackingID'];
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/branch-incoming-product.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Incoming Product</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="" style="color: #4B778D">Incoming Product</a>
        <a href="#">Billing</a>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
        </div>
        <a href="../Branch-Help/branch-help.php">Help</a>
        <a href="add-price.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
            <div id="myForm" class="form">
                <div class="form-content">
                    <div class="form-header">
                        <span class="close"><a href="./branch-incoming-product.php">&times;</a></span>
                        <h3 class="header">Add Product</h3>
                    </div>
                    <div class="form-body">
                        <form action="branch-incoming-product.php" method="POST">
                            <input type="hidden" name="uname" value=<?php echo $username;?> />
                            <input type="hidden" name="trackingID" value=<?php echo $trackingID;?> />
                            <label class="add-label" for="add-product">Tracking ID</label>
                            <input class="add-input" type="text" id="add-product" value=<?php echo $trackingID;?> disabled>
                            <div class="form-info">
                                <div>
                                    <p>Product ID</p>
                                    <p>Brand Name</p>
                                    <p>Type</p>
                                    <p>Model</p>
                                    <p>Price</p>
                                    <p>Quantity</p>
                                </div>
                                <div>
                                   <?php
                                        $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                                        $result = $db->query($sql);
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                $store = $row['store'];

                                                $sql = "SELECT * FROM tbl_incoming_product_branch WHERE id = '$trackingID' 
                                                AND store='$store'";
                                                $result = $db->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        ?>
                                                            <p><?php echo $row['productID'];?></p>
                                                            <p><?php echo $row['brand_name'];?></p>
                                                            <p><?php echo $row['type'];?></p>
                                                            <p><?php echo $row['model'];?></p>
                                                            <p><?php echo "???".$row['price'];?></p>
                                                            <p><?php echo "???".$row['quantity'];?></p>
                                                        <?php
                                                    }
                                                }
                                            }
                                        }
                                   ?>
                                </div>
                            </div>
                            <div class="price-div">
                                <label class="price-label" for="price">Price</label>
                                <input class="price-input" type="text" name="price" id="price" required>
                            </div>
                            <div class="btn-div">
                                <input class="add-btn" name="btn_submit" type="submit" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
 
    </div>
    <script src="./index.js"></script>
</body>

</html>




