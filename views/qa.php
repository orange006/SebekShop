<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Вопрос-ответ</title>
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

    <section class="qa">
        <div class="container">
            <div class="mb-3">
                <div class="qa__question">
                    Почему так дорого?
                </div>
                <div class="qa__answer">
                    Мы используем одни из самых дорогих тканей, материалов в наших изделиях, когда весь рынок нацелен на дешевое производство.
                </div>
            </div>

            <div class="mb-3">
                <div class="qa__question">
                    Что в вашем товаре уникального от других?
                </div>
                <div class="qa__answer">
                    Смелость, в первую очередь. Нам плевать что написано на футболке, главное - удобство. Мы уделяем внимание ко всем мелочам - наши бирки тому подтверждение.
                </div>
            </div>

            <div class="mb-3">
                <div class="qa__question">
                    Что по качеству?
                </div>
                <div class="qa__answer">
                    Мы не делаем то, чего сами бы не носили.
                </div>
            </div>

            <div class="mb-3">
                <div class="qa__question">
                    Сколько доставка идет?
                </div>
                <div class="qa__answer">
                    По России, СНГ и Европе 2 - 3 недели без учета выходных, праздников и форс-мажорных обстоятельств. По Украине 1-3 дня.
                </div>
            </div>
        </div>
    </section>

    <script src="/public/assets/js/cart.js"></script>
</body>

</html>
