<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który poprosi o podanie pewnej liczby (w polu formularza) i
w zależności od jej wartości wyświetli odpowiednią ilość gwiazdek w
układzie zgodnym z poniższym:
    *****
    *****
    *****
    *****
Uwzględnij wartość minimalną i maksymalną. Skrypt musi uwzględniać
brak podania liczby.-->

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