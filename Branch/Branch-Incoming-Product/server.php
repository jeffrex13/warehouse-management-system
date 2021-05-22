<?php
    if (isset($_POST['btn_received'])) {
        $trackingID = mysqli_real_escape_string($db, $_POST['trackingID']);
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

        $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $store = $row['store'];
            }
            $sql = "SELECT * FROM tbl_incoming_product_branch WHERE id = '$trackingID' AND store='$store'";
            $result = $db->query($sql);
            if ($result->num_rows > 0) {
                $_SESSION['trackingID'] = $trackingID;
                header('location: ./add-price.php');
            } else {
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        Invalid Product
                    </div>
                <?php
            }
        }
    }

    if (isset($_POST['btn_submit'])) {
        $trackingID = mysqli_real_escape_string($db, $_POST['trackingID']);
        $price = mysqli_real_escape_string($db, $_POST['price']);
        $uname = mysqli_real_escape_string($db, $_POST['uname']);

        $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $store = $row['store'];
                $sql = "SELECT * FROM tbl_incoming_product_branch WHERE id = '$trackingID' AND store = '$store'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $productID = $row['productID'];
                        $quantity = $row['quantity'];
                        $brandName = $row['brand_name'];
                        $type = $row['type'];
                        $model = $row['model'];

                        $sql1 = "SELECT * FROM tbl_product_store WHERE productId = '$productID' AND store = '$store'";
                        $result1 = $db->query($sql1);
                        if ($result1->num_rows > 0) {
                            while($row1 = $result1->fetch_assoc()) {
                                $qty1 = $row1['quantity'];
                                $total = $qty1 + $quantity;

                                $query = "UPDATE tbl_product_store SET quantity = '$total', price = '$price'
                                WHERE productId = '$productID'";
                                mysqli_query($db, $query);

                                $query = "DELETE FROM tbl_incoming_product_branch WHERE productID = '$productID';";
                                mysqli_query($db, $query);

                                ?>
                                    <div class="alert">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                        Updated Quantity
                                    </div>
                                <?php
                            }
                        } else {
                            $query = "INSERT INTO tbl_product_store(productId, brandName, type, model, quantity, price, store)
                            VALUES('$productID', '$brandName', '$type', '$model', '$quantity', '$price', '$store')";
                            mysqli_query($db, $query);

                            $query = "DELETE FROM tbl_incoming_product_branch WHERE productID = '$productID';";
                            mysqli_query($db, $query);

                            ?>
                                <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    Successfully inserted new product
                                </div>
                            <?php
                        }
                    }
                }
            }
        }
    }
?>