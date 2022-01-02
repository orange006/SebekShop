<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebek-shop | Продукт</title>
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
            <div><img class="product__image" data-value="/public/assets/images/<?= $data['img']; ?>" src="/public/assets/images/<?= $data['img']; ?>" alt="t-shirt"></div>

            <div class="product__info ml-lg-5 ml-0 mt-lg-0 mt-5">
                <div class="product__title" data-value="<?= $data['name']; ?>"><?= $data['name']; ?></div>
                <div class="product__price mt-3" data-value="<?= $data['price']; ?>"><?= $data['price']; ?></div>
                <div class="product__subtitle mt-3"><?= $data['description']; ?></div>
                <div class="product__tag mt-3"><span>Материал</span><?= $data['material']; ?></div>
                <div class="product__tag mt-3"><span>Размер</span>
                    <?php $sizes = explode(" ", $data['size']); ?>
                    <select id="size">
                        <?php foreach ($sizes as $size) : ?>
                            <option value="<?= $size ?>"><?= $size ?></option>
                        <?php endforeach ?>
                    </select>

                <div><button onclick="addToCart()" class="confirm-button mt-4">Добавить в корзину</button></div>
                </div>
            </div>
        </div>

        <script src="/public/assets/js/cart.js"></script>
</body>

</html>
