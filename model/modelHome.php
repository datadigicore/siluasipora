<?php
  class modelHome extends mysql_db {
    public function infoTriwulan() {
			$query  = "SELECT tanggal_akhir, status_triwulan FROM setting_system WHERE kategori='Pusat' AND status_delete=0 AND status_aktif='1'";
			$result = $this->query($query);
			$fetch  = $this->fetch_array($result);
			return $fetch;
    }
    public function statusTriwulan() {
			$query  = "SELECT status_triwulan FROM setting_system WHERE status_aktif=1 AND kategori='Pusat' AND status_aktif='1' AND status_delete=0";
			$result = $this->query($query);
			$fetch  = $this->fetch_array($result);
			return $fetch;
    }
    public function realisasiDeputi($no_triwulan,$tahun){
    	if(!empty($no_triwulan)){
	    	$query="SELECT S.title,S.unit,S.sub_unit,S.sub_subunit,M.JML_PENYERAPAN,M.id_struktur_parent,M.id_struktur_child, M.komentar, A.pagu_anggaran FROM strukturorganisasi S 
	            left join (select id_struktur_parent,komentar, id_struktur_child,sum(triwulan$no_triwulan"."_realisasi) as JML_PENYERAPAN 
	            from main_kegiatan_pusat where tahun_anggaran='$tahun' and status_delete = 0 group by id_struktur_parent) M on M.id_struktur_parent=S.id_struktur                     
	            left join (select pagu_anggaran,unit,sub_unit,sub_subunit  
	            from anggaran_kementerian  where sub_unit!=0 and sub_subunit=0 and tahun_anggaran='$tahun' and status_delete = 0) A
	            on A.unit=S.unit and A.sub_unit=S.sub_unit and A.sub_subunit=S.sub_subunit 
	            where S.sub_unit!=0 and S.sub_subunit=0 group by S.unit,S.sub_unit,S.sub_subunit order by S.sub_unit";
	      $result = $this->query($query);
	      $no_acak=  rand(0, 1000);
				echo "<center><h2>Data Evaluasi Pusat Tingkat Deputi Tahun $tahun <br />Triwulan $no_triwulan</h2></center>
				<table class=\"table table-striped table-hover CSSTableGenerator  highchart\"  data-graph-container-before=\"1\" id=\"table_$no_acak\" data-graph-type=\"column\">
				<thead>
				<tr>
				<th>Nama Unit</th>
				<th>Pagu Anggaran</th>
				<th>Realisasi Anggararan<br/> Triwulan $no_triwulan</th>				
				</tr>
				</thead>
				<tbody>";
				while($row = $this->fetch_array($result)) {
				echo "<tr>
					<td> <a href='report_pagu_asdep.php?unit=$row[unit]&sub_unit=$row[sub_unit]&id=$row[id_struktur_parent]'>$row[title]</a></td>
					<td style='text-align: right;'>$row[pagu_anggaran]</td>
					<td style='text-align: left;'>$row[JML_PENYERAPAN]</td> 				
				</tr>";
				}
				echo "</tbody></table>"; 
				echo "<script>$(document).ready(function() {
				$('#table_$no_acak.highchart').highchartTable();
				});</script>";
    	}
  	}
  }
?>
