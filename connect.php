<?php
	$fname = filter_input(INPUT_POST, 'fname');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	$dob = filter_input(INPUT_POST, 'dob');
	$gender = filter_input(INPUT_POST, 'gender');
	date_default_timezone_set("Asia/Kolkata");
	$regdate= date("Y-m-d") . ' ' . date("H:i:s");

	if (!empty($fname)){
		if (!empty($password)){
				$host = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "db_olcademy";
				// Create connection
				$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
				if (mysqli_connect_error()){
					die('Connect Error ('. mysqli_connect_errno() .') '
					. mysqli_connect_error());
				}
				else{

					$sql = "INSERT INTO register (fname, email, password, dob, gender, regdate)
					values ('$fname','$email','$password','$dob','$gender','$regdate')";
					if ($conn->query($sql)){
						header ("location: home.php");  
					 
					}
					else{
					    die('Could not connect: ' . mysqli_connect_error());  
						}
				$conn->close();
				}
		}
		else{
			echo "Password should not be empty";
			die();
		}
	}
	else{
		echo "Username should not be empty";
		die();
		}
?>