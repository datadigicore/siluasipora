<?php
  if (!empty($_POST)) {
    $username = $purifier->purify($_POST['username']);
    $password = $purifier->purify($_POST['password']);
    $password = md5($password);
    if ($_SESSION['username'] != '') {
      $utility->location("content/home");
    }
    else {
      $data  = array('user' => $username,
        'password' => $password
      );
      $result = $login->readUser($data);
      if ($result == true) {
        $_SESSION['id_user']     = $result->id_user;
        $_SESSION['nama']        = $result->nama;
        $_SESSION['username']    = $result->user;
        $_SESSION['id_provinsi'] = $result->id_provinsi;
        $_SESSION['jabatan']     = $result->jabatan;
        $_SESSION['unit']        = $result->unit;
        $_SESSION['sub_unit']    = $result->sub_unit;
        $_SESSION['sub_subunit'] = $result->sub_subunit;
        $_SESSION['expire']      = time() + config::$session_time;
        $utility->location("content/home");
      }
      else {
        $flash  = array(
          'category' => "error",
          'messages' => "Username dan Password Tidak Sesuai"
        );
        $utility->location("login", $flash);
      }
    }  
  }
  else {
    $utility->location(".");
  }
?>