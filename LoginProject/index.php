<DOCTYPE html>
<html lang ="pl">
<head>   
</head>
<body>
    <h1>Logowanie - sesja</h1>
    <form method="POST" action="login.php">
        Wprowadź dane logowania<br><br>
        Login : <input type="text" name="login"><br>
        Hasło : <input type="password" name="haslo"><br><br>
        <input type="submit" value="Zaloguj">
    </form>
    <?php
        session_start();
        if(isset($_SESSION['error']))
            echo $_SESSION['error'];
        if(isset($_SESSION['isloggedin'])&&($_SESSION['isloggedin'] == true))
        {    
            header('Location: info.php');    
            exit();
        }
    ?>
</body>
</html>