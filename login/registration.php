<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user1 WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user1 VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <div class="row">

      <div class="col1">
        <img src="../img/gambarlogin.png" alt="">
      </div>

      <div class="col2">
         <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <input type="text" name="name" id = "name" placeholder = " Nama"> <br>
      <input type="text" name="username" id = "username" placeholder = " Username"> <br>
      <input type="email" name="email" id = "email" placeholder = " Email"> <br>
      <input type="password" name="password" id = "password" placeholder = " Password"> <br>
      <input type="password" name="confirmpassword" id = "confirmpassword" placeholder = " Confirm Password"> <br>
      <button type="submit" name="submit">Sign Up</button>
    </form> 
    <br>
    <a href="login.php">Login</a>
      </div>
    </div>
   
  </body>
</html>