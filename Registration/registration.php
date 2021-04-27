<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--CSS Stylesheet-->
    <link rel="stylesheet" href="./../CSS/registration.css">

    <!--Title Bar Icon-->
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">

    <!--Google Font CDN-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Admin Homepage</title>
</head>
<body>
    <?php include('registration-server.php') ?>
    <div class="registration-container">
        <h1 class="registration-h1">Registration</h1>
        <form action="registration.php" method="POST">
            <div class="registration-grid">
                <div class="grid-1">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="inputs" name="userName" placeholder="Enter your username" pattern="[A-z0-9]{8,}" title="Alphanumeric Characters Only!" autofocus required>
                    <label for="password">Password</label>
                    <input id="password" type="text" class="inputs" name="passWord" placeholder="Auto generated password" disabled>
                
                    <label for="firstName">First Name</label>
                    <input id="firstName" type="text" class="inputs" name="firstName" placeholder="Enter your first name" pattern="[A-z\s]{1,}" title="Only Accept Letters Only!" required>
                    <label for="lastName">Last Name</label>
                    <input id="lastName" type="text" class="inputs" name="lastName" placeholder="Enter your last name" pattern="[A-z\s]{1,}" title="Only Accepts Characters Only!" required>
               
                    <label for="middleName">Middle Name</label>
                    <input id="middleName" type="text" class="inputs" name="middleName" placeholder="Enter your middle name" pattern="[A-z\s]{1,}" title="Only Accepts Characters Only!" required>
                
                    <label for="address">Address</label>
                    <input id="address" type="text" class="address" name="address" placeholder="Enter your address" required>
                </div>
                <div class="grid-2">
                    <label for="birthDate">Birth Date</label>
                    <input id="birthDate" type="date" class="inputs" name="birthDate" required>
                
                    <label for="number">Mobile/Telephone Number</label>
                    <input id="number" type="text" class="inputs" name="mobilenumber" pattern="[0-9]{1,}" placeholder="Enter your mobile/telephone number" required>
                    <label for="email">Email</label>
                    <input id="email" type="email" class="inputs" name="email" placeholder="Enter your email" required>
                
                    <label for="loa">Level Of Access</label>
                    <select name="loa" class="inputs" id="loa">
                        <option value="employee">Employee</option>
                        <option value="branch">Branch</option>
                    </select>
                    <label for="store">Store</label>
                    <input id="store" type="text" class="inputs" name="store" placeholder="Enter your store(optional)">
                </div>
                <label for="terms-and-condition">
                <input id="terms-and-condition" type="checkbox">I have agree to <a href="#" class="terms">Terms and Condition</a></label>
            </div>
            <br/>
            <div class="button-div">
                <input type="submit" class="submit-button" name="submit-button" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>