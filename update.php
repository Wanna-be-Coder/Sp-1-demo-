<?php
if(isset($_GET['id'])){
include('connection.php');
$id =   $_GET["id"];
$sq ="SELECT `POST` FROM `login_info` WHERE `id`='$id'";
$result=mysqli_query($conn, $sq);
$row=mysqli_fetch_array($result);
if($row['POST']=="stu"){
	$sql = "UPDATE `login_info` SET `POST`='student' WHERE `id`='$id'";
	if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('location:admin.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
else if($row['POST']=="gua"){
	$sql = "UPDATE `login_info` SET `POST`='guardian' WHERE `id`='$id'";
	if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('location:admin.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
else if($row['POST']=="tut"){
	$sql = "UPDATE `login_info` SET `POST`='tutor' WHERE `id`='$id'";
	if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('location:admin.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
else if($row['POST']=="sup"){
	$sql = "UPDATE `login_info` SET `POST`='supervisor' WHERE `id`='$id'";
	if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('location:admin.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
else{}	


}
else{ echo "didn't get it";}
?>