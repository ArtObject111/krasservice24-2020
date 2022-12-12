<?
  header("Content-Type:text/html; charset=UTF-8");//возня с кодировкой
  session_start();
  session_destroy();//удалить сессию
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8-BOM">
  <meta name="keywords" content="автомобили, двигатели, починка">
  <meta name="description" content="этот сайт нужен для донесения информации">
  <meta content="">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/engine.js"></script>
  <link href="img/love.png" rel="shortcut icon" type="image/x-icon"/>
  <title>Запись на чистку ГБЦ WSB в Красноярске</title>
</head>
<body>
  <div id="block1">
    <div id="logo"> <!-- Логотип (картинка с текстом) -->
      <a href="index.html"><img src="img/logo1.png" width="120" height="120" alt="Логотип" title="Главная"></a>
      <div id="text"><a href="index.html" title="Главная">EVROTECH24</a></div>
    </div>

    <div class="clear"><br /></div>
    <center>
      <span>Чистка ГБЦ в Красноярске</span>
      <div id="line_menu"><hr /></div>

       <div id="menuHrefs">
         <a href="index.html"><img class="marker1" src="img/balloon.png"><div class = "text_menu">Главная сраница</div><img class="marker2" src="img/balloon.png"></a>
         <a href="reg.php"><img class="marker1" src="img/balloon.png"><div class = "text_menu">Оставить заявку</div><img class="marker2" src="img/balloon.png"></a>
         <a href="about.php"><img class="marker1" src="img/balloon.png"><div class = "text_menu">О технологии</div><img class="marker2" src="img/balloon.png"></a>
         <a href="media.php"><img class="marker1" src="img/balloon.png"><div class = "text_menu">Примеры работ</div><img class="marker2" src="img/balloon.png"></a>
         <a href="contacts.php"><img class="marker1" src="img/balloon.png"><div class = "text_menu">Контакты</div><img class="marker2" src="img/balloon.png"></a>
       </div>
    </center>
  </div>
  <div id="page-wrap">
       <div id="content">
         <div id="calling"><div id="number">+7 983 269-61-69</div><img src="img/phone.png"></div>
         <div id="main_text_u">
           <p><?=$_SESSION["name"]?>, Ваша заявка успешно принята!</p><br/>
         </div>
       </div>
  </div>
  <footer>
    <div id="elements_footer">
    <!-- <span class="left">Все права защищены &copy; 2021</span>-->
     <div id="text_footer">
      <h3>Котактная информация</h3>
      <p>Адрес: г. Красноярск, пр-т. Красноярский рабочий, 123</p>
      <p>Тел. +7 (902) 986-14-15</p>
      <p>Эл. почта: <a href="mailto:krasservice24@gmail.com">krasservice24@gmail.com</a></p>
     </div>
     <div id="text_footer">
       <div class="w_hre">
        <h3>Карта сайта</h3>
        <a href="index.html">Главная</a>
        <a href="reg.php">Оставить заявку</a>
        <a href="about.php">О технологии</a>
        <a href="media.php">Примеры работ</a>
        <a href="contacts.php">Контакты</a>
      </div>
     </div>
     <div id = text_footer>
      <span class="right">Телеграм канал<a href="https://telegram.org/"><img src="img/tel.ico" alt="Telegram" title="Telegram"></a></span>
      <span class="right">Мы в Instagram<a href="https://www.instagram.com/"><img src="img/insta.png" alt="Instagram" title="Instagram"></a></span>
     </div>
    </div>
  </footer>
</body>
</html>
