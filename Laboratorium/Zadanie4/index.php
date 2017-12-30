<DOCTYPE html>
<html lang ="pl">
<!--Wczytaj dwie liczby (w polach formularza), a następnie z wykorzystaniem
funkcji oceń zależność między liczbami (<, >, =). Skrypt musi uwzględniać
brak podania.-->

<head>   
</head>
<body>
    <h1>Sprawdzenie poprawności hasła</h1>
    <form method="POST" action="sprawdzenie.php">
        Wprowadź pierwszą liczbę
        <input type="text" name="l1">
        <br><br>Wprowadź drugą liczbę
        <input type="text" name="l2">
        <input type="submit" value="Sprawdź to">
    </form>
    <?php

    ?>
</body>
</html>