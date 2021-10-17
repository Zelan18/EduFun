<?php
$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}
else{
	echo "No Connection";

}

mysqli_select_db($con, 'edu');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into student(user, email, mobile, comments)
values('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con,$query);

header('location:main.html');
?>