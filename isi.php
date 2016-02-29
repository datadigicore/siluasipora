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
        case 'anggaran':
          anggaran($link[3], $utility);
        break;
        case 'evaluasipusat':
          echo "evaluasipusat";
        break;
        case 'evaluasidekon':
          echo "evaluasidekon";
        break;
        case 'management':
          management($link[3], $utility);
        break;
        case 'profile':
          include "./view/include/head.php";
          include "./view/content/contentProfile.php";
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
  function anggaran($data, $utility) {
    switch ($data) {
      case 'programmenteri':
        echo "programmenteri";
      break;
      case 'perunitkerja':
        echo "perunitkerja";
      break;
      case 'programdekon':
        echo "programdekon";
      break;
      case 'dekonprovinsi':
        echo "dekonprovinsi";
      break;
      default:
        $utility->location(".");
      break;
    }
  }
  function management($data, $utility) {
    switch ($data) {
      case 'pengguna':
        echo "pengguna";
      break;
      case 'dispora':
        echo "dispora";
      break;
      case 'sistempusat':
        echo "sistempusat";
      break;
      case 'sistemdekon':
        echo "sistemdekon";
      break;
      case 'progresspusat':
        echo "progresspusat";
      break;
      case 'progressdekon':
        echo "progressdekon";
      break;
      case 'organisasi':
        echo "organisasi";
      break;
      default:
        $utility->location(".");
      break;
    }
  }
?>
