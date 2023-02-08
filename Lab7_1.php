<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>Khmilʹne</title>
     <link rel="shortcut icon" href="beer_3630.ico" type="image/x-icon">
     <link rel='stylesheet' type='text/css' href='Lab7_1.css'>
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
        <h4>Під'їхала нова лабка, а з нею і нова сторінка...<br>Тут я створив імітацію простої бази данних асортименту напоїв з імітованого магазину хмільного, тож ви, як імітований власник цього закладу можете тут щось змінити:</h4>
         <form method='post'  action='includes\bd.php'>
             <p>Зробіть свій вибрір:</p>
             <p> Додати: <input type="text" name="add" /><br /></p>
             <p> Видалити: <input type="text" name="sub" /><br /></p>
             <p><input type="submit" value="Тиць!" /></p>
             <p><input type='submit' value='Вивести весь асортимент' name='all' /></p>
         
             <?php
            
             
            require_once 'includes\connect.php';


    $sql = "SELECT * FROM users";
    if($result = $connect->query($sql)){
    foreach($result as $row){
         
        $userid = $row["ID"];
        
        $username = $row["name"];
        echo "<h1>".$userid." ".$username."</h1>";
    }
}
                 
            if (isset($_SESSION['message'])) {
                echo '<p> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
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