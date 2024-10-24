<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curd application</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<button class="btn btn-primary my-5"><a href="index.php" class="text-light">add user</a></button>
			<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Opertaions</th>

    </tr>
  </thead>
  <tbody>
  	<?php 
    // < ------------------- this is the code to connect database -------------------> 
  	include'conn.php';
    // < ------------------- Fetch all data from datbase ------------------->
  	$sql = "SELECT * FROM data";
  	$result = mysqli_query($conn,$sql) or die("Query failed");
  	if(mysqli_num_rows($result)>0){
  			while($row = mysqli_fetch_assoc($result)){
    
      // < ------------------- show data into table form ------------------->
  	?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td> <?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile']; ?></td>
      <td><?php echo $row['password']; ?></td>
     	<td>
     		<button class="btn btn-primary"><a href="update.php?id=<?php echo $row['id']; ?>"   class="text-light">edit</a></button>
     		<button class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id']; ?>" class="text-light">delete</a></button>
     	</td>

    </tr>
   <?php }
      }
      // < ------------------- this is end of fetching data from dabase------------------->
     ?>
  </tbody>
</table>

</div>
</body>	
</html>