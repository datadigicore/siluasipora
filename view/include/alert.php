<?php
  if ($utility->readflash('success') != '') { ?>
    <div class="alert alert-success">
      <strong>Perhatian!</strong> <?php echo $utility->readflash('success'); ?>
    </div><?php
    $flash = array('success','warning','error');
    $utility->unflash($flash);
  }
  else if ($utility->readflash('warning') != '') { ?>
    <div class="alert alert-warning">
      <strong>Perhatian!</strong> <?php echo $utility->readflash('warning'); ?>
    </div><?php
    $flash = array('success','warning','error');
    $utility->unflash($flash);
  }
  else if ($utility->readflash('error') != '') { ?>
    <div class="alert alert-danger">
      <strong>Perhatian!</strong> <?php echo $utility->readflash('error'); ?>
    </div><?php
    $flash = array('success','warning','error');
    $utility->unflash($flash);
  } 
?>