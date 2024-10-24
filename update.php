 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
      <div class="container my-5">
      <form  method="POST" >  
        <?php
                    // < ------------------- Step 1 : include connection file ------------------->
          include'conn.php';
          
    // < ------------------- Step 2 : get the id throught the url into varibale ------------------->
          $id = $_GET['id'];

          // < ------------------- Step 3 : sql query to match data into database------------------->
          $sql = "SELECT * FROM data WHERE id = '$id' ";
          
          $result = mysqli_query($conn,$sql)or die("Query failed");
            if(mysqli_num_rows($result)>0){ 
               while($row = mysqli_fetch_assoc($result)){
       
       // < ------------------- Step 4 : check the submit button is click or not ------------------->   
          ?>  
          <div class="form-group">
            <label>Username :</label>
            <input type="hidden" name="uid" value="<?php echo $row['id']; ?>">
            <input type="text" class="form-control" placeholder="Enter your name " name="name" autocomplete="off" value="<?php echo $row['name']; ?>">
          </div>
          <div class="form-group">
            <label>Email :</label>
            <input type="email" class="form-control" placeholder="Enter your email " name="email" autocomplete="off" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label>Mobile :</label>
            <input type="text" class="form-control" placeholder="Enter your Mobile number  " name="mobile" autocomplete="off" value="<?php echo $row['mobile']; ?>">
          </div>
          <div class="form-group">
            <label>Password : </label>
            <input type="text" class="form-control" placeholder="Enter your password " name="password" autocomplete="off"  value="<?php echo $row['password']; ?>">
          </div>
         
   <?php
      }
        }
   ?>
          <button type="submit" class="btn btn-primary" name="btn">Update</button>
    </form>
  </div>
  </body>
</html>



<?php
// < ------------------- Step 5 : check the submit button is click or not ------------------->
  if(isset($_POST['btn'])){
     include'conn.php';  
     // < ------------------- Step 6 :  store all input filed data in variable using POST method ------------------->
      $id = $_POST['uid'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $password = $_POST['password'];

      // < ------------------- Step 7 : This is update query where id is match  ------------------->
       $sql1 = "UPDATE data SET name = '{$name}', email = '{$email}', mobile = '{$mobile}', password = '{$password}' WHERE id = '$id' ";
       $result1 = mysqli_query($conn,$sql1) or die("Update query failed");
       if($result1){
        // < ------------------- Step 8 : if query success so redirct the display file ------------------->
        //echo "update successfully";
        header("location: display.php");
       }else{
        echo " can not update data";
       }
  }

  // < ------------------- Step 9 :  end of file------------------->
?>