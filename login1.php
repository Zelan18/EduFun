<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];


$con = mysqli_connect("localhost","root","");
if($con)
{
	echo "Connection successful";
}
else{
	echo "No Connection";

}

mysqli_select_db($con ,"edu");


$query = "insert into Login values('$Username','$Password')";

echo "$query";

mysqli_query($con,$query);

header('location:index.html');
?>