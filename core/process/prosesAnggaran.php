<?php 
	switch ($link[3]) {
    case 'programkementerian':
      switch ($link[4]) {
        case 'create':
          echo "CREATE HERE";
        break;
        case 'readTable':
          $table      = "main_program_pusat";
          $primaryKey = "id_program_pusat";
          $columns = array(
            array( 'db' => 'id_program_pusat', 'dt' => 0 ),
            array( 'db' => 'kode_program',     'dt' => 2 ),
            array( 'db' => 'nama_program',     'dt' => 3 ),
            array( 'db' => 'pagu_anggaran',    'dt' => 4, 'formatter' => function($d,$row){return 'Rp. '.number_format($d,2,",",".");} ),
            array( 'db' => 'tahun_anggaran',   'dt' => 5 )
          );
          $datatable->get_table($table, $primaryKey, $columns);
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