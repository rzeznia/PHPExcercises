<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Add</title>
</head>
<body>
    <div class="container">
        <div class = "header">    
            <h1 class="head_math">Działania Matematyczne</h1>
        </div>
        <div class="nav">
            <ul>
                <li>Start</li>
                <li>Dodawanie</li>
                <li>Odejmowanie</li>
            </ul>
        </div>
        <div class="content">
            <form action="add.php" method="POST">
                Podaj liczbę: <input type="text" name="l1" id="l1" class="pole"/><br/><br/>
                Podaj liczbę: <input type="text" name="l2" id="l2" class="pole"/><br/><br/>
                <input class="pole" type=submit value="Oblicz"/><br/>                     
            </form>
            <div class="result">
            <?php
            if(isset($_POST['l1']) && isset($_POST['l2'])) 
            {
                $l1=$_POST['l1'];
                $l2=$_POST['l2'];
                $result=$l1+$l2;
                echo $l1." + ".$l2." = ".$result;
            }?>               
            </div>        
        </div>
    </div>
</body>
</html>