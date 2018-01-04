<DOCTYPE html>
<html lang ="pl">
<head>   
</head>
<body>
    <h2>Zadanie 9</h2>
    <h4>Napisz skrypt, który będzie sprawdzał czy istnieje połączenie z konkretną 
    tabelą znajdującą się w konkretnej bazie danych..</h4>
    <?php
        SESSION_START();
        if(!isset($_POST['base'])||(!isset($_POST['table'])))
        {
            $_SESSION['error'] = "Nieprawidłowe dane formularza";
            //header('Location: index.php');
            exit();
        }
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = $_POST['base'];
        $db_table = $_POST['table'];
        $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
        if($connection->connect_errno != 0)
        {
            $_SESSION['error'] = "Brak połączenia";
            header('Location: index.php');
            exit();
        }
        else
        {
            $result = $connection->query("SHOW TABLES LIKE '".$db_table."'");
            if(mysqli_num_rows($result) > 0)
            {
                $_SESSION['error'] = "Jest połączenie";
                header('Location: index.php');
            }
            else
            {
                $_SESSION['error'] = "Brak połączenia2";
                header('Location: index.php');
            }
        }
        $connection->close();

    ?>

</body>
</html> 