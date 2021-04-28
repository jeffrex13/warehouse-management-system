<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/product-registration.css">
    <link rel="icon" href="https://static.thenounproject.com/png/165116-200.png" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Product Registration</title>
</head>
<body>
    <div class="prod-reg-container">
        <h2 class="prod-reg-header">Product Registration</h2>
        <form action="" method="">
            <div class="container2">
                <div class="grid1">
                    <label for="Prod-ID">Product ID</label>
                    <input id="Prod-ID" type="text" name="prodID" placeholder="Auto generated ID" disabled>

                    <label for="Brand-name">Brand name</label>
                    <input id="Brand-name" type="text" name="brandName" placeholder="Enter Brand Name" required>

                    <label for="Type">Type</label>
                    <input id="Type" type="text" name="type" placeholder="Enter Product Type" required>

                    <label for="Model">Model</label>
                    <input id="Model" type="text" name="model" placeholder="Enter Model" required>
                </div>
                <div class="grid2">
                    <label for="Color">Color</label>
                    <input id="Color" type="text" name="color" placeholder="Enter Color" required>

                    <label for="Quantity">Quantity</label>
                    <input id="Quantity" type="number" name="quantity" placeholder="Enter Quantity" required>

                    <label for="Price">Price</label>
                    <input id="Price" type="text" name="price" placeholder="Enter Price" required>
                </div>
            </div>
            <div id="grid3">
                    <input type="submit" class="submit-btn" name="submit-button" value="Submit">  
                </div>
        </form>
    </div>
</body>
</html>