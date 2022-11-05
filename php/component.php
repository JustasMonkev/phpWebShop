<?php
function component($productname, $productprice, $productimg, $productDate, $productid)
{
    $element = "
                <form action=\"index.php\" method=\"post\" data-date= $productDate data-price= $productprice onclick=\"updateCartTotal(); return false;\">
                    <div class= \"shop-item\">
<span class=\"shop-item-title\">$productname</span>
                        <img src= \"$productimg\"
                             alt= \"Imagge\" class=\"img-fluid shop-item-image\">
                    <br>
                                <span class= \"shop-item-price\">€ $productprice</span>
                    <div class= \"shop-item-details\">
                        <pre>  </pre>
                        <button type=\"submit\" class=\"btn btn-primary shop-item-button\" name=\"add\">Add to Cart</button>
                         <input type='hidden' name='product_id' value='$productid'>
                    </div>
                    </div>
                </form>
    ";
    echo $element;
}