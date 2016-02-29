<?php
  if ($_SESSION['username'] != '') {
    if (count($link[1]) == 0) {
      $utility->location(".");
    }
    else {
      include "./view/include/head.php";
      switch ($link[2]) {
        case 'home':          
          include "./view/content/contentIndex.php";
        break;
        case 'import':          
          include "./view/content/contentImport.php";
        break;
        case 'anggaran':
          switch ($link[3]) {
            case 'programmenteri':              
              include "./view/content/contentProgramMenteri.php";
            break;
            case 'perunitkerja':
              include "./view/content/contentPerUnitKerja.php";
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
