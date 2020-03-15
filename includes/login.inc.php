<?php
  //require 'header.php';
  require 'dbh.inc.php';

  /*session_start();
  if(isset($_POST['login-btn'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO login(user_uid, user_psw) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
      mysqli_stmt_execute($stmt);
      header("Location: ../index.php?signup=success");
      exit();
    }
  }*/


  if(isset($_POST['login-btn']))  {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)) {
      header("Location: ../index.php?error=emptyfields");
      exit();
    }
    else {
        $sql = "SELECT * FROM login WHERE user_uid=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
        else {
         mysqli_stmt_bind_param($stmt, "s", $username);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
         if ($row = mysqli_fetch_assoc($result)) {
           $pswCheck = password_verify($password, $row['user_psw']);
           if ($pswCheck == false) {
              header("Location: ../index.php?error=wrongpsw");
              exit();
           }
           else if ($pswCheck == true) {
             /*session_start();*/
             /*$_SESSION['userUid'] = $row['user_uid'];*/
             header("Location: ../admin.php?login=success");
             exit();
           }
           else {
             header("Location: ../index.php?error=unknownError");
             exit();
           }
         }
         else {
           header("Location: ../index.php?error=nouser");
           exit();
         }
       }
    }
  }
?>
