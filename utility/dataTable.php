<?php 
class datatable extends config {
    function get_table($table, $primaryKey, $columns){
        $config = new config();
        $sql_details = $config->sql_details();
        require('ssp.class.php');
        echo json_encode(
            SSP::simple($_POST, $sql_details, $table, $primaryKey, $columns, $joinQuery)
        );        
    }
}
