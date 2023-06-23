<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flash Card App</title>
    <link rel="icon" href="/img/flash-cards.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
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
      $mysql = new mysqli('172.20.8.5:3306', 'st9903_11','pwd9903_11','st9903_11');
      $sqlc = "SELECT word, definition FROM words_slang";
      $col = $mysql->query($sqlc);
      $rowsCount2 = $col->num_rows;
      $selectedWord = $_POST['word'];
    ?>
    


    <div class="containerG">
      <div class="leftM">
        <h3>Сленговые карточки</h3>
        <h4> <i class='bx bxs-copy'></i> Количество карт:  <?=$rowsCount2?> </h4>
      </div>
      <div class = "container">
      <div class="card">
        <div class="front">
          <div class="term">
            <h3> <?php echo $rows2["word"]; ?></h3>
          </div>

          <p> <i class='bx bxs-hand-up'></i> Показать определение</p>
        </div>

        <div class="back">
          <div class="definition">
            <h3> <?php echo $rows2["definition"]; ?></h3>
            <div class="termBack">
              <p> <?php echo $rows2["word"]; ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="but">
        <a href="#" class="btn btn-outline-light" onclick="updateWords_slang()" role="button"> Следующее слово </a>
      </div>
      
      </div>
      <div class="item">
        
      </div>
    </div>

   

      

    <script src="/js/app_slang.js"></script>
  </body>
</html>
