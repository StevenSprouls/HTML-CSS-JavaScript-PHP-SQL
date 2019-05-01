<!DOCTYPE html>

<html>

	<head>

    	<title> Select Book </title>

	</head>

	<body>

	</body>
		
	<h1> Select a Book You Wish to Delete </h1>

	<form method="post" action="deleteBook.php">

		<label for="Title"> Book Title:</label>
		<select name="Title">

		<?php
		$conn = mysqli_connect("tund.cefns.nau.edu", "cs212_sms968", "5427043", "cs212_sms968");
		$sql = "SELECT BookTitle, BookFirstAuthor, BookYear FROM cs212_sms968.book;";
		$result =  mysqli_query($conn, $sql);
		while ($row =  mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row["BookTitle"].'">'.$row["BookFirstAuthor"].'</option>';
		}
		mysqli_close($conn);
		?>

		</select>

		<br>
		
		<input type="submit" value="delete">

	</form>

	<br><br><br>

</html>