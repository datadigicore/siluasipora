<?php
	if (!empty($_SESSION)) {
    if (count($link[1]) == 0) {
		  $utility->location(".");
		}
		else {
		  switch ($link[2]) {
		    case 'home':
		      echo "SELAMAT ANDA LOGIN";
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
