<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="jquery/jquery-ui.css" type="text/css" media="screen" />
<script type="text/JavaScript" src="jquery/jquery.min.js"></script>
<script type="text/JavaScript" src="jquery/jquery-1.10.1.js"></script>
<script type="text/JavaScript" src="jquery/jquery-ui.js"></script>
<link rel="stylesheet" href="jquery/jquery-ui.css">
<link rel="stylesheet" href="jquery/style.css">
<script type="text/JavaScript" src="upload.js"></script>

<!-- Fancybox -->
<script type="text/javascript" src="plugin/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="plugin/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="plugin/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="plugin/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="plugin/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="plugin/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script language="javascript" type="text/javascript">
<!--
function popitup(url,id) {
	newwindow=window.open(url,'name','height=200,width=500,scrollbars=yes, resizable=yes');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<script type="text/javascript">
	$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: true,
		autoDimensions : true,
		width		: '70%',
		height		: 'auto',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
	
	$(".file_upload").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '35%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});
</script>
<a class="various fancybox.ajax" href="view.php?id=119">View Data</a>
<a class="file_upload fancybox.ajax" href="uploadhandler.php?id=119">Upload File</a>
<input type="button" value="Upload" onclick="return popitup('uploadhandler.php?id=119')"/>

<br>
<br>
</body>
</html>