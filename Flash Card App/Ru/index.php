<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Card App</title>
    <link rel="icon" href="/img/flash-cards.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>

    <header class="header">
      <nav class="navbar">
        <a href="/ru/index.php">Главная</a>
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

    <div class="container">
      <div class="content">
        <h2 class="logo"> <img src="/img/flash-cards.png"> Flash Card App </h2>

        <div class="text-sci">
          <h2>Добро пожаловать!<br><span>На наш новый веб-сайт для обучения</span></h2>

          <p> Здесь вы можете начать свое путешествие по изучению английского языка с помощью флэш-карт. Мы желаем вам успехов!</p>

          <div class="social-icons">
            <a href=""><i class='bx bxl-instagram'></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href=""><i class='bx bxl-vk' ></i></a>
            <a href=""><i class='bx bxl-facebook'></i></a>
          </div>
        </div>
      </div>

      <div class="logreg-box">
        <div class="form-box login">
          <form action="/actions/auth.php" method="post">
            <h2>Войти</h2>

            <div class="input-box">
              <span class="icon"><i class='bx bx-envelope'></i></span>
              <input type="text" required name="loginA" >
              <label>Логин</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
              <input type="password" required name="passA" >
              <label>Пароль</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox"> Запомнить меня</label>
              <a href="#">Забыли пароль?</a>
            </div>

            <button type="submit" class="btn">Войти</button>

            <div class="login-register">
              <p>У вас нету аккаунта? <a href="#" class="register-link">Зарегистрироваться</a></p>
            </div>
          </form>
        </div>

        <div class="form-box register">
          <form action="/actions/reg.php" method="post">
            <h2>Регистрация</h2>

            <div class="input-box">
              <span class="icon"><i class='bx bx-user'></i></span>
              <input type="text" required name="loginR">
              <label>Логин</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bx-envelope' ></i></span>
              <input type="text" required name="email">
              <label>Email</label>
            </div>

            <div class="input-box">
              <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
              <input type="password" required name="passR">
              <label>Пароль</label>
            </div>

            <div class="remember-forgot">
              <label><input type="checkbox"> Я согласен с правилами и условиями </label>
            </div>

            <button type="submit" class="btn">Зарегистрироваться</button>

            <div class="login-register">
              <p>У вас уже есть аккаунт? <a href="#" class="login-link">Войти</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="/js/script.js"></script>
  </body>
</html>