<?php
  if (!empty($_POST)) {
    $username = $purifier->purify($_POST['username']);
    $password = $purifier->purify($_POST['password']);
    $password = md5($password);
    if (!empty($_SESSION)) {
      $utility->location("content/home");
    }
    else {
      $data  = array('user' => $username,
        'password' => $password
      );
      $result = $login->readUser($data);
      if ($result == true) {
        $_SESSION['id']        = $result->id;
        $_SESSION['nama']      = $result->nama;
        $_SESSION['username']  = $result->user;
        $utility->location("content/home");
      }
      else {
        $utility->location("login");
      }
    }  
  }
  else {
    $utility->location(".");
  }
?>