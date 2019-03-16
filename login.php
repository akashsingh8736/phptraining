<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!isset($username) || !isset($password) || !trim($username) || !trim($password)) {
		$error = 'Seems you submitted an empty form.';

		header('Location: '.'form.php?error='.$error);
		//header( "refresh:5;url=form.php" );
	} else {
		echo "Welcome $name";
	}
?>