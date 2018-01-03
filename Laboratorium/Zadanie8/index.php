<?php
    require_once "db_data.php"
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

        <h2>Dane odczytane z pliku ustawie bazy danych</h2>
        <form action="connect.php" method="POST">
            <label for="db_server">Serwer bazy: </label><br>
            <input type="text" id="db_server" name="db_host" value="<?php echo $db_host; ?>"><br><br>
            <label for="db_user">User bazy: </label><br>
            <input type="text" id="db_user" name="db_user" value="<?php echo $db_user; ?>"><br><br>
            <label for="db_pass">Hasło usera: </label><br>
            <input type="text" id="db_pass" name="db_pass" value="<?php echo $db_pass; ?>"><br><br>
            <label for="db_name">Nazwa bazy: </label><br>
            <input type="text" id="db_name" name="db_name" value="<?php echo $db_name; ?>"><br><br>
            <input type="submit" value="Połącz z bazo">
        </form>

    <?php
        SESSION_START();
        if(isset($_SESSION['error']))
        {
            echo $_SESSION['error'];
            echo "<br/>";
            echo $_SESSION['error1'];
        }

    ?>
</body>
</html>