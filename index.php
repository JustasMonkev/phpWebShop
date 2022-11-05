<?php

require_once('php/CreateDb.php');
require_once('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Products", "Albums");
?>

<!DOCTYPE html>
<html lang="EN">

<head>
    <title>SHOP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/59558f9cd7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/59558f9cd7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="site-blocks-cover overlay backgroundshop">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="mb-5 shop_title">SHOP</h2>
                <p>Scroll down</p>
            </div>
        </div>
    </div>
</div>
<!-- Body -->
<div class="backgroundcolor">
    <section class="container content-section">
        <section class="container content-section">
            <div>
                <nav class="navbar">
                    <input id="myInput" class="form-control" type="text" placeholder="Search..">
                    <select onclick="sortBySelectedOption()" id="myInput-sort" class="rounded">
                        <option value="empty"> Sort by...</option>
                        <option value="Sort by lowest price">Sort by lowest price</option>
                        <option value="Sort by highest price">Sort by highest price</option>
                        <option value="Sort by newest albums">Sort by newest albums</option>
                        <option value="Sort by oldest albums">Sort by oldest albums</option>
                    </select>
                </nav>
            </div>
            <div class="shop-items" id="products">
                <!-- Shop grid element -->
                <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_data'], $row['id']);
                }
                ?>
            </div>
        </section>
        <!-- Cart -->
        <section class="container content-section">
            <h2 class="section-header mb-5 h2center">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">€0</span>
            </div>
        </section>
        <!-- Footer -->
</div>
<footer>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="./js/shop.js"></script>
</body>
</html>