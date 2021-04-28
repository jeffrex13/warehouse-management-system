<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './../vendor/autoload.php';

    $mail = new PHPMailer(true);

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'warehouse_management_system');

    if (isset($_POST['submit-button'])) {
        $userName = mysqli_real_escape_string($db, $_POST['userName']);
        $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
        $middleName = mysqli_real_escape_string($db, $_POST['middleName']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $birthDate = mysqli_real_escape_string($db, $_POST['birthDate']);
        $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $loa = mysqli_real_escape_string($db, $_POST['loa']);
        $store = mysqli_real_escape_string($db, $_POST['store']);

        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $number = "0123456789";
        $special_character = "!@#$%^&*()";
        $length = 2;
        $char_shuffle =  substr(str_shuffle($chars),0,$length);
        $number_shuffle =  substr(str_shuffle($number),0,$length);
        $special_char_shuffle = substr(str_shuffle($special_character),0,$length);
        $password = $char_shuffle . $number_shuffle . $special_char_shuffle;

        $user_check_query = "SELECT * FROM tbl_user WHERE username='$userName' 
        OR email='$email' OR mobilenumber='$mobilenumber'";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['username'] == $userName) {
              ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Username already Exist
                </div>
              <?php
            }
            
            if ($user['email'] == $email) {
                ?>
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      Email already Exist
                  </div>
                <?php
            }
            
            if ($user['mobilenumber'] == $mobilenumber) {
                ?>
                  <div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                      Mobile Number / Telephone number already Exist
                  </div>
                <?php
            }
        }

        if (empty($store)) {
            $query = "INSERT INTO tbl_user (username, password, firstname, lastname, middlename, 
            address, birthdate, mobilenumber, email, loa) VALUES('$userName', '$password', '$firstName',
            '$lastName', '$middleName', '$address', '$birthDate', '$mobilenumber', '$email', '$loa')";
            mysqli_query($db, $query);

            try {
                $generated_password = $password;
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jhaycee122098@gmail.com';
                $mail->Password = 'janchristan';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
            
                //Recipients
                $mail->setFrom('jhaycee122098@gmail.com', 'Administrator');
                $mail->addAddress($email);
            
                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Account Registration';
                $mail->Body = '
                Your generated password: '.$password.'<br/>
                Please login to: <a href="http://localhost/warehouse-management-system/index.php">Warehouse Management System</a>';

                $mail->send();
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Password sent to the employee
                    </div>
                <?php
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Successfully registered employee
                </div>
            <?php
        } else {
            $query = "INSERT INTO tbl_user (username, password, firstname, lastname, middlename, 
            address, birthdate, mobilenumber, email, loa, store) VALUES('$userName', '$password', '$firstName',
            '$lastName', '$middleName', '$address', '$birthDate', '$mobilenumber', '$email', '$loa', '$store')";
            mysqli_query($db, $query);

            try {
                $generated_password = $password;
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jhaycee122098@gmail.com';
                $mail->Password = 'janchristan';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
            
                //Recipients
                $mail->setFrom('jhaycee122098@gmail.com', 'Administrator');
                $mail->addAddress($email);
            
                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Account Registration';
                $mail->Body = '
                Your generated password: '.$password.'<br/>
                Please login to: <a href="http://localhost/warehouse-management-system/index.php">Warehouse Management System</a>';

                $mail->send();
                ?>
                    <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        Password sent to the branch
                    </div>
                <?php
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            ?>
                <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    Successfully registered branch
                </div>
            <?php
        }
    }
?>