<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który sprawdzi, czy wprowadzona przez użytkownika liczba
(w polu formularza) jest podzielna przez 7, odpowiednio wyświetlając
napis: "Liczba … jest podzielna przez 7" lub "Liczba … nie jest podzielna
przez 7". Uwzględnij brak podania liczby.-->

<head>   
</head>
<body>
    <h1>Sprawdzenie podzielności liczby przez 7</h1>
    <form method="POST" action="sprawdzenie.php">
        Wprowadź liczbę
        <input type="text" name="liczba" value="No dawaj">
        <input type="submit" value="Sprawdź to">
    </form>
    <?php

    ?>
</body>
</html>