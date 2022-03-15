<?php 
$id = $_POST['d_id'];
echo $id;
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$age=$_POST["age"];
$password=$_POST["password"];

$connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));
$updateQuery="UPDATE new_donar SET d_name ='$name',d_number = $number,d_email = '$email', d_age= $age,u_password= '$password' WHERE d_id = $id ";
$runQuery=mysqli_query($connect,$updateQuery) or die(mysqli_error($connect));

header("location:http://localhost:3000/donarprofile.php");

mysqli_close($connect);
    ?>