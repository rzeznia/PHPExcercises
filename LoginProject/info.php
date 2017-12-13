<DOCTYPE html>
<html lang ="pl">
<head>   
</head>
<body>
    <h1>Check your KABONA kamracie</h1>
    
    <?php
        session_start();
        if(!isset($_SESSION['isloggedin']))
        {
            $_SESSION['error'] = '<span style="color:red">Błąd, nie wykryto zalogowanego uzyszkodnika</span>';
            header('Location: index.php');
            exit();
        }
        echo "<p> Salute <b>".$_SESSION['user']."</b> babuszka zdrowa?";
        echo "<br>".'<a href="logout.php">WYLOGUJ SIĘ</a>'."<br>";
        echo "<h2> MASZ ".$_SESSION['kabona']." KABONY KUHFA</h2>";
    ?>
</body>
</html>
