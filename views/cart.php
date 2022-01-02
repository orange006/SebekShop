<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Корзина</title>
    <link rel="icon" href="/public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/styles.css">
</head>

<body>
    <header class="header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="header__logo">
                <a href="/"><img src="/public/assets/images/logo.jpg" alt="logo"></a>
            </div>

            <nav class="header__nav d-md-block d-none">
                <a href="/shop" class="mr-3">Магазин</a>
                <a href="/qa" class="mr-3">Вопрос-ответ</a>
                <a href="/contacts">Контакты</a>
            </nav>

            <a href="/cart" class="header__cart d-block">Корзина -
                <span class="header__cart-counter">0</span>
            </a>
        </div>
    </header>

    <section class="cart-position">
        <div class="container">
            <div class="cart-status mt-5"></div>

            <table class="cart table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Товар</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                    </tr>
                </thead>
                <tbody id="cart-items"></tbody>
            </table>

            <div class="start-check-out text-right d-flex justify-content-end align-items-center mt-3">
                <div>К оплате - <span class="total"></span> грн</div>
                <button class="confirm-button ml-4" data-toggle="modal" data-target="#check-out">Оформить заказ</button>
            </div>

            <div class="modal fade" id="check-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="" method="post" class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input class="form-control" placeholder="Имя" type="text" name="name" autofocus required>
                            <input class="form-control mt-2" placeholder="Телефон" type="text" name="phone" 
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                            <input id="goods" type="hidden" name="goods" value="">
                            <input id="total" type="hidden" name="total" value="">
                        </div>
                        <div class="modal-footer">
                            <button onclick="cleanCart()" type="submit" class="confirm-button">Заказать</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>

    <script src="/public/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/public/public/assets/js/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
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
            showCart();
        }

        function showCart() {
            if (cart.length != 0) {
                var total = 0;
                document.querySelector(".cart").style.visibility = "visible";

                for (var i in cart) {
                    var item = cart[i];
                    total += parseInt(item.Price * item.Amount);
                    var row =
                        "<tr><td class='merge-cells-right'><img class='cart__image' src='" + item.Image + "'></td>" +
                        "<td class='merge-cells-left'>" + item.Product +
                        "<br><span class='remove-item' onclick='deleteItem(" + i + ")'>Убрать</span></td>" +
                        "<td><span class='minus' onclick='minus(" + i + ")'>-</span> " +
                        item.Amount + " <span class='plus' onclick='plus(" + i + ")'>+</span>" +
                        "</td><td>" + item.Price * item.Amount + "</td><tr>";
                    document.querySelector("#cart-items").insertAdjacentHTML('beforeend', row);
                }
                document.querySelector(".total").insertAdjacentHTML('beforeend', total);
                document.querySelector(".cart-status").innerHTML = "Корзина пустая";
                document.querySelector("#goods").value = JSON.stringify(cart);
                document.querySelector("#total").value = total;
            } else {
                document.querySelector(".cart-status").style.visibility = "visible";
                document.querySelector(".start-check-out").style.visibility = "hidden";
                document.querySelector(".cart-status").innerHTML = "Корзина пустая";
            }
        }

        function saveCart() {
            if (window.localStorage) {
                localStorage.cart = JSON.stringify(cart);
                location.reload();
            }
        }

        function minus(index) {
            cart[index].Amount--;
            if (cart[index].Amount <= 1) {
                cart[index].Amount = 1;
            }
            saveCart();
        }

        function plus(index) {
            cart[index].Amount++;
            saveCart();
        }

        function deleteItem(index) {
            cart.splice(index, 1);
            saveCart();
        }

        function cleanCart() {
            cart = [];
            saveCart();
        }
    </script>

    <?php
    if (isset($_POST['name']) && isset($_POST['phone'])) {
        $mail_to = 'example@gmail.com';
        $subject = 'Заказ из сайта Sebek-shop';

        $body_message = "Имя: " . $_POST['name'] . "\r\n";
        $body_message .= "Телефон: " . $_POST['phone'] . "\r\n";
        $body_message .= "Товар: " . $_POST['goods'] . "\r\n";
        $body_message .= "Сумма: " . $_POST['total'] . "\r\n";

        $headers = "Content-type: text/html; charset=UTF-8\r\n";
        mail($mail_to, $subject, $body_message, $headers);
        return true;
    }
    ?>
</body>

</html>
