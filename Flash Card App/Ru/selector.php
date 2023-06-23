<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Flash Card App</title>
        <link rel="icon" href="/img/flash-cards.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/selector.css">
    </head>
    <body>

        <header class="header">
            <nav class="navbar">
                <a href="/ru/core.php"><img src="/img/flash-cards.png" class="a-logo">Главная</a>
                <a href="/ru/info.php#about">О нас</a>
                <a href="/ru/info.php#services">Услуги</a>
                <a href="/ru/info.php#contact">Связь с нами</a>
            </nav>

            <div class="langSel">
                <select id="language-selector">
                <option value="russian">Русский</option>
                <option value="english">English</option>
                </select>
            </div>
        </header>

        <h1>Выберите набор карточек для изучения</h1>
        <div class="container">
            <div class="box" id="card1">
                <span></span>
                <div class="content">
                    <h2>Наиболее распространенные слова</h2>
                    <p>Здесь вы можете учить и повторять самые распространенные слова на английском языке каждый день!</p>
                </div>
            </div>

            <div class="box" id="card2">
                <span></span>
                <div class="content">
                    <h2>Сленговые карточки</h2>
                    <p>Учите сленговые фразы на английском языке с помощью этого набора карточек!</p>
                </div>
            </div>

            <div class="box" id="card3">
                <span></span>
                <div class="content">
                    <h2>Персональные карточки</h2>
                    <p>Создайте свой собственный, совершенно уникальный набор карточек. </p>
                </div>
            </div>
        </div>

        <script src="/js/selector.js"></script>  
    </body>
</html>