<?php
$output_dir = "../../uploads/";
include("../../../config/koneksi.php");
$id_kegiatan 	= $_GET['id'];
$kategori 		= $_GET['kategori'];
$stamp 			= date("Ymd-His");
if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
 	 	$fileName = $_FILES["myfile"]["name"];
		$tempExt = explode(".", $_FILES["myfile"]["name"]);
		$extension = ".".end($tempExt);
		$fixname = $tempExt[0]."_".$stamp.$extension;
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fixname);
    	$ret[]= $fixname;
		
		//query database
		mysql_query("INSERT INTO upload_file (kategori,id_main_kegiatan,file_name,file_size,upload_path) values ('".$kategori."','".$id_kegiatan."','".$fixname."','".$_FILES['myfile']['size']."','".$upload_path."')");
		// mysql_query($query);
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["myfile"]["name"][$i];
		$tempExt = explode(".", $_FILES["myfile"]["name"][$i]);
		$extension = ".".end($tempExt);
		$fixname = $tempExt[0]."_".$stamp.$extension;
		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fixname);
	  	$ret[]= $fixname;
		
		//query database
		// $query = "INSERT INTO upload_file (id_main_kegiatan,file_name,file_size,upload_path) values ({$id_kegiatan},{$fixname.$extension},{$_FILES['myfile']['size']},'')";
		// mysql_query($query);
	  }
	
	}
    echo json_encode($ret);
 }
 ?>