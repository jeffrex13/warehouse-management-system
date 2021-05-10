<?php
    if (isset($_POST['submit-button'])) {
        $uname = mysqli_real_escape_string($db, $_POST['uname']);
        $brandName = mysqli_real_escape_string($db, $_POST['brandName']);
        $type = mysqli_real_escape_string($db, $_POST['type']);
        $date = mysqli_real_escape_string($db, $_POST['date']);
        $quantity = mysqli_real_escape_string($db, $_POST['quantity']);

        $query = "INSERT INTO tbl_incoming_product (brandName, type, date, quantity) 
        VALUES('$brandName', '$type', '$date', '$quantity')";
        mysqli_query($db, $query);

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
                VALUES('$uName', '$fname', '$lname', '$mname', '$time', 'Input New Incoming Product','$date')";
                mysqli_query($db, $query);
            }
        }

        ?>
            <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                Successfully save new incoming product
            </div>
        <?php
    }
?>