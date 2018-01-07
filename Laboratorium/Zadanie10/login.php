<?php
    require_once "db_data.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Zadanie 10</h2>
    <h4>Napisz skrypt, który utworzy sesję dla użytkownika, który wprowadzi swój login z poziomu formularza.</h4>
    <?php
        $user = $_POST['user'];
        $connection = new mysqli($db_host,$db_user,$db_pass,$db_name);
        if($connection->connect_errno != 0)
        {
            echo "connection error";
            //TODO
        }
        else
        {
            $result = $connection->query("SELECT * FROM '$db_name' where user = '$user'");
            $num_users = $result->num_rows;
            if($num_users > 0)
            {
                echo "dupa";
            }
            else 
            {
                echo "chuj";
            }
        }
    ?>
    
</body>
</html>