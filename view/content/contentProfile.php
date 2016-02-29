  <div class="container-fluid">
    <div class="main">
    	<div class="page clear">
          <h2></h2>
        	<div id="form" class="row">
            <form class="form-horizontal col-sm-5 col-sm-offset-3" method="post" action="<?php echo $base_url?>process/profile/update">
              <div class="content-box">
                <div class="content-box-header dark-green">
                  FORM
                </div>
                <div class="content-box-body">
                  <?php include("./view/include/alert.php"); ?>
                  <div class="form-group">
                    <label class="col-sm-2">Password Lama</label>
                    <div class="col-sm-10">
                    	<input class="form-control" type="password" name="password" required></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2">Password Baru</label>
                    <div class="col-sm-10">
                    	<input class="form-control" type="password" name="newpassword" required></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2">Ulangi Password</label>
                    <div class="col-sm-10">
                    	<input class="form-control" type="password" name="repassword" required></input>
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
    <div class="footer">Powered By BBSDM Team : <b><a href='?module=redaksi'>Susunan Redaksi</a></b> </div>
  </div><!-- end of container class -->
</body>
</html>