<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
    <link rel="icon" href="img/flash-cards.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="/css/words.css" rel="stylesheet" type="text/css">
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


    if($mysql->connect_error){
        die("Ошибка: " . $mysql->connect_error);
    }
    $sql = "SELECT * FROM `words_$user`";
    if($result = $mysql->query($sql)){
        $rowsCount = $result->num_rows;
        echo "<div class= table-container>";
        echo "<h1>A list of your words</h1>";
        echo "<p>Words in your dictionary: $rowsCount</p>";
        echo "<hr/>";
        echo "<table><tr><th>Term</th><th>Definition</th></tr>";
        foreach($result as $row){
            echo "<tr>";
                echo "<td>" . $row["word"] . "</td>";
                echo "<td>" . $row["definition"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $result->free();
    } else{
        echo "Ошибка: " . $mysql->error;
    }
    ?>

      <div class="but">
        <button class="btn btn-danger" id="delWord" role="button"> Delete <i class='bx bx-trash'></i></button>
        <button class="btn btn-warning" id="edWord" role="button"> Edit <i class='bx bxs-edit'></i></button>
        <button class="btn btn-success" id="addWord" role="button"> Add <i class='bx bx-plus-circle'></i></button>
      </div>

      <div class="modal" id="delWindow">
          <div class="modal-content">
            <button class="closeModal-btn" id="close-btnDel"><i class='bx bx-x' style='color:#ff0000'  ></i></button>
            <h2>Word deletion</h2>
            <form action="/actions/wordDel.php" method="post">
              <div class="termD">
                <h3>Are you sure that you wanna delete <span id="output"></span> word?</h3>
                <input type="hidden" name="word" id="wordInput" value="">
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
                  <h3>Word: <span id="output2"></span></h3>
                  <input type="hidden" name="edit" id="edInput" value="">
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
            <form action="actions/addWord.php" method="post">
                <input type="text" class="form-control" name="word" id="word" placeholder="Type the word in English"><br>
                <input type="text" class="form-control" name="definition" id="definition" placeholder="Enter translation"><br>
                <button class="btn btn-outline-success" type="submit">Add word</button>
            </form>
          </div>
      </div>

      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="/js/words.js"></script>
    </body>
</html>
