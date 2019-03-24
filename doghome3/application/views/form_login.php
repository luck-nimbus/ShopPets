<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>LOGIN FORM</h1>
	<?php echo validation_errors(); ?>
	<?php echo $error; ?>
	<form action="<?php echo base_url().'Login/log' ?>" method="post">
		<p>User Name: <input type="text" name="username" value="" placeholder="username"></p>
		<p>Password: <input type="password" name="password" value="" placeholder="password"></p>
		<p><input type="submit" name="submit" value="Login"></p>
	</form>

</body>
</html>