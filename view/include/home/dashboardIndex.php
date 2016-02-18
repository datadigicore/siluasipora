<?php
include 'dashboardFungsiCombobox.php';
function realisasi_deputi($no_triwulan,$tahun){
    if($no_triwulan !=''){ 
    $query="SELECT S.title,S.unit,S.sub_unit,S.sub_subunit,M.JML_PENYERAPAN,M.id_struktur_parent,M.id_struktur_child, M.komentar, A.pagu_anggaran FROM strukturorganisasi S 
            left join (select id_struktur_parent,komentar, id_struktur_child,sum(triwulan$no_triwulan"."_realisasi) as JML_PENYERAPAN 
            from main_kegiatan_pusat where tahun_anggaran='$tahun' and status_delete = 0 group by id_struktur_parent) M on M.id_struktur_parent=S.id_struktur                     
            left join (select pagu_anggaran,unit,sub_unit,sub_subunit  
            from anggaran_kementerian  where sub_unit!=0 and sub_subunit=0 and tahun_anggaran='$tahun' and status_delete = 0) A
            on A.unit=S.unit and A.sub_unit=S.sub_unit and A.sub_subunit=S.sub_subunit 
            where S.sub_unit!=0 and S.sub_subunit=0 group by S.unit,S.sub_unit,S.sub_subunit order by S.sub_unit";
     $result=  mysql_query($query) or die(mysql_error());
     $no_acak=  rand(0, 1000);
          echo "<center><h2>Data Evaluasi Pusat Tingkat Deputi Tahun $tahun <br />Triwulan $no_triwulan</h2></center>";
               echo "
                    <table class=\"table table-striped table-hover CSSTableGenerator  highchart\"  data-graph-container-before=\"1\" id=\"table_$no_acak\" data-graph-type=\"column\">
                    <thead>
			<tr>
				<th>Nama Unit</th>
				<th>Pagu Anggaran</th>
				<th>Realisasi Anggararan<br/> Triwulan $no_triwulan</th>				
						
			</tr>
		</thead>";
               echo "<tbody>";
                    $i = 0;
		  while($row= mysql_fetch_array($result)){
			?>
			<tr>
				<td><?php echo "<a href='report_pagu_asdep.php?unit=$row[unit] &sub_unit=$row[sub_unit] &id=$row[id_struktur_parent]'>$row[title]</a>";?></td>
                        <td style="text-align: right;"><?php echo $row['pagu_anggaran'];?></td>
                		<td  style="text-align: left;"><?php echo $row['JML_PENYERAPAN'];?></td> 				
			</tr>
		<?php	
			$i++; 
		}
		  echo "</tbody></table>"; 
          echo "<script>$(document).ready(function() {
				$('#table_$no_acak.highchart').highchartTable();
			   });</script>";
     }
	}
?>