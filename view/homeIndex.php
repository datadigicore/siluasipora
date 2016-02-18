<body>
	<div class="header">
		<img src='<?php echo $base_url; ?>static/img/header.png' class="img-responsive mb15">
		<?php 
			include "include/menu.php";
      // include "include/home/dashboardIndex.php";
      // include "include/home/dashboardDekon.php";
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
								$result                = $home->infoTriwulan();
								$status_triwulan_pusat = 'Triwulan '.$result['status_triwulan'];
								$tanggal_akhir_pusat   = $utility->format_tanggal($result['tanggal_akhir']);																		
							?>	
							<strong><p>Proses Pendataan Masih Berlangsung</p></strong>
							<strong><p class="nomargin">Batas Akhir Pelaporan Evaluasi Pusat Triwulan <?php echo $status_triwulan_pusat ." : ". $tanggal_akhir_pusat ;?> dan dapat diperpanjang sesuai kebutuhan</p></strong>
						</div>	
					</div>
					<div class="content-box">
						<div class="content-box-header dark-green">
							Status Pencapaian Anggaran Deputi
						</div>		
	          <div class='content-box-body'>
							<?php $result = $home->realisasiDeputi($status_triwulan_aktif, $tahun_skg);?>
						</div>           
					</div>
				</div>
			</div><!-- end of row -->
		</div><!-- end of main class -->
		<div class="footer">Powered By BBSDM Team : <b><a href='?module=redaksi'>Susunan Redaksi</a></b></div>
	</div><!-- end of container -->
</body>
</html>