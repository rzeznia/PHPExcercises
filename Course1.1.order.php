<DOCTYPE html>
<html lang ="pl">
<head> 
    <title>"Piekarnia Mehedronoha - Podsumowanie zamówienia</title>

</head>
<body>
    <?php
        $paczek=$_POST['paczek'];
        $rosomak=$_POST['rosomak'];
        $suma = 0.99*$paczek + 1.29*$rosomak;
       
echo<<<END

        <h2>Podsumowanie zamówienia:</h2>
        <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Paczek (0,99PLN/szt)</td> <td>$paczek</td>
        </tr>
        <tr>
            <td>Ciastko (1,29PLN/szt)</td> <td>$rosomak</td>
        </tr>
        <tr>
            <td>SUMA</td> <td>$suma PLN</td>
        </tr>
        </table>
        <br><a href=Course1.1.php>Powrót do strony głownej</a>
END;

    ?>
</body>
</html>