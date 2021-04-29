<?php
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['submit-button'])) {
        $brandName = mysqli_real_escape_string($db, $_POST['brandName']);
        $type = mysqli_real_escape_string($db, $_POST['type']);
        $model = mysqli_real_escape_string($db, $_POST['model']);
        $color = mysqli_real_escape_string($db, $_POST['color']);
        $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
        $price = mysqli_real_escape_string($db, $_POST['price']);

        $number = "0123456789";
        $length = 8;
        $prodID =  substr(str_shuffle($number),0,$length);

        $product_check_query = "SELECT * FROM tbl_product WHERE model='$model'";
        $result = mysqli_query($db, $product_check_query);
        $product = mysqli_fetch_assoc($result);
        if ($product) {
              if ($product['model'] == $model) {
                  ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Model already Exist
                    </div>
                  <?php
              }
        } else {
            $query = "INSERT INTO tbl_product(productId, brandName, type, model, color, quantity, price)
            VALUES('$prodID','$brandName','$type','$model','$color','$quantity','₱$price')";
            mysqli_query($db, $query);

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Product Registered Successfully!
                </div>
            <?php
        }
    }
?>