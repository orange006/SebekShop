var cart = [];
if (localStorage.cart) {
    cart = JSON.parse(localStorage.cart);
}

window.onload = function() {
    var sum = 0;
    for (var i in cart) {
        var item = cart[i];
        sum += parseInt(item.Amount);
    }
    document.querySelector(".header__cart-counter").innerHTML = sum;
}

function addToCart() {
    var image = document.querySelector(".product__image").getAttribute("data-value");
    var name = document.querySelector(".product__title").getAttribute("data-value");
    var price = document.querySelector(".product__price").getAttribute("data-value").split(' ')[0];
    var amount = 1;
    if (typeof(document.querySelector("#size")) != 'undefined' && document.querySelector("#size") != null) {
        var size = document.querySelector("#size").value;
        var name = name + ' - ' + size;
    }

    for (var i in cart) {
        if(cart[i].Product == name) {
            amount = cart[i].Amount++;
            saveCart();
            return;
        }
    }

    var item = {Product: name,  Price: price, Amount: amount, Image: image}; 
    cart.push(item);
    saveCart();
}

function saveCart() {
    if (window.localStorage) {
        localStorage.cart = JSON.stringify(cart);
    }
    location.reload();
}
