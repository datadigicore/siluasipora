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
                <?php $row = $anggaran->readKodeNamaOrganisasi();?>
                <script type="text/javascript">
                  formData = `<div id="form" class="row" style="display:none">
                    <form class="form-horizontal col-sm-6 col-sm-offset-3" method="post" action="<?php echo $base_url?>process/anggaran/programmenteri">
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Kode Organisasi</label>
                          <div class="col-sm-8">
                            <input type="text" id="kode_organisasi" class="form-control" placeholder="Kode Organisasi" value="<?php echo $row->kode_organisasi?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Nama Organisasi</label>
                          <div class="col-sm-8">
                            <input type="text" id="nama_organisasi" class="form-control" placeholder="Nama Organisasi" value="<?php echo $row->nama_organisasi?>" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Kode Program</label>
                          <div class="col-sm-8">
                            <input type="text" id="kode_program" class="form-control" placeholder="Kode Program">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Nama Program</label>
                          <div class="col-sm-8">
                            <input type="text" id="nama_program" class="form-control" placeholder="Nama Program">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Pagu Anggaran</label>
                          <div class="col-sm-8">
                            <input type="text" id="pagu_anggaran" class="form-control" placeholder="Pagu Anggaran">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" style="text-align:right">Tahun Anggaran</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="tahun_anggaran" required>
                              <?php $earliest_year = date('Y')+1;
                              echo '<option  value="" disabled selected>-- Pilih Tahun Anggaran --</option>';
                              foreach (range(date('Y')-3, $earliest_year) as $x) {
                                echo '<option value="'.$x.'">'.$x.'</option>';
                              }?>
                            </select>
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
                    <table class="display table table-bordered table-striped" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>No</th>
                          <th>Unit Kerja</th>
                          <th>Pagu Anggaran</th>
                          <th>Tahun Anggaran</th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                    </table>
                    <script type="text/javascript">
                      var table = $(".table").DataTable({
                        "oLanguage": {
                          "sInfoFiltered": ""
                        },
                        "processing": true,
                        "serverSide": true,
                        "scrollX": true,
                        "ajax": {
                          "url": "<?php echo $base_url ?>process/anggaran/programkementerian/tablePerUnitKerja",
                          "type": "POST"
                        },
                        "columnDefs" : [
                          {"targets" : 0,
                           "visible" : false},
                          {"targets" : 1,
                           "data"    : null,
                           "searchable": false,
                           "orderable" : false},
                          {"targets" : 2,
                           "orderable" : false},
                          {"targets" : 3,
                           "orderable" : false},
                          {"targets" : 4,
                           "orderable" : false},
                          {"targets" : 5,
                           "data"    : null,
                           "orderable"     : false,
                           "defaultContent":  `<div class="row-fluid">
                              <button id="btnedt" class="col-xs-6 btn btn-sm btn-success btn-sm pull-left" title="Edit" style="border:1px solid white"><i class="fa fa-edit"></i></button>
                              <button id="btnhps" class="col-xs-6 btn btn-sm btn-danger btn-sm pull-right" title="Hapus" style="border:1px solid white"><i class="fa fa-trash-o"></i></button>
                            </div>`}
                        ]
                      });
                      table.on( 'draw.dt', function () {
                        table.column(1, {}).nodes().each( function (cell, i) {
                          cell.innerHTML = i+1;
                        });
                      }).draw();
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