<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		include 'core/init.php';
		if (logged_in()) {
			echo "loged in";
			echo '<a href="logout.php">logout</a>';

		}		
		else{
			echo '<a href="login.php">login</a>';
		}
	?>
	<h1>welcome</h1>
	
</body>
</html>