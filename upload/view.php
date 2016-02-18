<script>
function deleteFile(id,file_name,kategori){
	var r=confirm("Hapus File Ini?");
	if(r==true){
		$.ajax({
			type:"POST",
			url: "upload/plugin/php/delete.php",
			data: "id="+id+"&name="+file_name+"&kategori="+kategori+"&op=delete",
			success: function(data){       
				if(data==0){
					alert("Data Berhasil di Hapus");
				}
			}
		});
	} else {
		return false;
	}
}
</script>
<table width="100%">
	<thead>
	<tr>
		<th>No&nbsp;&nbsp;&nbsp;   </th>
		<th>Nama File &nbsp;&nbsp;&nbsp;  </th>
		<th>Hapus&nbsp;&nbsp;&nbsp;  </th>
	</tr>
	</thead>
	<tbody>
<?php
include("../config/koneksi.php");
$id 		= $_GET['id'];
$kategori 	= $_GET['kategori'];

$data = mysql_query("SELECT * FROM upload_file where id_main_kegiatan = '{$id}' AND kategori = '{$kategori}'");
$no = 1;
$count = mysql_num_rows($data);

if($count != 0){
	while($row = mysql_fetch_array($data))
	{
	?>
		<tr valign="center">
			<td valign="center" width="1%"><?=$no++?></td>
			<td valign="center" width="5%"><a href="upload/uploads/<?=$row['file_name']?>" target="_blank"><?=$row['file_name']?></a></td>
			<td valign="center">&nbsp;&nbsp;&nbsp;<a href="" onclick="deleteFile('<?=$row['id'];?>','<?=$row['file_name'];?>','<?=$kategori;?>')"><img src="images/ico_delete_16.png"></a></td>		
		</tr>
	<?php
	}
} else {
	echo "<tr><td colspan='3'>Tidak ada file</td></tr>";
}
?>
</tbody>
	<tfoot>
		<td colspan="3"></td>
	</tfoot>
</table>