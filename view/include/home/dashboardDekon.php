<html>          
     <head><title>Data Pagu Anggaran </title></head>
<body>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University 
// include 'config/fungsi_combobox.php';
function realisasi_dekon_provinsi($no_triwulan,$tahun){
    if ($no_triwulan == '1'){
		$realisasi = 'realisasi_anggaran_1 + realisasi_anggaran_2 + realisasi_anggaran_3';
	}
	elseif($no_triwulan == '2'){
		$realisasi = 'realisasi_anggaran_4 + realisasi_anggaran_5 + realisasi_anggaran_6';
	}
	elseif($no_triwulan == '3'){
		$realisasi = 'realisasi_anggaran_7 + realisasi_anggaran_8 + realisasi_anggaran_9';
	}else{
		$realisasi = 'realisasi_anggaran_10 + realisasi_anggaran_11 + realisasi_anggaran_12';
	}
    $query="SELECT P.id_provinsi, P.nama_provinsi, D.pagu_tr, D.id_provinsi,MP.pagu_anggaran FROM provinsi P
			LEFT JOIN (SELECT id_provinsi,komentar, SUM($realisasi) AS pagu_tr FROM  `main_kegiatan_dekon` 
				WHERE status_delete = 0 and tahun_anggaran = $tahun GROUP BY id_provinsi)D ON D.id_provinsi = P.id_provinsi
			LEFT JOIN (SELECT id_provinsi, pagu_anggaran FROM  `main_pagu_dekon` 
				WHERE tahun_anggaran = $tahun AND status_delete =0) MP ON MP.id_provinsi = P.id_provinsi order by P.id_provinsi";
	// echo $query;
	
	// exit;
     $result=  mysql_query($query) or die(mysql_error());
	 
     $no_acak=  rand(0, 1000);
          echo "<center><h2>Data Evaluasi Dekon Tingkat Provinsi Tahun $tahun Triwulan $no_triwulan</h2></center>";
               echo "
                    <table class=\"table table-striped table-hover CSSTableGenerator  highchart\"  data-graph-container-before=\"1\" id=\"table_$no_acak\" 
					  data-graph-legend-width=\"50\" data-graph-xaxis-labels-font-size=\"0%\" data-graph-type=\"bar\">
                    <thead>
			<tr>
				<th>Nama Provinsi</th>
				<th>Pagu Anggaran</th>
				<th>Realisasi Anggararan<br/> Triwulan $no_triwulan</th>				
				<th>Komentar</th>				
			</tr>
		</thead>";
               echo "<tbody>";
                    $i = 0;
		  while($row= mysql_fetch_array($result)){
			
			?>
			<tr>
				<td><?php echo $row['nama_provinsi']?></td>
				<td><?php echo $row['pagu_anggaran'];?></td>
                <td ><?php echo $row['pagu_tr'];?></td> 
                <td ><?php echo $row['komentar'];?></td> 
			</tr>
		<?php
			$i++; 
		}
		  echo "</tbody>";
          echo "</table>";
          
          echo "<script>$(document).ready(function() {
                              $('#table_$no_acak.highchart').highchartTable();
                   });</script>";
     }

?>
</body>

</html>