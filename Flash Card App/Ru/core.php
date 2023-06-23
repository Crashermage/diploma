<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flash Card App</title>
    <link rel="icon" href="/img/flash-cards.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/css/core.css">  
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
    
    
      <?php
        if($_COOKIE['user'] == ''):
          header('Location: /ru/index.php');
      ?>
      
      <?php else: ?>
    <div class = "table-container">
      <div class="content">
        <div class="hello-user">
            <h4>Привет <?=$_COOKIE['user']?></h4>
            <a href="/actions/exit.php" class="btn btn-danger" role="button">Выйти <i class='bx bx-door-open'></i></a>
        </div>
        <hr/>
        <h1>Добро пожаловать в приложение Флеш карточек для изучения английского языка</h1><br>
        <h3>С чего бы вы хотели начать?</h3><br>

        <div class="but-func">
          <a href="/ru/words.php" class="btn btn-warning" role="button"> <i class='bx bx-book-bookmark'></i> Мой словарь</a>
          <a href="/ru/selector.php" class="btn btn-success" role="button"> <i class='bx bxs-carousel'></i> Флэш карточки</a>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <script src="/js/core.js"></script>
  </body>
</html>
