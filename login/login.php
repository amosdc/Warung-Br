<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user1 WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>
    <div class="row">
        <div class="col1">
            <img src="../img/gambarlogin.png" alt="">
        </div>

        <div class="col2">
        <h2>Login</h2>
        <form class="" action="" method="post" autocomplete="off">
          <input type="text" name="usernameemail" id = "usernameemail" placeholder = " Username / Email"> <br>
          <input type="password" name="password" id = "password" placeholder = " Password"> <br>
          <button type="submit" name="submit">Login</button>
        </form>
            <a href="registration.php">Sign Up</a>
        </div>
    </div>
    
   
  </body>
</html>