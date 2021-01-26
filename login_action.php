<?php 
require ('connect_db.php');
	# Check form submitted.
	if ($_SERVER['REQUEST_METHOD'] == 'POST')		
	{  # Open database connection.
		
		
		# Get connection, load, and validate functions.
		require ('login_tools.php');

		# Check login.
		list ($check, $data)=validate($link, $_POST['email'], $_POST['pass']);
		# On success set session data and display logged in page.
		if ($check)  
		{
			# Access session.
			session_start();
			$_SESSION['user_id'] = $data['user_id'];
			$_SESSION['first_name'] = $data['first_name'];
			$_SESSION['last_name'] = $data['last_name'];
			$_SESSION['email'] = $data['email'];
			load ('feed.html');
		}	
		# Or on failure set errors.
		else {
			$errors = $data;
			header("Location: login.php") ;			
		}
	
		# Close database connection.
		mysqli_close($link); 
	}
	else{
		header("Location: login.php");
	}
?>

	
