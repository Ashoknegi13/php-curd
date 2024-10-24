<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    	<div class="container my-5">
    	<form  method="POST" autoc>	 	
  				<div class="form-group">
    				<label>Username :</label>
    				<input type="text" class="form-control" placeholder="Enter your name " name="name" autocomplete="off">
  				</div>
  				<div class="form-group">
    				<label>Email :</label>
    				<input type="email" class="form-control" placeholder="Enter your email " name="email" autocomplete="off">
  				</div>
  				<div class="form-group">
    				<label>Mobile :</label>
    				<input type="text" class="form-control" placeholder="Enter your Mobile number  " name="mobile" autocomplete="off">
  				</div>
  				<div class="form-group">
    				<label>Password : </label>
    				<input type="text" class="form-control" placeholder="Enter your password " name="password" autocomplete="off">
  				</div>
  			 
   
 				 	<button type="submit" class="btn btn-primary" name="btn">Submit</button>
		</form>
	</div>
  </body>
</html>

<?php
// < ------------------- Step 1 : check the submit button is click or not ------------------->
if(isset($_POST['btn'])){

  // < ------------------- Step 2 : include connection file of datbase connectivity  ------------------->
include'conn.php';
// < ------------------- Step 3 : Save input field data into variable using POST methode  ------------------->
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

// < ------------------- Step 4 : This is sql query to insert data into database ------------------->
$sql = "INSERT INTO data(name,email,mobile,password)VALUES('$name','$email','$mobile','$password') ";

// < ------------------- Step 5 : run the query if query failed so we see he query failed message------------------->
$result = mysqli_query($conn,$sql) or die("Query failed");
if($result){
  // < ------------------- Step 6 : after query success redirect the disply file ------------------->
	header("location: display.php");
}else{
	echo " failed";
}


}


?>