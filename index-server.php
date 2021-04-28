<?php
    session_start();
    $atmp=0;

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['login-button'])) {
        $userName = mysqli_real_escape_string($db, $_POST['userName']);
        $passWord = mysqli_real_escape_string($db, $_POST['passWord']);
        $atmp = mysqli_real_escape_string($db, $_POST['hidden']);

        $check_username = "SELECT * FROM tbl_user WHERE username='$userName' and password='$passWord'";
        $results0 = mysqli_query($db, $check_username);
        if (mysqli_num_rows($results0) == 1) {
            $query = "SELECT * FROM tbl_user WHERE username='$userName' AND password='$passWord'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
                if($atmp<=3) {
                    $loa_check_query = "SELECT loa FROM tbl_user WHERE username='$userName'";
                    $result = mysqli_query($db, $loa_check_query);
                    $level_of_access = mysqli_fetch_assoc($result);
                    if ($level_of_access) {
                        if ($level_of_access['loa'] == 'admin') {
                            $_SESSION['username'] = $userName;
                            echo 'Welcome Admin';
                        }
                        if ($level_of_access['loa'] == 'employee') {
                            $_SESSION['username'] = $userName;
                            echo 'Welcome Employee';
                        }
                        if ($level_of_access['loa'] == 'branch') {
                            $_SESSION['username'] = $userName;
                            echo 'Welcome Branch';
                        }
                    }
                }
            } else {
                $atmp++;
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Wrong username/password combination<br/>
                        Login Attempt: <?php echo $atmp;?>
                    </div>
                <?php
            }
        } else {
            $atmp = 0;
            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Invalid Username<br/>
                    <p>Login Attempt: <?php echo $atmp;?></p>
                </div>
            <?php
        }
        if($atmp==3)
        {
            echo 'Forgot Password';
        }
    }
?>