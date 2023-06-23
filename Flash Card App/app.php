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
    <script src="/js/app.js" defer></script>
  </head>

  <body>

    <header class="header">
      <nav class="navbar">
        <a href="/core.php/"><img src="/img/flash-cards.png" class="a-logo">Home</a>
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
      $mysql = new mysqli('172.20.8.5:3306', 'st9903_11','pwd9903_11','st9903_11');
      $user = $_COOKIE['user'];
      $sqlc = "SELECT word, definition FROM words_$user";
      $col = $mysql->query($sqlc);
      $rowsCount2 = $col->num_rows;
      $selectedWord = $_POST['word'];
    ?>
    


    <div class="containerG">
      <div class="leftM">
        <h3>Personal cards</h3>
        <h4> <i class='bx bxs-copy'></i> Number of cards:  <?=$rowsCount2?> </h4>
      </div>
      <div class = "container">
      <div class="card">
        <div class="front">
          <div class="term">
            <h3> <?php echo $rows2["word"]; ?></h3>
          </div>

          <p> <i class='bx bxs-hand-up'></i> Show definition</p>
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
        <a href="#" class="btn btn-outline-light" onclick="updateWords()" role="button"> Next word </a>
        <button class="btn btn-outline-light" id="delWord" role="button"> <i class='bx bx-trash'></i></button>
        <button class="btn btn-outline-light" id="edWord" role="button"> <i class='bx bxs-edit'></i></button>
        <button class="btn btn-outline-light" id="addWord" role="button"> <i class='bx bx-plus-circle'></i></button>
      </div>
      </div>
      <div class="item">
        
      </div>
    </div>

    <div class="modal" id="delWindow">
          <div class="modal-content">
            <button class="closeModal-btn" id="close-btnDel"><i class='bx bx-x' style='color:#ff0000'  ></i></button>
            <h2>Word deletion</h2>
            <form action="/actions/wordDel.php" method="post">
              <div class="termD">
                <h3>Are you sure that you wanna delete <?php echo $_POST['word']; ?>"> word?</h3>
                <input type="hidden" name="word" value="<?php echo $rows2['word']; ?>">
              </div>
              <button class="btn btn-outline-danger" type="submit">Delete</button>
              <button id="cancel-btnDel"  type="button" class="btn btn-outline-primary">Cancel</button>
            </form>
          </div>
      </div>

      <div class="modal" id="edWindow">
          <div class="modal-content">
            <button class="closeModal-btn" id="close-btnEd"><i class='bx bx-x' style='color:#ff0000'  ></i></button>
            <h2>Editing the word</h2>
            <form action="/actions/editWord.php" method="post">
                <div class="termEd">
                  <h3>Word: <span><?php echo $rows2["word"];?></span></h3>
                  <input type="hidden" name="edit" value="<?php echo $rows2['word']; ?>">
                </div>
                <input type="text" class="form-control" name="change" id="change" placeholder="Enter the new term"><br>
                <input type="text" class="form-control" name="defChange" id="defChange" placeholder="Enter the new definition"><br>
                <button class="btn btn-outline-warning" type="submit">Edit</button>
            </form>
          </div>
      </div>

      <div class="modal" id="addWindow">
          <div class="modal-content">
            <button class="closeModal-btn" id="close-btnAdd"><i class='bx bx-x' style='color:#ff0000'  ></i></button>
            <h2>Adding the word</h2>
            <form action="/actions/addWord.php" method="post">
                <input type="text" class="form-control" name="word" id="word" placeholder="Enter the word in English"><br>
                <input type="text" class="form-control" name="definition" id="definition" placeholder="Enter translation"><br>
                <button class="btn btn-outline-success" type="submit">Add word</button>
            </form>
          </div>
      </div>
  </body>
</html>
