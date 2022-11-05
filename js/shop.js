$(document).ready(function () {
    cartActions()
    $("#myInput").on('keyup', function () {
        var search = $(this).val().toLowerCase();
        //Go through each list item and hide if not match search

        $("#products form").each(function () {
            if ($(this).html().toLowerCase().indexOf(search) !== -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});

function cartActions() {
    for (const element of document.getElementsByClassName('btn-danger')) {
        element.addEventListener('click', removeCartItem)
    }

    // Lets the User Select Quantity Of Items cant be minus or zero
    for (const quantityInput of document.getElementsByClassName('cart-quantity-input')) {
        quantityInput.addEventListener('change', quantityChanged)
    }

    // Adds Item to Cart
    for (const addToCartButton of document.getElementsByClassName('shop-item-button')) {
        addToCartButton.addEventListener('click', addToCartClicked)
    }
}


// Removes item from cart //
function removeCartItem(event) {
    const buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

// Changes item quantity //
function quantityChanged(event) {
    const input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
        event.preventDefault();
    }
    updateCartTotal()
}

// Adds item to cart //
function addToCartClicked(event) {
    let shopItem = event.target.parentElement.parentElement

    let productTitle = shopItem.getElementsByClassName('shop-item-title')[0].innerText

    let productPrice = shopItem.getAttribute("data-price")

    let imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src

    addItemToCart(productTitle, productPrice, imageSrc)

    updateCartTotal()
}


// Adds item's title, price, and image onto cart section //
function addItemToCart(title, price, imageSrc) {
    const cartRow = document.createElement('div');
    cartRow.classList.add('cart-row')
    const cartItems = document.getElementsByClassName('cart-items')[0];
    cartRow.innerHTML = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100" alt="img">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column" data-item-price = "${price.replaceAll("\D+", "")}">${price} €</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`

    cartItems.append(cartRow)

    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)

    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)

}

// Updates the total price in the cart //
function updateCartTotal() {
    let total = 0;
    const cartItemContainer = document.getElementsByClassName('cart-items')[0];
    const cartRows = cartItemContainer.getElementsByClassName('cart-row');

    for (const element of cartRows) {

        let priceElement = element.querySelectorAll("[data-item-price]")[0].getAttribute("data-item-price")

        let quantityElement = element.getElementsByClassName('cart-quantity-input')[0]

        total = total + (priceElement * quantityElement.value)
    }

    total = Math.round(total * 100) / 100

    document.getElementsByClassName('cart-total-price')[0].innerText = '€' + total
}

// sort by date and by price
const productPrices = Array.from(document.querySelectorAll("[data-price]"));
const productsDates = Array.from(document.querySelectorAll("[data-date]"));

const selectedValue = document.getElementById("myInput-sort");

const priceArray = function (sortingOption) {
    displaySortedItems(productPrices
        .sort(function (a, b) {
            if (sortingOption === 'low') {
                return a.getAttribute("data-price") - b.getAttribute("data-price");
            }
            return b.getAttribute("data-price") - a.getAttribute("data-price");
        }));
}

const sortProductsByDate = function (sortingOption) {
    displaySortedItems(productsDates
        .sort(function (a, b) {
            if (sortingOption === 'newest') {
                return new Date(b.getAttribute("data-date")).getTime() - new Date(a.getAttribute("data-date")).getTime();
            }
            return new Date(a.getAttribute("data-date")).getTime() - new Date(b.getAttribute("data-date")).getTime();
        }));
}

function sortBySelectedOption() {
    if (selectedValue.value === "Sort by highest price") {
        priceArray("high");
    }

    if (selectedValue.value === "Sort by lowest price") {
        priceArray("low");
    }

    if (selectedValue.value === "Sort by newest albums") {
        sortProductsByDate("newest");
    }

    if (selectedValue.value === "Sort by oldest albums") {
        sortProductsByDate("oldest");
    }
}

function displaySortedItems(array) {
    for (const element of array) {
        document.getElementById("products").append(element);
    }
}