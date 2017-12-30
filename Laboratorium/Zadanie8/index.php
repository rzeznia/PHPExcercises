<?php
    SESSION_START();
    require_once "db_data.php"
?>
<html>
<head>
</head>
<body>
    <h1>Zadanie 8</h1><br><br>
    <h3>Z poziomu phpmyadmin proszę utworzyć bazę danych o dowolnej nazwie,
        a w niej tabelę z kolumnami login i hasło. Napisz skrypt, który połączy się z
        tabelą i wyświetli jej zawartość w postaci tabelarycznej. Uwzględnij brak
        połączenia z tabelą.</h3>
    <?php
        echo '<form method="POST">';
        echo "<b>Odnaleziono dane bazy</b><br>";
        echo "host: ".$db_host."<br>";
        echo "user: ".$db_user."<br>";
        echo "pass: ".$db_pass."<br>";
        echo "name: ".$db_name."<br><br>";
        echo '<input type="submit" name="trigger" value="Połącz z bazo">';
        $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
        if($connection->connect_errno !=0)
        {
            echo "Błąd połączenia z bazą! Więcej informacji: ";
            echo $connection->connect_error;
        }
        else
        {
            if($result = $connection->query("SELECT * FROM users"))
            {
                echo "dupa";
            }
        }    
       
       
       
    ?>       
    
        
        

</body>
</html>