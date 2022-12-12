<?php
header("Content-Type:text/html; charset=UTF-8");//возня с кодировкой
session_start();
  //session_destroy();//удалить сессию
  if(isset($_POST["send"])) {
    $to = "automotors24@mail.ru";
    $subject = "Заказчик";
    $name = htmlspecialchars ($_POST["name"]);
    $tel = htmlspecialchars ($_POST["tel"]);
    $email = htmlspecialchars ($_POST["email"]);
    $comment = htmlspecialchars ($_POST["comment"]);
    $base = "$name\nТел. $tel\nДоп. информация:\n$comment";
    $_SESSION["name"] = $name;
    $_SESSION["tel"] = $tel;
    $_SESSION["email"] = $email;
    $_SESSION["comment"] = $comment;
    $error_name = "";
    $error_tel = "";
    $error_email = "";
    $error = false;

    if($name == "") {
      $error_name = "*Введите имя";
      $error = true;
    }

    if($tel == "") {
      $error_tel = "*Введите номер тел.";
      $error = true;
    }

    if($email == "") {
      $error_email = "*Введите эл. почту";
      $error = true;
    }

    if(!$error) {
      $subject = "=?utf-8?B?".base64_encode($subject)."?=";//кодировка для mail.ru
      $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
      mail ($to, $subject, $base, $headers);
      header ("Location:success.php");
      exit;
    }
  }
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
         <div id="main_text_reg">
           <h3>Запишитесь на чистку ГБЦ &#8212; мы Вам перезвоним!</h3>
           <form class="check_in" action="" method="post">
             <label for="name">Имя, Фамилия:</label>
             <input type="text" name="name" placeholder="Имя Фамилия" value="<?=$_SESSION["name"]?>" />
             <span><?=$error_name?></span><br/>
             <label for="tel">Номер тефона:</label>
             <input type="tel" name="tel" placeholder="+7 (999) 999-99-99" value="+7" pattern="\+7\s?[0-9]{10}" />
             <span><?=$error_tel?></span><br/>
             <label for="email">Эл. почта:</label>
             <input type="email" name="email" placeholder="emailadress@example.ru" value="<?=$_SESSION["email"]?>" />
             <span><?=$error_email?></span><br/>
             <label for="comment">Комментарии к заявке:</label>
             <textarea type="text" name="comment" placeholder="Здесь можете указать марку, модель, год выпуска автомобиля и т.д"><?=$_SESSION["comment"]?></textarea><br/>
             <input type="submit" id="send" name="send" value="Отправить" />
           </form>
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
