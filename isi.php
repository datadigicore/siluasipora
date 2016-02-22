<?php
  if ($_SESSION['username'] != '') {
    if (count($link[1]) == 0) {
      $utility->location(".");
    }
    else {
      switch ($link[2]) {
        case 'home':
          include "./view/include/head.php";
          include "./view/content/contentIndex.php";
        break;
        case 'import':
          include "./view/include/head.php";
          include "./view/content/contentImport.php";
        break;
        default:
          $utility->location(".");
        break;
      }
    }
  }
  else {
    $utility->location(".");
  }
?>
