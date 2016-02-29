<?php
  if (count($link[1]) == 0) {
    $utility->location(".");
  }
  else {
    switch ($link[2]) {
      case 'login':
        include "./core/prosesLogin.php";
      break;
      case 'import':
        include "./core/process/prosesImport.php";
      break;
      case 'profile':
        include "./core/process/prosesProfile.php";
      break;
      case 'anggaran':
        include "./core/process/prosesAnggaran.php";
      break;
      default:
        $utility->location(".");
      break;
    }
  }
?>
