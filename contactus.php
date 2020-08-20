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
		                      <center><h1>ContactUS</h1></center>
                    			<form method="post" action="feedback.php">
                        			<div class="form-group">
                            			<label for="Name">FullName</label>
                            			<input type="name" class="form-control" id="Name"  name="cname" placeholder="FullName">
    			                    </div>

                              <div class="form-group">
                                    <label for="Email1">Email</label>
                                    <input type="email" class="form-control" id="Email1" name="cemail" placeholder="Email">
                              </div>

                              <div class="form-group">
                                    <label for="sub">Subject</label>
                                    <input type="name" class="form-control" id="sub" name="subject" placeholder="Subject">
                              </div>

                              <div class="form-group">
                                  <label for="msg">Message</label>
                                  <input type="text" class="form-control" id="msg" name="message" placeholder="Message">
                              </div>

                              <div class="form-group">
                                  <label for="query">Query</label>
                                  <textarea class="form-control" id="query" name="query" rows="5"></textarea>
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
