<?php
    session_start();
    require_once "db_data.php";
    if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        $_SESSION['error'] = '<span style="color:red">Podano nieprawiłowe dane logowania</span>';
        header('Location: index.php');
        exit();
    }
   $login = $_POST['login'];
   $haslo = $_POST['haslo'];
   $login = htmlentities($login, ENT_QUOTES, "UTF-8");
   $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
   echo $login;
   echo $haslo;
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
        if($result = @$connection->query(
            sprintf("SELECT * FROM uzytkownicy WHERE user = '%s' AND pass = '%s'",
            mysqli_real_escape_string($connection,$login),
            mysqli_real_escape_string($connection,$haslo))))
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
