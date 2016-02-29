  <div class="container-fluid">
    <div class="main">    
      <div class="page clear">
        <div class="content-box">
          <div class="content-box-header">
            <h2>Import Data Rkakl</h2>
          </div>
          <div class="content-box-body">
            <div class="row">
              <div class="col-sm-12">
                <a href="" id="add-form" class='btn btn-primary'>Tambah Data RKAKL</a><br><br id="form-here">
                <script type="text/javascript">
                  formData = `<div id="form" class="row" style="display:none">
                    <form class="form-horizontal col-sm-5 col-sm-offset-3" method="post" action="<?php echo $base_url?>process/import/create">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Thn Angg</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="thang" required>
                            <?php $earliest_year = date('Y')+1;
                            echo '<option  value="" disabled selected>-- Pilih Tahun Anggaran --</option>';
                            foreach (range(date('Y'), $earliest_year) as $x) {
                              echo '<option value="'.$x.'">'.$x.'</option>';
                            }?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Keterangan</label>
                          <div class="col-sm-10">
                            <textarea rows="4" class="form-control" placeholder="Keterangan" style="resize: none;"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">File Excel</label>
                          <div class="col-sm-10">
                            <input type="file" id="fileimport" name="fileimport" style="display:none;">
                            <a id="selectbtn" class="btn btn-warning" style="position:absolute;right:16px;">Select File</a>
                            <input type="text" id="filename" class="form-control" placeholder="Pilih File .xls / .xlsx" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="box-footer">
                        <button type="submit" class="col-sm-2 btn btn-primary pull-right" style="margin:1">Submit</button>
                        <a href="" id="del-form" class='col-sm-2 btn btn-danger pull-right' style="margin:1">Batal</a>
                      </div>
                    </form>
                  </div>`;
                </script>
                <table class="display nowrap table table-bordered table-striped" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Unit</th>
                      <th>SubUnit</th>
                      <th>Sub SubUnit</th>
                      <th>No RKKAL</th>
                      <th><center>Aksi</center></th>
                    </tr>
                  </thead>
                </table>
                <script type="text/javascript">
                  $(".table").DataTable({
                    scrollX : true
                  });
                  $("#add-form").click(function(e){
                    e.preventDefault();
                    $("#form").html() == undefined  ?
                    $("#form-here").after(formData).next().slideDown() : $("#infoDialog").modal("show");
                    $('.modal-body>p').html('Silahkan Isi Form Import Data Rkakl');
                  });
                  $(document).on('click', '#del-form', function(e){
                    e.preventDefault();
                    $("#form").slideUp("normal", function() { $(this).remove(); } );
                  });
                </script>
                <script type="text/javascript">
                  $(document).on("click", "#selectbtn", function () {
                    $("#fileimport").trigger('click');
                  });
                  $(document).on("change", "#fileimport", function(){
                    $("#filename").attr('value', $(this).val().replace(/C:\\fakepath\\/i, ''));
                  });
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="footer">Powered By BBSDM Team : <b><a href='<?php echo $base_content ?>'>Susunan Redaksi</a></b> </div>
  </div>
</body>
</html>