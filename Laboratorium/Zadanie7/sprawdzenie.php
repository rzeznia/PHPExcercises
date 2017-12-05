<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który poprosi o wymiar tablicy jednowymiarowej, następnie
poprosi o podanie znaku specjalnego i wyświetli tablicę. Proszę ustalić
wartość min i max wymiaru tablicy. Wynik ma być zgodny ze wzorem.
        nr  wartosc
        1   *
        2   *
        3   *
        4   *
-->

<head>   
</head>
<body>
    <h1>Gwiazdeczki</h1>
    <?php
        if($_POST['liczba']== null)
            echo "<h2>Formularz zawiera błędy</h2>";
        else{            
            $liczba1 = $_POST['liczba'];
            for ($i=0; $i <$liczba1 ; $i++) 
                echo "**** <br>";        
        }
        
    ?>
    <br><a href="index.php">Powrót do strony głownej</a>
</body>
</html>