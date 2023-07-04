<?php
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
  function validate($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);

  if (empty($email)){
    header("Location: super.php?error=Username is required");
    exit();
  }else if (empty($password)){
    header("Location: super.php?error=Password is required");
    exit();
  }else{
    $sql = "SELECT * FROM superadmin WHERE email = '$email' AND password ='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1 ) {
         $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $password){
          
         $_SESSION['email'] = $row['email'];
         $_SESSION['name'] = $row['name'];
         $_SESSION['id'] = $row['id'];
         header("Location: superhomepage.php");
         exit();

        } else{
          header("Location: super.php?error=Incorrect Username or Password");
        exit();
        }
    }else{
      header("Location: super.php?error=Incorrect Username or Password");
    exit();
    }

  }

}else{
  header("Location: super.php");
  exit();
}