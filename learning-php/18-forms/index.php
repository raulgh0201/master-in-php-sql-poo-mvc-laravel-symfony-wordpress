<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
	</head>

	<body>
		<form action="save.php" method="post" enctype="multipart/form-data">
			<label for="name">Name</label>
			<input type="text" name="name" pattern="a-zA-Z"/>

			<label for="lastname">Lastname</label>
			<input type="text" name="lastname" pattern="a-zA-Z"/>

			<input type="submit" value="Send Data">
		</form>

		<div id="alert">
			<?php
				if (isset($_GET['error'])) {
					$error = $_GET['error'];
					echo "<p class='error' >Error: $error</p>";
				}else if (isset($_GET['correct'])){
					$succesfully = $_GET['correct'];
					echo "<p class='succesfully'>$succesfully</p>";
				}
			?>
		</div>
	</body>
</html>
