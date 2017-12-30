<?php 
if(!empty($_POST['liczba'])){
	$a=$_POST['liczba'];
	$spr=$a%7;
	if ($spr==0) {
		echo 'Liczba '.$a.' jest podzielna przez 7<br><br>'; 	
		echo '<form action="index.php" method="post"><input type="submit" value="Powrót"/></form>';}
	else {
		echo 'Liczba '.$a.' jest niepodzielna przez 7<br><br>'; 	
		echo '<form action="index.php" method="post"><input type="submit" value="Powrót"/></form>';	
		}
}
else { 
	echo 'Nie wprowadzono liczby<br><br>';
	echo '
	<form action="index.php" method="post">
		<input type="submit" value="Powrót"/>
	</form>
	';	
	}
?>




