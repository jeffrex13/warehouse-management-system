<?php
    if (isset($_POST['submit-button'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $productId = mysqli_real_escape_string($db, $_POST['productId']);
        $date = mysqli_real_escape_string($db, $_POST['date']);
        $quantity = mysqli_real_escape_string($db, $_POST['quantity']);

        $sql = "SELECT * FROM tbl_product WHERE productId = '$productId'";
        $result = $db->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $brandName = $row['brandName'];
                $type = $row['type'];
                $model = $row['model'];
                $fetchedQuantity = $row['quantity'];

                if($fetchedQuantity == 0 || $fetchedQuantity < $quantity) {
                    ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            Invalid Quantity
                        </div>
                    <?php
                } else {
                    $query = "INSERT INTO tbl_outgoing_product (product_id, brandName, type, model, date, quantity) 
                    VALUES('$productId', '$brandName', '$type', '$model', '$date', '$quantity')";
                    mysqli_query($db, $query);

                    ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            Successfully saved new outgoing product
                        </div>
                    <?php

                    $sql = "SELECT * FROM tbl_user WHERE username='$uname'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            date_default_timezone_set('Asia/Manila');
                            $time = date("h:i a");
                            $date = date("M j, Y");
                            $uName = $row['username'];
                            $fname = $row['firstname'];
                            $lname = $row['lastname'];
                            $mname = $row['middlename'];
                            $query = "INSERT INTO tbl_audit_trail(username, firstname, lastname, middlename, 
                            timein, activity, date) 
                            VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Input New Outgoing Product','$date')";
                            mysqli_query($db, $query);
                        }
                    }
                }
            }
        } else {
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Incorrect product ID
                </div>
            <?php
        }
    }
?>