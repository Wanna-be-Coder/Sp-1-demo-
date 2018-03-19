<?php
// Include config file
include('connection.php');
$id =   $_GET["id"];

$sql = "DELETE FROM `login_info` WHERE id = $id";
// var_dump($sql);
$retval = mysqli_query( $conn, $sql  );

   if(! $retval ) {

   }
     header("location: admin.php");
   mysqli_close($link);

?>
