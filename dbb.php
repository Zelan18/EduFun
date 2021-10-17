<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['eid']) || empty($_POST['ename'])){
 $error = "id or  or designation is Invalid";
 }
 else
 {
 //Define $eid and $ename and $designation
 $user=$_POST['eid'];
 $pass=$_POST['ename'];
 $pass=$_POST['designation'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "employee");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM emp WHERE eid='$eid' AND ename='$ename'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){

 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>