<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="css/image/bloodLogo.png" type="image/png">
    <title>Donar Profile</title>
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
                <li><a href="" >Reciver</a></li>
            
                </ul>
            </nav>
            <a href="donarlist.php" class="donar-list">Donar List</a>
        </div>
        <h1 class="donarh">Donar Profile</h1>
        <br>
        <?php
    $connect = mysqli_connect("localhost","root","","blood_server_new") or die(mysqli_error($connect));
    $fetch_query = "SELECT * FROM new_donar";
    $result = mysqli_query($connect,$fetch_query) or die(mysqli_error($connect));
    if (mysqli_num_rows($result) > 0) {
        ?>
    
        <table>
        <thead>
        <th>Name</th>
        <th>Number</th>
        <th>Blood Group</th>
        <th>Age</th>
        <th>Last Donated</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php 
            while ($donar = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $donar['d_name']; ?></td>
                <td><?php echo $donar['d_number']; ?></td>
                <td>A+</td>
                <td><?php echo $donar['d_age']; ?></td>
                <td>12/02/2022</td>
                <td>
                    <a href="editdonar.php?did=<?php echo $donar['d_id']; ?>">Edit</a>
                    <a href="functions/deletedonardata.php?ddid=<?php echo $donar['d_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php } ?>
    <div class="social-link">
        <a href="https://www.facebook.com/audazfaruq">Facebook</a>
        <a href="https://www.instagram.com/audazfaruq/">Instagram</a>
        <a href="https://twitter.com/AudazFaruq">Twitter</a>
        </div>
        
    </div>
        <div>
            <p class="footer">Copyright @ Fanjum inc. 2022</p>
        </div>
    

    
</body>
</html>