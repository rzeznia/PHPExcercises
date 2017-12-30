<DOCTYPE html>
<html lang ="pl">
<!--Napisz skrypt, który sprawdzi, czy wprowadzona przez użytkownika liczba
(w polu formularza) jest podzielna przez 7, odpowiednio wyświetlając
napis: "Liczba … jest podzielna przez 7" lub "Liczba … nie jest podzielna
przez 7". Uwzględnij brak podania liczby.-->

<head>   
</head>
<body>
    <h1>Sprawdzenie podzielności liczby przez 7 Z FUNKCJĄ</h1>
    <?php
        if(!empty($_POST['liczba']))
        {
            $liczba = $_POST['liczba'];
            sprawdź_to_mordo($liczba); 
        }       
        else
            echo "<h2>Formularz zawiera błędy<h2>";        
        function sprawdź_to_mordo($liczba)
        {
            if($liczba % 7 == 0)
                echo "<h2>Liczba jest podzielna<h2>";
            else
                echo "<h2>Liczba jest niepodzielna<h2>";            
        }        
    ?>
    <br><a href="index.php">Powrót do strony głownej</a>
</body>
</html>