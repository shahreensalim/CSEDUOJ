<html>
    <head>
        <link rel="icon" type="image/gif" href="logo.png" />
<meta charset="utf-8">

<link rel="stylesheet" href="register.css" >

<title>Log In</title>
<style>
    body{
        background-image: url("register_msg.jpg");
    }
</style>
</head>

<body>
   <img src="other.png" style="width: 100%">

<?php
error_reporting(E_ERROR | E_PARSE);
global $con;
require 'database.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $email = $_GET['email'];
    $id = $_GET['hash'];
    $qry = "UPDATE users SET verified='1' WHERE id='$id'";
    $res = mysqli_query($con, $qry);
    if($res){
     echo "<div class='form'>
                        <h2>Your account is now verified. You can now <a href=index.php>Log In</a></h2>
                         </div>";
    }
 else {
      echo "<div class='form'>
                        <h2A problem occured. Please try again.</h2>
                         </div>";
}
?>
   <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
 <p class="w3-medium">Powered by <a href="https://csedu.du.ac.bd" target="_blank">CSEDU</a></p>
</footer>
</body>
</html>