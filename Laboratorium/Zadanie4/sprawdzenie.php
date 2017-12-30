<DOCTYPE html>
<html lang ="pl">
<!--Wczytaj dwie liczby (w polach formularza), a następnie z wykorzystaniem
funkcji oceń zależność między liczbami (<, >, =). Skrypt musi uwzględniać
brak podania.cZX.-->

<head>   
</head>
<body>
    <h1>Sprawdzenie podzielności liczby przez 7 Z FUNKCJĄ</h1>
    <?php
        if($_POST['l1']== null || $_POST['l2'] == null)
            echo "<h2>Formularz zawiera błędy</h2>";
        else{            
            $liczba1 = $_POST['l1'];
            $liczba2 = $_POST['l2'];
            sprawdz_to_mordo($liczba1, $liczba2);
        }
        function sprawdz_to_mordo($l1,$l2)
        {
            if($l1 == $l2)
                echo "<h2>Liczby są równe</h2>";
            else if($l1 > $l2)
                echo $l1." jest większa od ".$l2;
            else
                echo $l1." jest mniejsza od ".$l2;       
        }
    ?>
    <br><a href="index.php">Powrót do strony głownej</a>
</body>
</html>