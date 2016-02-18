<link href="upload/plugin/css/uploadfile.css" rel="stylesheet">
<script src="upload/plugin/js/jquery.min.js"></script>
<script src="upload/plugin/js/jquery.uploadfile.min.js"></script>
<div id="fileuploader">Upload</div>
<script>
$(document).ready(function()
{
var id 			= $("#id").val();
var kategori 	= $("#kategori").val();
$("#fileuploader").uploadFile({
 url: "upload/plugin/php/upload.php?id="+id+"&kategori="+kategori,
 dragDrop: true,
 fileName: "myfile",
 returnType: "json"
 });
});
</script>
<input type="hidden" id="id" value="<?=$_GET['id']?>" />
<input type="hidden" id="kategori" value="<?=$_GET['kategori']?>" />
