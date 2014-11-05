<?php

	$first = "a";
	$last = "a";
	$email = "a@b.ca";
	$password = "123";

	$con = mysqli_connect('localhost', 'oasis_user', 'abc-123','oasis_mento');
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	else {
		$query = "INSERT INTO `msn_users`(`first`, `last`, `email`, `password`) VALUES ('$first', '$last', '$email', '$password')";
		$result = mysqli_query($con, $query);

		if ($result) {
			echo "Things worked";
		}
		else { 
			echo mysql_error();
		}
	}

?>