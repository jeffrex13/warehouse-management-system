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
    <link rel="stylesheet" href="../CSS/branch-inventory.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Branch Inventory</title>
</head>

<body>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="../Branch-Homepage/branch-homepage.php">Profile</a>
        <a href="../Branch-Gallery/branch-gallery.php">Gallery</a>
        <a href="../Branch-Search/branch-search.php">Search</a>
        <a href="./branch-inventory.php" style="color: #4B778D">Inventory</a>
        <a href="../Branch-Incoming-Product/branch-incoming-product.php">Incoming Product</a>
        <a href="#">Billing</a>
        <button class="dropdown-btn">Maintenance 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Edit</a>
            </div>
        <a href="#">Help</a>
        <a href="branch-inventory.php?logout=<?php echo " $username"?>">Logout</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Open Menu</button>
        <div class="container">
            <h1 class="inv-header">Inventory</h1>
            <div class="search-form">
                <form action="admin-inventory.php" method="post">
                    <label for="search">Search</label>
                    <input type="text" name="search" id="search" placeholder="Search product" required>
                    <input type="submit" name="btn_search" value="Search">
                </form>
            </div>
            <table>
                <thead>
                    <th>Product ID</th>
                    <th>Brand Name</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <a class="refresh" href="admin-inventory.php">Refresh</a>
                    <tr>
                        <td style="background: red">
                            111111
                        </td>
                        <td style="background: red">
                            Samsung
                        </td>
                        <td style="background: red">
                            Refrigerator
                        </td>
                        <td style="background: red">
                            AQWEJHJAS
                        </td>
                        <td style="background: red">
                            Black
                        </td>
                        <td style="background: red">
                            5
                        </td>
                        <td style="background: red">
                            ₱24,0000
                        </td>
                    </tr>
                    <tr>
                        <td style="background: orange;">
                            22222
                        </td>
                        <td style="background: orange;">
                            Samsung
                        </td>
                        <td style="background: orange;">
                            Washing Machine
                        </td>
                        <td style="background: orange;">
                            AW123141421
                        </td>
                        <td style="background: orange;">
                            White
                        </td>
                        <td style="background: orange;">
                            10
                        </td>
                        <td style="background: orange;">
                            ₱15,0000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2313131
                        </td>
                            
                        <td>
                            Samsung
                        </td>
                            
                        <td>
                            Oven
                        </td>
                        <td>
                            QWE1232451
                        </td>
                        <td>
                            Black
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            ₱24,0000
                        </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
    <script src="../index.js"></script>
</body>

</html>