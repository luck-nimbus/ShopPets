<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Calm breeze login screen</title>
      <link rel="stylesheet" href="<?= base_url() ?>css/style.css">
</head>
<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		<?php echo validation_errors(); ?>
		<?php echo $error; ?>	
		<form action="<?php echo base_url().'Login/log' ?>" method="post" id="form">			
				<div>
					<label for="username">Username</label>
					<input class="form" type="text" name="username" value="" size="50" />				
				</div>
				<div>
					<label for="password">Password</label>
					<input class="form" name="password" type="password" value="" size="50" />
				</div>
				<div><input type="submit" name="submit" value="GO!" /></div>
			
		</form>
	</div>
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


</body>

</html>
