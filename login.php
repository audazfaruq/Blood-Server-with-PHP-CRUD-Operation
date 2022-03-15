<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="css/image/bloodLogo.png" type="image/png">
    <title>Login as a Donar</title>
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
        
    
  <h1 class="donarh">Donar Login</h1>

  <form class="login" action="functions/validateuserdata.php" method="post">

   <label id="icon" for="name">Email:</label>
  <input type="text" name="email" id="name" placeholder="Email" required/>  <br>
  <label id="icon" for="name">Password:</i></label>
  <input type="password" name="password" id="password" placeholder="Password" required/><br><br>
  <input id="submit" type="submit" value="Login">
    
  </form>
</div>

<div>
            <p class="footer">Copyright @ Fanjum Tech. 2022</p>
        </div>
</body>
</html>