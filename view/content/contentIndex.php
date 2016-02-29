  <div class="container-fluid">
    <div class="main">    
      <div class="page clear"> 
        <div class="content-box">
          <div class="content-box-header">
            <?php echo "<h2>Selamat Datang $_SESSION[nama]</h2>";?>
          </div>
          <div class="content-box-body">
            <div class="row">
              <div class="col-sm-12">
                <?php $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
                      $hari     = date("w");
                      $hari_ini = $seminggu[$hari];
                  echo "<p>Hallo! Anda <b>$_SESSION[namauser]</b> sedang login sebagai <b>$_SESSION[jabatan] $title</b>.</p>
                        <p>Login hari ini: $hari_ini, ";
                  echo  $utility->format_tanggal(date("Y-m-d")); 
                  echo " | "; 
                  echo  date("H:i:s");
                  echo " WIB</p>";
                ?>
              </div>
            </div>
          </div><!-- end of main class -->
        </div>
      </div>
    </div>
    <div class="footer">Powered By BBSDM Team : <b><a href='<?php echo $base_content ?>'>Susunan Redaksi</a></b> </div>
  </div><!-- end of container class -->
</body>
</html>