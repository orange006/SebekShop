<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop</title>
    <link rel="icon" href="/public/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/fonts.css">
    <link rel="stylesheet" href="/public/assets/css/styles.css">
</head>

<body>
    <header class="header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="header__logo">
                <a href=""><img src="/public/assets/images/logo.jpg" alt="logo"></a>
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

        <div class="header__content d-flex flex-column justify-content-center">
            <h1 class="header__title">Здарова, дарагулькины!</h1>
        </div>
    </header>

    <section class="categories">
        <div class="container">
            <div class="section__title">Категории товаров</div>

            <div class="row">
                <div class="col-lg-4 col-6">
                    <a href="/clothes" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="/public/assets/images/t-shirt.png" alt="t-shirt">
                        <div class="categories__block-title">Одежда</div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="/covers" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="/public/assets/images/case.png" alt="case">
                        <div class="categories__block-title">Чехлы</div>
                    </a>
                </div>
                <div class="col-lg-4 col-6">
                    <a href="/smoke" class="categories__block d-flex flex-column justify-content-center">
                        <img class="categories__image" src="/public/assets/images/smoke.png" alt="smoke">
                        <div class="categories__block-title">Мундштуки</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container d-flex justify-content-between">
            <div class="footer__rights">© 2020 Все права защищены</div>

            <div class="footer__social-links">
                <a href="https://www.instagram.com/00000000000001k" class="mr-2">Instagram</a>
                <a href="https://t.me/joinchat/AAAAAFdzT5znhxeC6xOf3Q">Telegram</a>
            </div>
        </div>
    </footer>

    <script src="/public/assets/js/cart.js"></script>
</body>

</html>
