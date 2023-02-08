<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Khmilʹne</title>
     <link rel="shortcut icon" href="beer_3630.ico" type="image/x-icon">
     <link rel='stylesheet' type='text/css' href='Lab7_2.css'>
 </head>
 <body>
   <header>
        <div class='logo'>
        Khmilʹne  
        <img src='beer_3630.png' width='38px'>
        </div>
        <div class='menu'>
        <ul>
            <li><a href='Lab7_1.php'>БД</a></li>
            <li><a href='Lab6_5.html'>Скриптик з графіком</a></li>
            <li><a href='Lab6_4.html'>Скриптик з мемом</a></li>
            <li><a href='Lab6_3.html'>Відео</a></li>
            <li><a href='Lab6_2.html'>Карта</a></li>
            <li><a href="Lab6_1.html">Головна</a></li>
        </ul>
        </div>
    </header>
     <div class='mainblock'>
        <h4>Введіть свої дані, шановний!</h4>
         <form method='post'  action='includes\signup.php'>
             <p> Прізвище та ім'я <input type="text" name="name" /><br /></p>
             <p> Логін <input type="text" name="login" /><br /></p>
              <p> e-mail <input type="email" name="mail" /><br /></p>
             <p> Пароль <input type="password" name="pass1" /><br /></p>
             <p> Повторіть пароль <input type="password" name="pass2" /><br /></p>  
        <p><input type="submit" value="Тиць!" /></p>
             <?php 
             if ($_SESSION['message']) {
             echo "<p>".$_SESSION['message']."</p>"; }
                unset($_SESSION['message']);?> 
         </form>
         
     </div>
    <footer>
         <p>
        <b>Автор:<br>
        студент групи ФБ-03<br>
        Борох Іван<br>
        <a href='boriv-ipt24@lll.kpi.ua'>boriv-ipt24@lll.kpi.ua</a></b>
         </p>
    </footer>
 </body>
</html>