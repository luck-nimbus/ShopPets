<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Member</title>
</head>
<body>
	<h1>Welcome to Member</h1>
	<p> <?php
			echo 'ID: '; 
			echo $this->session->userdata('id'); 
			echo '<br/>';
			echo 'Username: ';
			echo $this->session->userdata('username'); 
			echo '<br/>';
			echo 'Level: ';
			echo $this->session->userdata('level'); 
			echo '<br/>';
			echo 'Name: ';
			echo $this->session->userdata('name');
		?>
	</p>
	<a href="<?php echo base_url().'Login/logout'; ?>">Logout</a>
</body>
</html>