<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #d780f5;">  
	       <div class="container">
              <div class="row">
	                 <div class="col-md-3">
		               </div>
		               <div class="col-md-6">
		                   <center><h1>SignUp</h1></center>
			                 <form method="post" action="connect.php">
                      			<div class="form-group">
                          			<label for="Name">FullName</label>
                          			<input type="name" class="form-control" id="Name"  name="fname" placeholder="FullName">
                      			</div>

                            <div class="form-group">
                                <label for="Email1">Email</label>
                                <input type="email" class="form-control" id="Email1" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="Pass" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="date">DateOfBirth</label>
                                <input type="date" class="form-control" id="date" name="dob" placeholder="DateOfBirth">
                            </div>

                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="gender" class="form-control" id="gender" name="gender" placeholder="Gender">
                            </div>
                            <center><button type="submit" class="btn btn-info">Submit</button></center>
                        </form>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
          </div>
      </form>
  </body>
</html>	
