  <div class="container-fluid">
    <div class="main">    
      <div class="page clear">      
        <div class="row">
          <div class="col-sm-12">
            <div class="content-box">
              <div class="content-box-header">
                <h2>Manajemen Program Kementerian</h2>
              </div>
              <div class="content-box-body">
                <div class="row">
                  <div class="col-sm-3">
                    <a href="" id="add-form" class='btn btn-primary'>Tambah Program Kementerian</a>
                  </div>
                  <div class="col-sm-6"></div>
                  <div class="col-sm-3">
                    <select name="thn_program" id="thn_program" class="form-control pull-right">
                      <option value="" selected="">-- Semua Tahun --</option>
                      <option value="2015">2015</option>
                    </select>
                  </div>
                </div>
                <br id="form-here">
                <script type="text/javascript">
                  formData = `<div id="form" class="row" style="display:none">
                    <form class="form-horizontal col-sm-6 col-sm-offset-3" method="post" action="<?php echo $base_url?>process/anggaran/programmenteri">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Kode Organisasi</label>
                          <div class="col-sm-8">
                            <input type="text" id="kd_organisasi" class="form-control" placeholder="Kode Organisasi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Nama Organisasi</label>
                          <div class="col-sm-8">
                            <input type="text" id="nm_organisasi" class="form-control" placeholder="Nama Organisasi">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Kode Program</label>
                          <div class="col-sm-8">
                            <input type="text" id="kd_program" class="form-control" placeholder="Kode Program">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Nama Program</label>
                          <div class="col-sm-8">
                            <input type="text" id="nm_program" class="form-control" placeholder="Nama Program">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Pagu Anggaran</label>
                          <div class="col-sm-8">
                            <input type="text" id="pagu_anggaran" class="form-control" placeholder="Pagu Anggaran">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                          <button type="submit" class="col-sm-3 btn btn-primary pull-right" style="margin:1">Submit</button>
                          <a href="" id="del-form" class='col-sm-3 btn btn-danger pull-right' style="margin:1">Batal</a>
                        </div>
                      </div>
                    </form>
                  </div>`;
                </script>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="display nowrap table table-bordered table-striped" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Program</th>
                          <th>Nama Program</th>
                          <th>Pagu Anggaran</th>
                          <th>Tahun Anggaran</th>
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
                        $('.modal-body>p').html('Silahkan Isi Form Program Kementerian');
                      });
                      $(document).on('click', '#del-form', function(e){
                        e.preventDefault();
                        $("#form").slideUp("normal", function() { $(this).remove(); } );
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end of row -->
      </div>
    </div><!-- end of main class -->
    <div class="footer">Powered By BBSDM Team : <b><a href="<?php echo $base_content ?>">Susunan Redaksi</a></b> </div>
  </div>
</body>
</html>