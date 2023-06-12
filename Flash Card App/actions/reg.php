<?php
$login = filter_var(trim($_POST['loginR']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['passR']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
    echo "<script>
    window.location = '/core.php';
    alert('Недопустимая длинна логина');
    </script>";
    exit();
} else if (mb_strlen($pass) < 3 || mb_strlen($pass) > 50) {
    echo "<script>
    window.location = '/core.php';
    alert('Недопустимая длина пароля');
    </script>";
    exit();
} else if (mb_strlen($email) < 5 || mb_strlen($email) > 100) {
    echo "<script>
    window.location = '/core.php';
    alert('Недопустимая длина почты');
    </script>";
    exit();
}
  else if (strpos($email, '@') === false) {
    echo "<script>
    window.location = '/core.php';
    alert('Email должен содержать символ @');
    </script>";
    exit();
}

$pass = md5($pass . "regregj343");

$mysql = new mysqli('172.20.8.5:3306', 'st9903_11', 'pwd9903_11', 'st9903_11');

// Проверяем наличие пользователя с таким логином в базе данных
$existingUser = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login'");

if ($existingUser->num_rows > 0) {
    echo "<script>
    window.location = '/core.php';
    alert('Пользователь с таким логином уже существует');
    </script>";
    exit();
}

// Регистрация нового пользователя
$mysql->query("INSERT INTO `user` (`login`, `pass`, `email`) VALUES ('$login', '$pass', '$email')");
$mysql->query("CREATE TABLE `words_$login` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `word` varchar(32) CHARACTER SET utf8 NOT NULL,
    `definition` varchar(32) CHARACTER SET utf8 NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
  ");

$mysql->close();

header('Location: /');
?>
