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
        <a href="#"><img src="/img/flash-cards.png" class="a-logo">Home</a>
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
    
    
      <?php
        if($_COOKIE['user'] == ''):
          header('Location: /index.php');
      ?>
      
      <?php else: ?>
    <div class = "table-container">
      <div class="content">
        <div class="hello-user">
            <h4>Hello <?=$_COOKIE['user']?></h4>
            <a href="/actions/exit.php" class="btn btn-danger" role="button">Exit <i class='bx bx-door-open'></i></a>
        </div>
        <hr/>
        <h1>Welcome to the Flash Cards app for learning English</h1><br>
        <h3>Where would you like to start?</h3><br>

        <div class="but-func">
          <a href="/words.php" class="btn btn-warning" role="button"> <i class='bx bx-book-bookmark'></i> My Dictionary</a>
          <a href="/selector.php" class="btn btn-success" role="button"> <i class='bx bxs-carousel'></i> Flash Cards</a>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <script src="/js/core.js"></script>
  </body>
</html>
