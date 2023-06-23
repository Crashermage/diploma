<?php
  $login = filter_var(trim($_POST['loginA']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['passA']),
  FILTER_SANITIZE_STRING);

  $pass = md5($pass."regregj343");

  $mysql = new mysqli('172.20.8.5:3306', 'st9903_11','pwd9903_11','st9903_11');

  $result = $mysql->query("SELECT * FROM `user` WHERE `login` =
  '$login' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();
  if($user == 0) {
    echo "<script>alert('Имя пользователя либо пароль введены неверно');
    window.location = '/core.php';
    </script>";
  }
  else {
  setcookie('user', $user['login'], time() + 3600, "/");

  $mysql->close();

  echo "<script>
    if (document.referrer.indexOf('ru/index.php') > -1) {
      window.location.href = '/ru/core.php';
    } 
    else {
      window.location.href = '/core.php';
    }
    </script>";
  }
 ?>
