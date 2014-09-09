<html>
	<form action="" method="post">
	Leeftijd: <input type="text" name="Leeftijd"><br>
	<input type="submit">
	</form>
</html>

<?php

	$leeftijd = $_POST['Leeftijd'];

	if ($leeftijd >= 16 && $leeftijd < 18) {
		  echo "Je mag scooter rijden";

	} elseif ($leeftijd >= 18 && $leeftijd < 21) {
  	echo "Je mag auto rijden";

	} elseif ($leeftijd>=21){
  	echo "Je mag niks doen";
	}


?>
