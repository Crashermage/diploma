<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Card App</title>
    <link rel="icon" href="img/flash-cards.png" type="image/x-icon"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="/css/info.css">  
  </head>

  <body>

    <header class="scroll-header">
      <nav class="navbar">
        <a href="/core.php"><img src="/img/flash-cards.png" class="a-logo">Home</a>
        <a href="/info.php#about">About</a>
        <a href="/info.php#services">Services</a>
        <a href="/info.php#contact">Contact</a>
      </nav>

      <div class="navFunc">
        <a href="/ru/core.php" id="getStarted" class="btn btn-success" role="button"> <i class='bx bxs-carousel'></i> Get started!</a>
        <div class="langSel">
          <select id="language-selector">
            <option value="english">English</option>
            <option value="russian">Русский</option>
          </select>
        </div>
      </div>
    </header>
    
    <div class = "table-container" id="about">
      <div class="content">
        <h1 class ="title"><i class='bx bx-info-circle bx-tada' style='color:#d86069'  ></i> About Us:</h1>
        <hr/>
        <h2>Welcome to the Flash Card App, our website is a web application where the user can
          learn English through flash cards.
        </h2><br>

        <h2> <img src="/img/Designer.png" alt=""></h2>

        

        <h1 class="title" id="services"><i class='bx bxs-basket' style='color:#3d80bd'  ></i> Services provided</h1>
        <hr/>

        <h2>Our application provides a free, convenient application with the ability to work with the database, create, delete and 
          edit your flash cards with an easy-to-use, minimalist design.
        </h2><br>

        <h2> <img class="infImg" src="/img/Des1.gif" alt=""></h2></br>

        <div class="contact" id="contact">
          <h1 class="title"><i class='bx bxs-phone-call bx-tada' style='color:#6fd7a3' ></i> Contact Us</h1>
          <hr/>
          <h2>You can contact us in the following ways: <h2>
          <h2>Contact phone number: 8 (964)-311-01-47 </h2> 
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
