<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="javascript/JS.js"></script>
</head>
<header>
    <p class="headertext">Pet Food Shop <br><p>click me (once)----------></p></p>
    <img src="images/logo.png" width="150" height="150" id="animal-image" onclick="moveImage()">
</header>

<body>
 <?php
    include 'header.php';
    ?>
    <div class="body"><p>Information about pet food information about pet food information about pet food 
        information about pet food information about pet food information about pet food information about pet food 
        information about pet food information about pet food information about pet food information about pet food 
        information about pet food information about pet food information about pet food information about pet food 
    </p></div>


    <div class="product">
        <img src="images/logo.png" alt=" cat food tin" style="width:100%" width="200px" height="200px">
        <h1>pet food</h1>
        <p class="price"></p>
        <p>Yum yum yum yum yum yum yum yum yum yum yum.</p>
    </div>
    </div>

    <div>
        <button onclick="addToCart('Cat food', 12.5, 1)">Add to cart</button>
    </div>

    <div id="cart"></div>

    <button onclick="viewInvoice()">Check out</button>

    <div id="invoice">
        <div id="items"></div>
        <button onclick="closeInvoice()">Close</button>
    </div>

    <div id="cart"></div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>