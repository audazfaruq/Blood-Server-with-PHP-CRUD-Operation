<?php 
$id = $_GET['ddid'];

$connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));
$delete_query = "DELETE FROM new_donar WHERE d_id = $id";
$runQuery=mysqli_query($connect,$delete_query) or die(mysqli_error($connect));

header("location:http://localhost:3000/donarprofile.php");

mysqli_close($connect);
    ?>