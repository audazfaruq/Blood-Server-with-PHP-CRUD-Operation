<?php

$userEmail=$_POST["email"];
$userPassword=$_POST["password"];


$connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));
$matchQuery="SELECT * FROM new_donar WHERE d_email='$userEmail' AND u_password='$userPassword'";
$runMatchQuery=mysqli_query($connect,$matchQuery);
$checkCount=mysqli_num_rows($runMatchQuery);

if($runMatchQuery==true){
	
if($checkCount===1){
	header("location:http://localhost:3000/donarprofile.php");
}
else{
	header("location:http://localhost:3000/error.php");
}
}

?>