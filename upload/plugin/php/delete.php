<?php
$output_dir = "../../uploads/";
include("../../../config/koneksi.php");
$id 		= $_POST['id'];
$kategori 	= $_POST['kategori'];
$operator 	= $_POST['op'];

if(($operator == 'delete') AND ($_POST['name']!='')){
	$fileName =$_POST['name'];
	$filePath = $output_dir. $fileName;
	if (file_exists($filePath)){
		$delete = mysql_query("DELETE FROM upload_file WHERE id = '$id' AND kategori='$kategori'");
		if($delete){
			unlink($filePath);
			echo 0;
		}
    }
}

?>