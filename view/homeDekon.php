<body>
	<div class="header">
		<img src='<?php echo $base_url ?>static/img/header.png' class="img-responsive mb15">
		<?php 
			include "include/menu.php";
      include "include/home/dashboardIndex.php";
      include "include/home/dashboardDekon.php";
			include "include/home/dashboardTriwulan.php";
    ?>		
	</div>
	<div class="container-fluid">
		<div class="main">		
			<div class="row">	
				<div class="col-sm-12">
					<div id="modal" class="modal-window"></div>					
					<div class="content-box bg-skyblue">
						<div class='content-box-body'>
							<?php 
								$setting_dekon			= mysql_fetch_array(mysql_query("SELECT tanggal_akhir, status_triwulan FROM setting_system WHERE kategori='Dekon' AND status_delete=0 AND status_aktif='1'"));
								$status_triwulan_dekon	= 'Triwulan'.$setting_dekon['status_triwulan'];
								$tanggal_akhir_dekon	= format_tanggal($setting_dekon['tanggal_akhir']);																	
							?>						
							<strong><p class="nomargin">Batas Akhir Pelaporan Evaluasi Dekon Triwulan <?php echo $status_triwulan_dekon ." : ". $tanggal_akhir_dekon ;?></p></strong>
						</div>
					</div>	
					<div class="content-box">
						<div class="content-box-header dark-green">
							Status Pencapaian Anggaran Dekon
						</div>		
	          <div class='content-box-body'>
							<?php realisasi_dekon_provinsi($status_triwulan_aktif, $tahun_skg);?>
						</div>           
					</div>
				</div>
			</div><!-- end of row -->
		</div><!-- end of main class -->
		<div class="footer">Powered By BBSDM Team : <b><a href='?module=redaksi'>Susunan Redaksi</a></b> </div>
	</div><!-- end of container -->
</body>
</html>