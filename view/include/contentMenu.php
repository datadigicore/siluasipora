<?php 
  if ($_SESSION['jabatan']=='Dispora'){
	$title = $home->cekJabatanDispora();
	$kategori="Dekon";
  }
  elseif ($_SESSION['jabatan']=='Kemenpora'){
	$title = $home->cekJabatanKemenpora();
	$kategori="Pusat";
  }else{
	$title = $_SESSION['jabatan'];
	$kategori="Pusat";
  }
echo "
	<nav class='navbar navbar-default'>
		<div class='container-fluid'>
			<!-- Brand and toggle get grouped for better mobile display -->
		    <div class='navbar-header'>
		      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
		        <span class='sr-only'>Toggle navigation</span>
		        <span class='icon-bar'></span>
		        <span class='icon-bar'></span>
		        <span class='icon-bar'></span>
		      </button>
		    </div>
		    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
				<ul class='nav navbar-nav'>
					<li><a href='home'>Beranda</a></li>";
				if ($_SESSION['jabatan']=='Administrator'){
				echo"
					<li><a href='import'>Import Rkakl</a></li>			
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Anggaran Dasar <span class='caret'></a>
						<ul class='dropdown-menu'>
							<li class='last'><a href='anggaran/programmenteri'><span><b>Program Kementerian</b></span></a></li>
							<li class='last'><a href='anggaran/perunitkerja'><span><b>Anggaran Per Unit Kerja</b></span></a></li>
							<li class='last'><a href='anggaran/programdekon'><span><b>Program Dekon</b></span></a></li>
							<li class='last'><a href='anggaran/dekonprovinsi'><span><b>Dana Dekon Provinsi</b></span></a></li>
						</ul>
					</li>";
				}
				if (($_SESSION['jabatan']=='Administrator') OR ($_SESSION['jabatan']=='Kemenpora')) {
				echo"			
					<li><a href='evaluasipusat'>Evaluasi Pusat</a></li>";
				}
				if (($_SESSION['jabatan']=='Administrator') OR ($_SESSION['jabatan']=='Dispora')) {
				echo"			
					<li><a href='evaluasidekon'>Evaluasi Dekon</a></li>";
				}
				if ($_SESSION['jabatan']=='Administrator'){
				echo"			
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Pengaturan <span class='caret'></a>
						<ul class='dropdown-menu'>
							<li class='last'><a href='management/dispora'><b>Manajemen Dispora</b></a></li>				  				  
							<li class='last'><a href='management/pengguna'><b>Manajemen Pengguna</b></a></li>
							<li class='last'><a href='management/sistempusat'><b>Manajemen Sistem Pusat</b></a></li>							
							<li class='last'><a href='management/sistemdekon'><b>Manajemen Sistem Dekon</b></a></li>							
							<li class='last'><a href='management/progresspusat'><b>Manajemen Progress Pusat</b></a></li>		
							<li class='last'><a href='management/progressdekon'><b>Manajemen Progress Dekon</b></a></li>		
							<li class='last'><a href='management/organisasi'><b>Struktur Organisasi</b></a></li>	
						</ul>
					</li>";
				}
				echo"		
					<li><a href='profile'>Ubah Password</a></li>			
					<li><a href='".$base_url."logout'>Keluar</a></li>	
				</ul>
				<ul class='nav navbar-nav navbar-right'>";	
					$status	= $home->infoTriwulanByKategori($kategori);	
					echo"<li><a href=''><img src='".$base_url."static/img/ico_users_64.png' alt='Profil' width='20' height='20' /> [$title] [Status Aktif: $status]</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>";
?>