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
    <link rel="stylesheet" href="../CSS/branch-search.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Search</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="./branch-search.php" style="color: #4B778D">Search</a>
        <a href="../Branch-Inventory/branch-inventory.php">Inventory</a>
        <a href="./branch-incoming-product.php">Incoming Product</a>
        <a href="#">Billing</a>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Edit</a>
            </div>
        <a href="#">Help</a>
        <a href="branch-search.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="search-header">Search</h1>
            <form action="branch-search.php" method="post" class="search-form">
                <label for="search">Search</label>
                <input type="text" name="search" id="search" aria-labelledby="search-label"
                    placeholder="Start typing..." required>
                <input type="submit" name="btn_search" value="Search">
            </form>
            <a class="refresh" href="branch-search.php">Refresh</a>
            <table>
                <thead>
                    <th>Username</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Middle name</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Store</th>
                </thead>
                <tbody>
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
            <table>
                <thead>
                    <th>Product Id</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>
                <tbody>
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
            </form>
        </div>
    </div>
    <script src="../index.js"></script>
    <script src="./auto-complete.js"></script>
</body>

</html>