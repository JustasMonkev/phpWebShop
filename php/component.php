<?php
function component($productname, $productprice, $productimg, $productDate, $productid)
{
    $element = "
                <form action=\"index.php\" method=\"post\" id = \"$productid\" data-date= $productDate data-price= $productprice>
                    <div class= \"shop-item\">
<span class=\"shop-item-title\">$productname</span>
                        <img src= \"$productimg\"
                             alt= \"Imagge\" class=\"img-fluid shop-item-image\">
                    <br>
                                <span class= \"shop-item-price\">€ $productprice</span>
                    <div class= \"shop-item-details\">
                        <pre>  </pre>
                        <button class= \"btn btn-primary shop-item-button\" type= \"button\">ADD TO CART</button>
                    </div>
                    </div>
                </form>
    ";
    echo $element;
}