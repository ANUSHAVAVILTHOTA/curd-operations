<!DOCTYPE html>
<html>
<head>
	<title>Queries</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: #587c7e;
			font-family: Sans-serif;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #588c7e;
			color: white;
		}
		tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body style="background-color: #d780f5;">
		<br><br>
        <div class="container" >
			<div class="row">
				<div class="col-md-12"> 
					<br>
					<center><h1>Contact Queries</h1></center>
					<table>
						<tr>
							<th>Id</th>
							<th>FullName</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Query</th>
							<th>RegDate</th>
						</tr>
	
						<?php 
						$host = "localhost";
						$username = "root"; 
						$password = ""; 
						$database = "db_olcademy"; 
						$conn = new mysqli("localhost", $username, $password, $database);

						if (mysqli_connect_error()){
							die('Connect Error ('. mysqli_connect_errno() .') '
							. mysqli_connect_error());
						}
						$sql = "SELECT * FROM contact";
						$result = $conn-> query($sql);
	
						if($result-> num_rows > 0){
							while($row = $result-> fetch_assoc()){
								echo "<tr><td>".$row["id"]."</td>
								          <td>".$row["cname"]."</td>
								          <td>".$row["cemail"]."</td>
								          <td>".$row["subject"]."</td>
								          <td>".$row["message"]."</td>
									      <td>".$row["query"]."</td>
									      <td>".$row["regdate"]."</td></tr>";
							}
							echo "</table>";	
						}
						else{
							echo "0 result";
						}
	 					$conn->  close();
						?>
				</div>
			</div>
		</div>
		<br>
</body>
</html>