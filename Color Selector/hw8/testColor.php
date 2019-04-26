<!DOCTYPE html>

<html>

	<head>

		<title> Change Color </title>
	
		<meta charset="UTF-8">
	<style>
			p { 
				<?php
					echo "background-color: " . $_COOKIE["ParBackColor"] . ";";
				?>
			 }
		</style>

	</head>

	<body>
		
        <br><br>
      	<div id>
        	<a href="https://cefns.nau.edu/~sms968/hw8/index.html"> Change Paragraph Color </a>
        </div>

        <br><br>


        <br><br>

		<div>

			<p> 
				You can change the background color of these three sentences!
			</p>
			<p> 
				WOW! That is super cool! 
			</p>
			<p>
				Web Programming with PHP is awesome!
			</p>

		</div>

	</body>

</html>