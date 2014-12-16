<?php
	require_once(__DIR__ . "/../model/config.php");
?>


<h1>Login</h1>h1>

<form method="post" action="<?php echo $path . "controller/login-user.php";?>">
	<div>
		<label for="username">Username: </label> <!-- label for the user andiing a username -->
		<input type="text" name="username" />	
	</div>

	<div>
		<label for="password">Password: </label> <!-- adding a password for the user making sure it exist -->
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit">Submit</button> <!--adding a submit button -->
	</div>
</form>