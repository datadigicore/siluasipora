  <div class="container-fluid">
    <div class="main">    
      <div class="page clear">      
        <div id="modal" class="modal-window"></div>       
        <?php 
          echo "  <h2>Selamat Datang $_SESSION[nama]</h2>
              <p>User Anda <b>$_SESSION[namauser]</b> sedang login Sebagai <b>$_SESSION[jabatan] $title</b>.</p>
              <p>Login hari ini: $hari_ini, ";
          echo    $utility->format_tanggal(date("Y-m-d")); 
          echo "  | "; 
          echo    date("H:i:s");
          echo "  WIB</p>";
        ?>
      </div>
    </div><!-- end of main class -->
    <div class="footer">Powered By BBSDM Team : <b><a href='?module=redaksi'>Susunan Redaksi</a></b> </div>
  </div><!-- end of container class -->
</body>
</html>