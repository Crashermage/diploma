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
                <a href="/core.php"><img src="/img/flash-cards.png" class="a-logo">Home</a>
                <a href="/info.php#about">About</a>
                <a href="/info.php#services">Services</a>
                <a href="/info.php#contact">Contact</a>
            </nav>

            <div class="langSel">
                <select id="language-selector">
                <option value="english">English</option>
                <option value="russian">Русский</option>
                </select>
            </div>
        </header>

        <h1>Choose a set of cards to study</h1>
        <div class="container">
            <div class="box" id="card1">
                <span></span>
                <div class="content">
                    <h2>The most common words</h2>
                    <p>Here you can learn and repeat the most common words in English every day!</p>
                </div>
            </div>

            <div class="box" id="card2">
                <span></span>
                <div class="content">
                    <h2>Slang Cards</h2>
                    <p>Learn slang phrases in English with this set of cards!</p>
                </div>
            </div>

            <div class="box" id="card3">
                <span></span>
                <div class="content">
                    <h2>Personal cards</h2>
                    <p>Create your own, completely unique set of cards. </p>
                </div>
            </div>
        </div>

        <script src="/js/selector.js"></script>  
    </body>
</html>