<?php 
  if ($_SESSION['jabatan']=='Dispora'){
	$data_title	= mysql_fetch_array(mysql_query("SELECT nama_provinsi FROM provinsi WHERE id_provinsi='$_SESSION[id_provinsi]'"));
	$title		= 'Dispora '.$data_title['nama_provinsi'];
  }
  elseif ($_SESSION['jabatan']=='Kemenpora'){
	$data_title	= mysql_fetch_array(mysql_query("SELECT title FROM strukturorganisasi WHERE unit='$_SESSION[unit]' AND sub_unit='$_SESSION[sub_unit]' AND sub_subunit='$_SESSION[sub_subunit]'"));
	$title		= $data_title['title'];	
  }else{
	$title		= $_SESSION['jabatan'];
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
					<li><a href='import'>Import Data</a></li>			
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Anggaran Dasar <span class='caret'></a>
						<ul class='dropdown-menu'>
							<li class='last'><a href='?module=program_kementerian'><span><b>Program Kemeterian</b></span></a></li>
							<li class='last'><a href='?module=anggaran_per_unit_kerja'><span><b>Anggaran Per Unit Kerja</b></span></a></li>
							<li class='last'><a href='?module=program_dekon'><span><b>Program Dekon</b></span></a></li>
							<li class='last'><a href='?module=dana_dekon_provinsi'><span><b>Dana Dekon Provinsi</b></span></a></li>
						</ul>
					</li>";
				}
				if (($_SESSION['jabatan']=='Administrator') OR ($_SESSION['jabatan']=='Kemenpora')) {
				echo"			
					<li><a href='?module=evaluasi_pusat'>Evaluasi Pusat</a></li>";
				}
				if (($_SESSION['jabatan']=='Administrator') OR ($_SESSION['jabatan']=='Dispora')) {
				echo"			
					<li><a href='?module=dekon'>Evaluasi Dekon</a></li>";
				}
				if ($_SESSION['jabatan']=='Administrator'){
				echo"			
					<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Pengaturan <span class='caret'></a>
						<ul class='dropdown-menu'>
							<li class='last'><a href='?module=dispora'><b>Manajemen Dispora</b></a></li>				  				  
							<li class='last'><a href='?module=pengguna'><b>Manajemen Pengguna</b></a></li>
							<li class='last'><a href='?module=sistem_pusat'><b>Manajemen Sistem Pusat</b></a></li>							
							<li class='last'><a href='?module=sistem_dekon'><b>Manajemen Sistem Dekon</b></a></li>							
							<li class='last'><a href='?module=progress_pusat'><b>Manajemen Progress Pusat</b></a></li>		
							<li class='last'><a href='?module=progress_dekon'><b>Manajemen Progress Dekon</b></a></li>		
							<li class='last'><a href='?module=struktur'><b>Struktur Organisasi</b></a></li>	
						</ul>
					</li>";
				}
				echo"		
					<li><a href='?module=profil'>Ubah Password</a></li>			
					<li><a href='".$base_url."logout'>Keluar</a></li>	
				</ul>
				<ul class='nav navbar-nav navbar-right'>";	
									
					echo"<li><a href=''><img src='".$base_url."static/img/ico_users_64.png' alt='Profil' width='20' height='20' /> [$title] [Status Aktif: $status]</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>";
?>