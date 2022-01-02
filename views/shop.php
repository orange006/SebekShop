<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Магазин</title>
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

    <div class="container">
        <div class="d-flex flex-column flex-lg-row catalog">
            <section class="filter d-flex flex-column">
                <div class="filter__title">Категории</div>

                <div class="d-flex flex-column mt-1 mb-3">
                    <a href="/clothes" class="filter__category">Одежда</a>
                    <a href="/covers" class="filter__category">Чехли</a>
                    <a href="/smoke" class="filter__category">Мундштуки</a>
                    <a href="#" class="filter__category">Все товари</a>
                </div>
            </section>

            <div class="product-cards d-flex flex-wrap">
            <?php foreach($data as $key => $value) : ?>
                <?php foreach($value as $row) : ?>
                <a href="<?=$key;?>/product?id=<?=$row['id'];?>" class="product-card d-flex flex-column justify-content-between mt-2">
                    <div><img class="product-card__image" src="/public/assets/images/<?=$row['img'];?>" alt="t-shirt"></div>
                    <div class="product-card__title mt-3"><?=$row['name'];?></div>
                    <div class="product-card__price mt-1"><?=$row['price'];?></div>
                </a>
                <? endforeach; ?>
            <? endforeach; ?>
            </div>
        </div>
    </div>

    <script src="/public/assets/js/cart.js"></script>
</body>

</html>
