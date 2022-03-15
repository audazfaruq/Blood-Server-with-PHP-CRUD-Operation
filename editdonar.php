<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/1.png" type="image/png">
    
    <link rel="shortcut icon" href="css/image/bloodLogo.png" type="image/png">
    <title>Edit Profile</title>
</head>
<body>

<div class="container">
        <div class="navbar">
            <a href="Index.php">
            <img src="css/image/logo.png" alt="" class="logo"></a>
            <nav>
                <ul>
                <li><a href="Index.php" >Home</a></li>
                <li><a href="" >About</a></li>
                <li><a href="login.php" >Donar</a></li>
                <li><a href="" >Reciver</a></li>
            
                </ul>
            </nav>
            <a href="donarlist.php" class="donar-list">Donar List</a>
        </div>

        <div class="social-link">
        <a href="https://www.facebook.com/audazfaruq">Facebook</a>
        <a href="https://www.instagram.com/audazfaruq/">Instagram</a>
        <a href="https://twitter.com/AudazFaruq">Twitter</a>
        </div>
        
    
  <h1 class="donarh">Update</h1>
  <?php 
    $donar_id = $_GET['did'];
    $connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));
    $fetch_query = "SELECT * FROM new_donar WHERE d_id = $donar_id";
    $result = mysqli_query($connect,$fetch_query) or die(mysqli_error($connect));
    if (mysqli_num_rows($result) >0) {
        while ($donardata =mysqli_fetch_assoc($result)) {
    ?>
  <form class="update" action="functions/editdonardata.php" method="post">

  <input type="hidden" name="d_id" value="<?php echo $donardata['d_id']; ?>" />
   <label id="icon" for="name">Name:</label>
  <input type="text" name="name" id="name" placeholder="Name" value="<?php echo$donardata['d_name']; ?>" required/>  <br>
   <label id="icon" for="name">Number:</i></label>
  <input type="number" name="number" id="number" placeholder="Number" value="<?php echo$donardata['d_number']; ?>" required/>  <br>
  <label id="icon" for="name">Email:</i></label>
  <input type="text" name="email" id="email" placeholder="Email" value="<?php echo$donardata['d_email']; ?>" required/><br>
  <label id="icon" for="name">Age:</i></label>
  <input type="text" name="age" id="age" placeholder="Age" value="<?php echo$donardata['d_age']; ?>" required/><br>
  <label id="icon" for="name">Password:</i></label>
  <input type="password" name="password" id="password" placeholder="Password" value="<?php echo$donardata['u_password']; ?>" required/><br><br>
  <input id="submit" type="submit" value="Update">
     
  </form>
  <?php }  } ?> 
</div>

<div>
            <p class="footer">Copyright @ Fanjum Tech. 2022</p>
        </div>
</body>
</html>