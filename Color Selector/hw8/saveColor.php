<!DOCTYPE html>

<?php 
$name = "ParBackColor";
$selected_color = $_POST["color"];
setcookie($name, $selected_color, time() + (86400 * 7), "/" );
?>

<html>
	
	<head>
		
		<title> Save Color </title>
	
		<meta charset="UTF-8">
	
	</head>
	
	<body>

		<br><br>
		<div id="link">
			<a href="https://cefns.nau.edu/~sms968/hw8/testColor.php"> Test Color Change </a>
		</div>
	</body>

</html>