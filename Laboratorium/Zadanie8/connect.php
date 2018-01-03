<?php
    SESSION_START();
?>
<html>
<head>
</head>
<body>
    <h1>Zadanie 8</h1><br>
    <h3>Z poziomu phpmyadmin proszę utworzyć bazę danych o dowolnej nazwie,
        a w niej tabelę z kolumnami login i hasło. Napisz skrypt, który połączy się z
        tabelą i wyświetli jej zawartość w postaci tabelarycznej. Uwzględnij brak
        połączenia z tabelą.</h3>
   
    <?php
        if(!isset($_POST['db_host']))
        {
            $_SESSION['error'] = "BŁĄD, nieprawidłowo wypełniony formularz";
            $_SESSION['error1'] = "Fallback to index.php";    
            header('Location: index.php');
            exit();
        }
        $db_host_POST = $_POST['db_host'];
        $db_user_POST = $_POST['db_user'];
        $db_pass_POST = $_POST['db_pass'];
        $db_name_POST = $_POST['db_name'];
        
        $connection = new mysqli($db_host_POST,$db_user_POST,$db_pass_POST,$db_name_POST);
        echo "Logowanie z uzyciem danych: host:<b>".$db_host_POST." </b>user: <b>".$db_user_POST."</b> pass: <b>".$db_pass_POST."</b> base name: <b>".$db_name_POST."</b>";
        if($connection->connect_errno !=0)
        {
            $_SESSION['error'] = "Błąd połączenia z bazą! Więcej informacji: <br>";
            $_SESSION['error1'] = $connection->connect_error;
            header('Location: index.php');
            exit();
        }
        else
        {
            if($result = $connection->query("SELECT * FROM users"))
            {
                echo "<h2>Pomyślnie połączono z bazą<h2>";
                unset($_SESSION['error']);
                unset($_SESSION['error1']);
                echo "<h2>Odczytane dane:</h2>";
echo<<<END
                <tr>
                    <th>id</th>
                    <th>  user  </th>
                    <th>  pass  </th>
                </tr>   <br>             
END;
                while($row = mysqli_fetch_array($result))
                {   //Creates a loop to loop through results
                    echo "<tr><td>" . $row['id'] . " </td><td> " . $row['user'] . " </td><td> ".$row['pass']." </td></tr> <br>";  //$row['index'] the index here is a field name
                }
                echo '<br><a href="index.php">Powrót do strony głównej</a>';
            }
        }
        $connection->close();  
    ?>   
       
       
         
    
        
        

</body>
</html>