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
    <link rel="stylesheet" href="../CSS/employee-incoming-product.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Employee Incoming Product</title>
</head>
<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Employee-Homepage/employee-homepage.php">Profile</a>
        <a href="../Employee-Gallery/employee-gallery.php">Gallery</a>
        <a href="../Employee-Barcode-Generator/employee-barcode-generator.php">Barcode Generator</a>
        <a href="../Employee-Search/employee-search.php">Search</a>
        <button class="dropdown-btn">Product Monitoring 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="./employee-incoming-product.php" style="color: #51c4d3">Incoming Product</a>
            <a href="../Employee-Outgoing-Product/employee-outgoing-product.php">Outgoing Product</a>
            <a href="../Employee-Stock-Replenishment/employee-stock-replenishment.php">Stock Replenishment</a>
        </div>
        <a href="../Employee-Help/employee-help.php">Help</a>
        <a href="employee-incoming-product.php?logout=<?php echo "$username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
                <h1 class="incoming-product-h1">Incoming Product</h1>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM tbl_incoming_product";
                        $result = $db->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['productID'];?></td>
                                        <td><?php echo $row['date'];?></td>
                                        <td><?php echo $row['brandName'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['model'];?></td>
                                        <td><?php echo $row['quantity'];?></td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>