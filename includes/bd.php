<?php

    session_start();
    require_once 'connect.php';

    $add = $_POST['add'];
    $sub = $_POST['sub'];

if ($add) {

        mysqli_query($connect, "INSERT INTO `users` (`ID`, `name`)  VALUES (NULL, '$add')");

        $_SESSION['message'] = 'Напій додано!';
        header('Location: ../Lab7_1.php');
}
if ($sub) {

        mysqli_query($connect, "DELETE FROM `users` WHERE name='$sub'");

        $_SESSION['message'] = 'Напій видалено!';
        header('Location: ../Lab7_1.php');
}
 if (isset($_POST['all'])) {
    $sql = "SELECT * FROM users";
    if($result = $connect->query($sql)){
    foreach($result as $row){
         
        $userid = $row["ID"];
        
        $username = $row["name"];
        echo "<h1>".$userid." ".$username."</h1>";
    }
}
}
?>