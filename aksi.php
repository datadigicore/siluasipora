<?php
  if (count($link[1]) == 0) {
    $utility->location(".");
  }
  else {
    switch ($link[2]) {
      case 'login':
        include "./core/login_proses.php";
      break;
      default:
        $utility->location(".");
      break;
    }
  }
?>
