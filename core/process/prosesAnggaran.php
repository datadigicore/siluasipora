<?php 
	switch ($link[3]) {
    case 'programkementerian':
      switch ($link[4]) {
        case 'tableProgramKementerian':
          $table      = "main_program_pusat";
          $primaryKey = "id_program_pusat";
          $columns = array(
            array( 'db' => 'id_program_pusat', 'dt' => 0 ),
            array( 'db' => 'kode_program',     'dt' => 2 ),
            array( 'db' => 'nama_program',     'dt' => 3 ),
            array( 'db' => 'pagu_anggaran',    'dt' => 4, 'formatter' => function($d,$row){return 'Rp. '.number_format($d,2,",",".");} ),
            array( 'db' => 'tahun_anggaran',   'dt' => 5 )
          );
          $datatable->get_table($table, $primaryKey, $columns, $join, $where, $group, $order);
        break;
        case 'tablePerUnitKerja':
          $table      = "anggaran_kementerian";
          $primaryKey = "id_anggaran_kementerian";
          $columns = array(
            array( 'db' => 'id_anggaran_kementerian', 'dt' => 0 ),
            array( 'db' => 'sub_subunit',             'dt' => 1 ),
            array( 'db' => 'nama_unit',               'dt' => 2, 'formatter' => function($d,$row){
              if ($row['sub_subunit'] == 0) {
                return $d;
              }
              else {
                return "<img src='../../static/img/renter.png' width='16'> ".$d;
              }
            } ),
            array( 'db' => 'pagu_anggaran',           'dt' => 3, 'formatter' => function($d,$row){return 'Rp. '.number_format($d,2,",",".");} ),
            array( 'db' => 'tahun_anggaran',          'dt' => 4 )
          );
          $order = 'unit,sub_unit,sub_subunit';
          $where = 'status_delete = 0';
          $datatable->get_table($table, $primaryKey, $columns, $join, $where, $group, $order);
        break;
        default:
          $utility->location("content/import");
        break;
      }
    break;
    case 'read':
    	echo "READ HERE";
    break;
    case 'update':
      echo "UPDATE HERE";
    break;
    case 'delete':
      echo "DELETE HERE";
    break;
    default:
      $utility->location("content/import");
    break;
	}
?>