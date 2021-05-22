<?php
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');
    include('server.php');

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
        <a href="./branch-incoming-product.php" style="color: #4B778D">Incoming Product</a>
        <a href="../Branch-Billing/branch-billing.php">Billing</a>
        <button class="dropdown-btn">Maintenance
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="../Branch-Maintenance/branch-maintenance.php">Edit</a>
        </div>
        <a href="../Branch-Help/branch-help.php">Help</a>
        <a href="branch-incoming-product.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="incoming-product-h1">Incoming Product</h1>
            <div class="grid">
                <form action="branch-incoming-product.php" method="POST" class="search-form">
                    <label for="search">Search Product</label>
                    <input type="text" name="search" id="search">
                    <input class="search-btn" name="btn_search" type="submit" value="Search">
                </form>
                <form action="branch-incoming-product.php" method="POST" class="received-form">
                    <input type="hidden" name="uname" value=<?php echo $username;?> />
                    <label for="received">Received Product</label>
                    <input type="text" name="trackingID" id="received">
                    <input class="received-btn" name="btn_received" type="submit" value="Received">
                </form>
            </div>
            <table>
                <thead>
                    <th>Tracking ID</th>
                    <th>Product ID</th>
                    <th>Date</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <a class="refresh" href="branch-incoming-product.php">Refresh</a>
                    <?php
                        if (isset($_POST['btn_search'])) {
                            $search = mysqli_real_escape_string($db, $_POST['search']);

                            $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $store = $row['store'];

                                    $sql = "SELECT * FROM tbl_incoming_product_branch WHERE (id='$search' OR productID='$search'
                                    OR date='$search' OR brand_name='$search' OR type='$search' OR 	model='$search' OR price='$search'
                                    OR quantity='$search') AND (store = '$store')";
                                    $result = $db->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['id'];?></td>
                                                    <td><?php echo $row['productID'];?></td>
                                                    <td><?php echo $row['date'];?></td>
                                                    <td><?php echo $row['brand_name'];?></td>
                                                    <td><?php echo $row['type'];?></td>
                                                    <td><?php echo $row['model'];?></td>
                                                    <td><?php echo $row['price'];?></td>
                                                    <td><?php echo $row['quantity'];?></td>
                                                </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                            <tr>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                                <td>0 Result</td>
                                            </tr>
                                        <?php
                                    }
                                }
                            }
                        } else {
                            $sql = "SELECT * FROM tbl_user WHERE username='$username'";
                            $result = $db->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $store = $row['store'];

                                    $sql = "SELECT * FROM tbl_incoming_product_branch WHERE store='$store'";
                                    $result = $db->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['id'];?></td>
                                                    <td><?php echo $row['productID'];?></td>
                                                    <td><?php echo $row['date'];?></td>
                                                    <td><?php echo $row['brand_name'];?></td>
                                                    <td><?php echo $row['type'];?></td>
                                                    <td><?php echo $row['model'];?></td>
                                                    <td><?php echo $row['price'];?></td>
                                                    <td><?php echo $row['quantity'];?></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./index.js"></script>
</body>

</html>