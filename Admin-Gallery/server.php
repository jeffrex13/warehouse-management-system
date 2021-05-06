<?php
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['btn_submit'])) {
        $filename = $_FILES['myfile']['name'];

        $gallery_check_query = "SELECT * FROM tbl_gallery WHERE filename='$filename'";
        $result = mysqli_query($db, $gallery_check_query);
        $gallery = mysqli_fetch_assoc($result);
        if ($gallery) {
            if ($gallery['filename'] == $filename) {
                ?>
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      Image already Exist
                  </div>
                <?php
            }
        } else {
            $destination = '../Photos/' . $filename;
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $file = $_FILES['myfile']['tmp_name'];

            if (move_uploaded_file($file, $destination)) {
                $query="INSERT INTO tbl_gallery(filename) VALUES('$filename')";
                mysqli_query($db, $query);

                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Successfully save image
                    </div>
                <?php
            }
        }
    }
?>