<?php
    session_start();
    require_once "db_data.php";
    if((!isset($_POST['login'])) || (!isset($_POST['haslo'])));
    {
        $_SESSION['error'] = '<span style="color:red">Podano nieprawiłowe dane logowania</span>';
        header('Location: index.php');
        exit();
    }
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
                $_SESSION['isloggedin'] = true;
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];   
                $_SESSION['user'] = $row['user'];  
                $_SESSION['kabona'] = $row['kabona'];             
                unset($_SESSION['error']);
                $result->close();
                header('Location: info.php');
            }
            else
            {
                $_SESSION['error'] = '<span style="color:red">Podano nieprawiłowy login lub hasło</span>';
                header('Location: index.php');
            }
        }    
    }   

    $connection->close();
   
?>
