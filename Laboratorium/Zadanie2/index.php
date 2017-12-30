<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który pozwoli na wpisanie w osobnych polach tekstowych
formularza loginu, hasła i powtórzenia hasła. Skrypt musi reagować na
niewprowadzenie danych oraz musi przeprowadzić kontrolę zgodności
wprowadzonych haseł..-->

<head>   
</head>
<body>
    <h1>Sprawdzenie poprawności hasła</h1>
    <form method="POST" action="sprawdzenie.php">
        Wprowadź imię
        <input type="text" name="imie">
        <br><br>Wprowadź hasło
        <input type="text" name="haslo">
        <br><br>Powtórz hasło
        <input type="text" name="haslo2">
        <input type="submit" value="Sprawdź to">
    </form>
    <?php

    ?>
</body>
</html>