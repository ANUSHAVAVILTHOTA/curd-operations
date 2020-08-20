<?php

$cname = filter_input(INPUT_POST, 'cname');
$cemail = filter_input(INPUT_POST, 'cemail');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');
$query = filter_input(INPUT_POST, 'query');
date_default_timezone_set("Asia/Kolkata");
$regdate= date("Y-m-d") . ' ' . date("H:i:s");

if (!empty($cemail)){
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
		$sql = "INSERT INTO contact (cname, cemail, subject, message, query, regdate)
		values ('$cname','$cemail','$subject','$message','$query','$regdate')";
		if ($conn->query($sql)){
			header ("location: contactdetails.php");  
 
		}
		else{
   			 die('Could not connect: ' . mysqli_connect_error());  
		}
		$conn->close();
	}
}
else{
echo "email should not be empty";
die();
}

?>