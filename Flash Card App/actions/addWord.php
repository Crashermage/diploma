<?php
  $word = filter_var(trim($_POST['word']),
  FILTER_SANITIZE_STRING);
  $definition = filter_var(trim($_POST['definition']),
  FILTER_SANITIZE_STRING);
  

  if (empty($word) || empty($definition)) {
    echo "<script>
    window.location = '/app.php';
    alert('Вы не заполнили одно из значений');
    </script>";
    exit();
}

  $mysql = new mysqli('172.20.8.5:3306', 'st9903_11','pwd9903_11','st9903_11');
  $user = $_COOKIE['user'];

  $mysql->query("INSERT INTO `words_$user` (`word`,`definition`)
  VALUES('$word','$definition')");
  //Тест на ошибки к БД запросы
  // if ($mysql->errno) {
  //   echo "Ошибка базы данных: " . $mysql->error;
  // }

  echo "<script>
    if (document.referrer.indexOf('/ru/app.php') > -1) {
      window.location = '/ru/app.php'; 
    } 
    else if (document.referrer.indexOf('/ru/words.php') > -1) {
      window.location = '/ru/words.php';
    } 
    else if (document.referrer.indexOf('/words.php') > -1) {
      window.location = '/words.php';
    }
    else {
      window.location.href = '/app.php';
    }
    

    </script>";

 ?>
