<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include 'core/init.php';
?>

	<table align="center" cellspacing="0" cellpadding="0" class="caption">
		<tr>
			<td class="form">
				<h2>Register</h2>
				<form action="" method="post">
					<div class="input-container">
			        	<input type="text" id="Username" name="usernaem" required="required"/>
			        	<label for="Username">Username</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="input-container">
			        	<input type="password" id="Password" name="password" required="required"/>
			        	<label for="Password">Password</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="input-container">
			        	<input type="password" id="Password" name="password_again" required="required"/>
			        	<label for="Password">Re-enter Password</label>
			        	<div class="bar"></div>
			      	</div>
					<div class="input-container">
			        	<input type="text" id="Username" name="frist_name" required="required"/>
			        	<label for="Username">Frist Name</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="input-container">
			        	<input type="text" id="Username" name="last_name" />
			        	<label for="Username">Last Name</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="input-container">
			        	<input type="text" id="Username" name="email" required="required"/>
			        	<label for="Username">E-mail Address</label>
			        	<div class="bar"></div>
			      	</div>
			      	<div class="button-container">
			        	<button type="submit" value="Register"><span>Register</span></button>
			      	</div>
			      	<div class="footer">Already Exist? 
			      		<a href="login.php">Login</a>
			      	</div>
				</form>



			</td>
		</tr>
	</table>

</body>
</html>