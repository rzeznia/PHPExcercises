<DOCTYPE html>
<html lang ="pl">
<head>   
</head>
<body>
    <h2>Zadanie 9</h2>
    <h4>Napisz skrypt, który będzie sprawdzał czy istnieje połączenie z konkretną 
    tabelą znajdującą się w konkretnej bazie danych..</h4>
    <br>
    <form action="checker.php" method="POST">
        <label for="base">Baza danych: </label>
        <input type="text" id="base" name="base" value="lab2_8">
        <label for="table">Baza danych: </label>
        <input type="text" id="table" name="table" value="users">
        <input type="submit" value="Sprawdź">
    </form>
    <?php
        SESSION_START();
        if(isset($_SESSION['error']))
        {
            echo $_SESSION['error'];    
        }
        
    ?>

</body>
</html> 