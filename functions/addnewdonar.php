<?php 
$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];
$age=$_POST["age"];
$password=$_POST["password"];

//Database Connection //
$connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));

//Database Inset Query //
$insertQuery="INSERT INTO new_donar(d_name,d_number,d_email,d_age,u_password) VALUES
('$name',$number,'$email',$age,'$password')";
$runQuery=mysqli_query($connect,$insertQuery) or die(mysqli_error($connect));

header("location:http://localhost:3000/login.php");

mysqli_close($connect);
    ?>
