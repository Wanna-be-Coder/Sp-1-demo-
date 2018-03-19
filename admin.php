<?php
include('connection.php');
$sql="SELECT * FROM `login_info`";
$result=mysqli_query($conn, $sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
 
  <table class="table">
    <thead>	
      <tr>
      	<th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Post</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row=mysqli_fetch_array($result)){   ?>
      <tr>
      	<th><?php echo $row['id']; ?></th>
        <th><?php echo $row['Name']; ?></th>
        <th><?php echo $row['email']; ?></th>
        <th><?php echo $row['password']; ?></th>
        <th><?php echo $row['POST']; ?></th>
        <th><a href="update.php?id=<?php echo $row["id"]  ?>">Validate</a></th>
         <th><a href="delete.php?id=<?php echo $row["id"]  ?>">Delete</a></th>


      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
