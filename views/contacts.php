<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Контакты</title>
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

    <section class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="d-flex">
                        <div class="contacts__type">Телефон:</div>
                        <div class="contacts__item">
                            +38 (068) 35-12-544<br>
                            +38 (050) 67-05-111
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="contacts__type">Почта:</div>
                        <div class="contacts__item">contacts@sebek.shop</div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>Есть вопросы? Пишите!</div>
                    <form class="text-right mt-2" action="" method="post">
                        <input class="form-control" type="text" placeholder="Почта" required>
                        <textarea class="form-control mt-2" placeholder="Текст" cols="30" rows="10"></textarea>
                        <input class="confirm-button mt-2" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="/public/assets/js/cart.js"></script>
</body>

</html>
