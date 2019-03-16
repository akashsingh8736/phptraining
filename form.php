<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel='stylesheet' type='text/css' href='/css/style.css'>
</head>
<body>
	<?php
		if(isset($_GET['error'])) {
			echo '<div class="error">';
			printf("<p>%s<p>", $_GET['error']);
			echo '</div>';
		}
	?>
	<div class='form'>		
		<form action='login.php' method='post'>
			<table>
				<tr>
					<td>USERNAME</td>
					<td><input type='text' name='username'></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type='password' name='password'></td>
				</tr>
				<tr>
					<td><input type='submit' value='LOGIN'></td>
					<td><input type='reset' value='RESET'></td>
				</tr>
			</table>	
		</form>
  	</div>
</body>
</html>