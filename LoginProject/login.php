<?php
   require_once "db_data.php";

   $login = $_POST['login'];
   $haslo = $_POST['haslo'];
   if($login == null || $haslo == null)
   {
       echo "W formlualrzu wsytąpił błąd";
   }
   $connection = @new mysqli($host,$user,$password,$db);
   if($connection->connect_errno != 0)
   {
       echo $connection->connect_errno;
   }else
   {
        $sql = "SELECT * FROM uzytkownicy WHERE user = '$login' AND pass = '$haslo'";
        if($result = @$connection->query($sql))
        {
            $numOfUsers = $result->num_rows;
            if($numOfUsers > 0)
            {
                $row = $result->fetch_assoc();
                $user = $row['user'];               
                $result->close();
                header('Location: info.php');
            }
        }    
    }   

    $connection->close();
   
?>
