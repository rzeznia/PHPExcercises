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
    <?php
        $imie = $_POST['imie'];
        $haslo = $_POST['haslo'];
        $haslo2 = $_POST['haslo2'];
        if($imie == null || $haslo == null || $haslo2 == null)
        {
            echo "<h2>Formularz zawiera błędy</h2>";
        }
        else{        
            if($haslo == $haslo2)
            {
                echo "<h2>Hasła zgodne</h2>";
            }
            else{
                echo "<h2>Hasła NIEzgodne</h2>";
            }
        }
 
    ?>
    <br><a href="index.php">Powrót do strony głownej</a>
</body>
</html>