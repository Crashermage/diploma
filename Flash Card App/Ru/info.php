<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Card App</title>
    <link rel="icon" href="/img/flash-cards.png" type="image/x-icon"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/css/info.css">  
  </head>

  <body>

    <header class="scroll-header">
      <nav class="navbar">
        <a href="/ru/core.php"><img src="/img/flash-cards.png" class="a-logo">Главная</a>
        <a href="/ru/info.php#about">О нас</a>
        <a href="/ru/info.php#services">Услуги</a>
        <a href="/ru/info.php#contact">Связь с нами</a>
      </nav>

      <div class="navFunc">
        <a href="/core.php" id="getStarted" class="btn btn-success" role="button"> <i class='bx bxs-carousel'></i> Начать!</a>
        <div class="langSel">
          <select id="language-selector">
            <option value="russian">Русский</option>
            <option value="english">English</option>
          </select>
        </div>
      </div>
    </header>
    
    <div class = "table-container" id="about">
      <div class="content">
        <h1 class ="title"><i class='bx bx-info-circle bx-tada' style='color:#d86069'  ></i> О нас:</h1>
        <hr/>
        <h2>Добро пожаловать в приложение Flash Card App, наш сайт представляет собой web-приложение, в котором пользователь может в удобном формате
          изучать английский язык, по средствам флеш карточек.
        </h2><br>

        <h2> <img src="/img/Designer.png" alt=""></h2>

        

        <h1 class="title" id="services"><i class='bx bxs-basket' style='color:#3d80bd'  ></i> Предоставляемые услуги</h1>
        <hr/>

        <h2>Наше приложение предоставляет бесплатное, удобное приложение с возможностью работы с базой данных, создания, удаления и 
          редактирования ваших флеш карточек c понятным в освоении минималистичным дизайном.
        </h2><br>

        <h2> <img class="infImg" src="/img/Des1.gif" alt=""></h2></br>

        <div class="contact" id="contact">
          <h1 class="title"><i class='bx bxs-phone-call bx-tada' style='color:#6fd7a3' ></i> Связь с нами</h1>
          <hr/>
          <h2>Вы можете связаться с нами следующими образами: <h2>
          <h2>Контактный номер телефона: 8 (964)-311-01-47 </h2> 
          <div class="social-icons">
            <a href="https://instagram.com/untily0ung?igshid=MzRlODBiNWFlZA=="><i class='bx bxl-instagram' style='color:#d9174a' ></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href="https://vk.com/oo00o00o"><i class='bx bxl-vk' ></i></a>
          </div>

        </h2></br>
      </div>
    </div>
    <script src="/js/info.js"></script>
  </body>
</html>
