<?php
    $editValue = filter_var(trim($_POST['edit']), FILTER_SANITIZE_STRING);
    $change = filter_var(trim($_POST['change']), FILTER_SANITIZE_STRING);
    $defChange = filter_var(trim($_POST['defChange']), FILTER_SANITIZE_STRING);
    $user = $_COOKIE['user'];

    $mysql = new mysqli('172.20.8.5:3306', 'st9903_11','pwd9903_11','st9903_11');

    $mysql->query("UPDATE `words_$user` SET `word` = '$change', `definition` = '$defChange'  WHERE `word` = '$editValue'");


    echo "<script>
    if (document.referrer.indexOf('/ru/app.php') > -1) {
      window.location.href = '/ru/app.php';
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