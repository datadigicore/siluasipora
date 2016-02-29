  <div class="container-fluid">
    <div class="main">
    	<div class="page clear">
      	<div id="form" class="row">
          <form class="form-horizontal col-sm-12" method="post" action="<?php echo $base_url?>process/profile/update">
            <div class="content-box">
              <div class="content-box-header dark-green">
                <h2>Ubah Password</h2>
              </div>
              <div class="content-box-body col-sm-5 col-sm-offset-3">
                <?php include("./view/include/alert.php"); ?>
                <div class="form-group">
                  <label class="col-sm-2">Password Lama</label>
                  <div class="col-sm-10">
                  	<input class="form-control" type="password" name="password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Password Baru</label>
                  <div class="col-sm-10">
                  	<input class="form-control" type="password" name="newpassword" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2">Ulangi Password</label>
                  <div class="col-sm-10">
                  	<input class="form-control" type="password" name="repassword" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- end of main class -->
    <div class="footer">Powered By BBSDM Team : <b><a href='<?php echo $base_content ?>'>Susunan Redaksi</a></b> </div>
  </div><!-- end of container class -->
</body>
</html>