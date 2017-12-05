<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który poprosi o podanie pewnej liczby (w polu formularza) i
w zależności od jej wartości wyświetli odpowiednią ilość gwiazdek w
układzie zgodnym z poniższym:
    *
    *
    *
    *
Uwzględnij wartość minimalną i maksymalną. Skrypt musi uwzględniać
brak podania liczby.-->

<head>   
</head>
<body>
    <h1>Gwiazdeczki</h1>
    <form method="POST" action="sprawdzenie.php">
        Wprowadź ilość gwiazdek
        <input type="text" name="liczba">
        <input type="submit" value="Sprawdź to">
    </form>
    <?php

    ?>
</body>
</html>